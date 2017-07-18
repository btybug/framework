<?php
/**
 * Created by PhpStorm.
 * User: shojan
 * Date: 4/15/2017
 * Time: 9:38 PM
 */

namespace Sahakavatar\Framework\Models;


use Illuminate\Database\Eloquent\Model;

class Collections extends Model
{
    const INACTIVE_VERSION = 0;
    const ACTIVE_VERSION = 1;
    const FINAL_ACTIVE_VERSION = 2;

    protected $table = 'collections';
    protected $guarded = ['id'];
    protected $casts = [
        'data' => 'array',
    ];

    protected static $name;
    public function activate(){
        $DS = DS;
        $id = $this->id;
        self::where('active', self::FINAL_ACTIVE_VERSION)->update(['active' => self::ACTIVE_VERSION]);
        $newActive = self::find($id);
        $newActive->active = self::FINAL_ACTIVE_VERSION;
        $newActive->save();
        $data = is_array($this->data) ? $this->data : json_decode($this->data, true);
        $array=[];

        foreach($data as $item){
            foreach ($item as $k=>$v){
                $array[$k]=$v['classes'];
            }
        };
        $javascript=\File::get(app_path("Modules{$DS}Framework{$DS}js_stub{$DS}main.stub"));
        $javascript=str_replace('{{json}}',json_encode($array,true),$javascript);
        if(!\File::isDirectory(public_path("framework"))){
            \File::makeDirectory(public_path("framework"));
        }
        \File::put(public_path("framework{$DS}main.js"), $javascript, true);
        return $this;
    }

    public static function getActive(){
        return self::where('active',1)->first();
	}

    public function upload($file)
    {
        $extension = $file->getClientOriginalExtension(); // getting image extension
        if ($extension != 'json') return ['error' => true, 'message' => 'collection should be json file'];

        $uf = "app/Modules/Framework/Uploads/";
        $originalFileName = $file->getClientOriginalName();
        $fileNmae = str_replace($extension, "", $originalFileName);
        if ($file->move($uf, $originalFileName)) {
            $file = \File::get($uf.$originalFileName);
            \File::delete($uf.$originalFileName);
            return ['error' => false, 'data' => $file];
        }
        return ['error' => true, 'message' => 'try again'];
    }

    public static function ConfiguredCollections()
    {
        $DS=DS;
        $configuredCollections=\File::files(app_path("Modules{$DS}Framework{$DS}ConfiguredCollections"));
        $array=[];
        foreach ($configuredCollections as $key=>$value){
            $file=explode('/',$value);
            $name=str_replace('.json','',end($file));
            $array[$name]=$name;
        }
        return $array;
    }
    public static function ConfiguredMainCss()
    {
        $DS=DS;
        $configuredCollections=\File::files(app_path("Modules{$DS}Framework{$DS}Frameworks{$DS}MainCss"));
        $array=[];
        foreach ($configuredCollections as $key=>$value){
            $file=explode('/',$value);
            $name=end($file);
            $array[$name]=$name;
        }
        return $array;
    }

    public static function defaultMasterCollection()
    {
        $DS=DS;
        $configuredCollections=\File::files(app_path("Modules{$DS}Framework{$DS}Frameworks{$DS}MasterCollections"));
        $array=[];
        foreach ($configuredCollections as $key=>$value){
            $file=explode('/',$value);
            $name=end($file);
            $name = explode('.', $name);
            $name= $name[0];
            $array[$name]=$name;
        }
        return $array;
    }

    public static function getDefaultMasterCollectionContent() {
        $DS=DS;
        $configuredCollections=\File::files(app_path("Modules{$DS}Framework{$DS}Frameworks{$DS}MasterCollections"));
       if(isset($configuredCollections[0]) && \File::isFile($configuredCollections[0])) {
           $fileData = json_decode(\File::get($configuredCollections[0]), true);
           return $fileData['data'];
       }
    }

    public static function checkMasterDefaultIsActive() {
        return self::where('is_default', 1)->where('active', self::FINAL_ACTIVE_VERSION)->count() ? true : false;
    }


    public static function checkUniqueCollectionNames($collection, $type) {
        if($collection) {
            foreach($collection as $item => $itemCollection) {
                if($itemCollection) {
                    foreach($itemCollection as $collectionName => $collectionData) {
                        $itemCollection[self::checkUniqueCollectionName($collectionName, $type, true)] = $collectionData;
                        unset($itemCollection[$collectionName]);
                    }
                }
            }
        }
        return $collection;
    }

    public static function checkUniqueCollectionName($name, $type, $all=false) {
        $name = $all ? str_replace(" ","", $name) : '$' . str_replace(" ","", $name);
        self::$name = $name;
        $collections = $type == 'master' ? self::where('type', 'custom')->get() : self::all();
        if($collections) {
            foreach($collections as $collection) {
                $collectionData = $collection->data;
                $name = self::sanitizeName($name, $collectionData);
            }
        }
        return $name;
    }

    public static function sanitizeName($name, $collectionData) {
        if($collectionData && !empty($collectionData)) {
            foreach($collectionData as $item => $data) {
                if(array_key_exists($name, $data)) {
                    preg_match("/(\([0-9]+\))$/", $name, $matches);
                    if(!empty($matches)) {
                        preg_match('#\((.*?)\)#', $matches[0], $match);
                        $name =  self::$name . '(' . ((int)$match[1] + 1) . ')';
                    } else {
                        $name = $name . '(1)';
                    }
                    self::sanitizeName($name, $collectionData);
                }
            }
            return $name;
        }
    }

    public static function generateMainJS() {
        $DS = DS;
        $collections = self::where('active', '!=', self::INACTIVE_VERSION)->get();
        $array=[];
        foreach($collections as $collection) {
            if(($collection->type == 'master' && $collection->active == self::FINAL_ACTIVE_VERSION) || $collection->type == 'custom') {

                $data = is_array($collection->data) ? $collection->data : json_decode($collection->data, true);
                foreach($data as $item){
                    foreach ($item as $k=>$v){
                        if(isset($v['classes'])) {
                            $array[$k]=$v['classes'];
                        }
                    }
                }
            }
        }

        $javascript=\File::get(app_path("Modules{$DS}Framework{$DS}js_stub{$DS}main.stub"));
        $javascript=str_replace('{{json}}',json_encode($array,true),$javascript);
        if(!\File::isDirectory(public_path("Framework"))){
            \File::makeDirectory(public_path("Framework"));
        }
        return \File::put(public_path("Framework{$DS}main.js"), $javascript, true);
    }

}