<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 2/13/2017
 * Time: 3:39 PM
 */

namespace Sahakavatar\Framework\Http\Controllers;

use App\Core\CmsItemReader;
use App\Http\Controllers\Controller;
use Sahakavatar\Framework\Models\Classes;
use Sahakavatar\Framework\Models\Collections;
use Sahakavatar\Framework\Models\Components;
use Sahakavatar\Framework\Models\CustomClasses;
use Sahakavatar\Framework\Models\Framework;
use Sahakavatar\Framework\Models\Icons;
use Sahakavatar\Framework\Models\StylesBulder;
use App\Modules\Modules\Models\Upload;
use Illuminate\Http\Request;


class PlugunController extends Controller
{
    const INACTIVE_VERSION = 0;
    const ACTIVE_VERSION = 1;
    const FINAL_ACTIVE_VERSION = 2;

    public function getCustomClasses()
    {
        $classes = CustomClasses::all();
        return view('framework::plugins.index', compact(['classes']));
    }

    public function getAddOns() {
        $addOns = [];
        $data = [
            'framework' => Framework::all(),
            'classes' => CustomClasses::all(),
            'collections' => Collections::all()
        ];
        foreach($data as $type => $item) {
            foreach($item as $currentItem) {
                array_push($addOns, array_merge($currentItem->toArray(), ['data_type' => $type]));
            }
        }
        return view('framework::plugins.add-on', compact(['addOns']));
    }

    public function activateAddOn(Request $request) {
        $className = $request->type == 'classes' ? 'Sahakavatar\Framework\Models\Custom' . ucfirst($request->type) : 'Sahakavatar\Framework\Models\\' . ucfirst($request->type);
        $item = $className::find($request->id);
        $item->active = self::ACTIVE_VERSION;
        $result = $item->save() ? true : false;
        return \Response::json(['success' => $result]);
    }

    public function inactivateAddOn(Request $request) {
        $className = $request->type == 'classes' ? 'Sahakavatar\Framework\Models\Custom' . ucfirst($request->type) : 'Sahakavatar\Framework\Models\\' . ucfirst($request->type);
        $item = $className::find($request->id);
        $item->active = self::INACTIVE_VERSION;
        $result = $item->save() ? true : false;
        return \Response::json(['success' => $result]);
    }

    public function deleteAddOn(Request $request) {
        $className = $request->type == 'classes' ? 'Sahakavatar\Framework\Models\Custom' . ucfirst($request->type) : 'Sahakavatar\Framework\Models\\' . ucfirst($request->type);
        $item = $className::where('id', $request->id)->where('active', self::INACTIVE_VERSION)->first();
        if($request->type == 'framework') {
            $ds = DS;
            $path = public_path("Framework{$ds}versions{$ds}{$item->version}");
            \File::delete($path);
        }
        $result = $item->delete() ? true : false;
        if($request->type == 'classes') {
            $item->generateCss();
        }
        return \Response::json(['success' => $result]);
    }

    public function styles(Request $request, Classes $classes, StylesBulder $stylesBulder)
    {
        $selectMenuItems = Classes::$styleMenuItems;
        $test = new Classes();
        $tab = 'styles';
        $type = $request->get('type', 'text_styles');
        $p = $request->get('p', $classes->getFirstSub($type));
        $data = isset($stylesBulder->data[$tab][$type][$p]) ? $stylesBulder->data[$tab][$type][$p] : [];
        $popup = false;
        $permission = $classes->isAllocreateItem($tab, $type, $p);
        $curent_sub_dir = 'sub_styles';
        if (isset(Classes::$popups[$tab][$type][$p])) {
            $popup = Classes::$popups[$tab][$type][$p];
        }
        return view('framework::plugins.index', compact(['type', 'p', 'selectMenuItems', "popup", 'data', 'curent_sub_dir', 'permission', 'tab']));
    }

    public function components(Components $components)
    {
        return view('framework::plugins.components', compact(['components']));
    }

    public function makeActive(Request $request, Components $components)
    {
        $action = $request->action;
        $id = $request->id;
        $components->makeActive($id, $action);
        return redirect()->back();
    }

    public function framework()
    {
        $frameworks = Framework::all();
        return view('framework::plugins.framework', compact(['frameworks']));
    }

    public function getAssets()
    {
        $frameworks = Framework::all();
        return view('framework::plugins.assets');
    }
    public function getIcons()
    {
        $frameworks = Framework::all();
        return view('framework::plugins.icons');
    }

    public function getCollections()
    {
        $collections = Collections::all();

        return view('framework::plugins.collections', compact(['collections']));
    }

    public function postUploadCollections(Request $request, Collections $collections)
    {
        $file = $request->file('file');
        $data = $request->except('_token');
        $validator = \Validator::make($data, [
            'name' => "required",
            'file' => "required"
        ]);
        if ($validator->fails()) {
            return \Response::json(['error' => true, "message" => $validator->messages()]);
        }

        $result = $collections->upload($file);
        if ($result['error'] == false) {
            $col = new Collections();
            $col->create([
                'name' => $data['name'],
                'active' => 0,
                'data' => $result['data']
            ]);

            return \Response::json(['error' => false, 'message' => 'collection saved']);
        }

        return \Response::json($result);
    }

    public function postDeleteCollections(Request $request)
    {
        $DS = DS;
        $id = $request->get('slug');
        $collection = Collections::find($id);
        if ($collection->active) {
            if (\File::isFile(public_path("framework{$DS}main.js"))) {
                \File::delete(public_path("framework{$DS}main.js"));
            }
        }
        $deleted = $collection->delete() ? true : false;
        if($deleted) {
            Collections::generateMainJS();
        }
        return \Response::json(['success' => $deleted]);
    }

    public function postUploadIcon(Request $request)
    {
        $file = $request->file('file');
        $ds = DS;
        $extension = $file->getClientOriginalExtension(); // getting image extension
        if ($extension != 'zip') return ['error' => true, 'message' => 'Uploaded file should be zip file'];
        $fileOriginalName = $file->getClientOriginalName();
        $name = str_replace('.' . $extension, '', $fileOriginalName);
        $zipName = $name;
        $uploadPath = public_path("Framework{$ds}icons");

        $componentName = $fileOriginalName;
        $componentPath = $uploadPath . DS . $componentName;
        $file->move($uploadPath, $componentName); // uploading file to given path
        try {
            \Zipper::make($uploadPath . DS . $fileOriginalName)
                ->extractTo($uploadPath);
        } catch (\Exception $exception) {
            return ['error' => true, 'message' => $exception->getMessage()];
        }
        \File::delete($uploadPath.DS.$fileOriginalName);
        $files = \File::files($uploadPath.DS.$name);
        \File::delete($uploadPath.DS.$zipName);
        dd(\File::allFiles($uploadPath.DS.$name.DS.'css')[0]);
        if(\File::isDirectory($uploadPath.DS.$name.DS.'css') && count(\File::allFiles($uploadPath.DS.$name.DS.'css'))){
            foreach (\File::allFiles($uploadPath.DS.$name.DS.'css') as $iconCss){

            }
        }
//        Icons::create(['name'=>$name,'path'=>])
    }

    public function postUploadAddOns(Request $request)
    {
        $file = $request->file('file');
        $ds = DS;
        $extension = $file->getClientOriginalExtension(); // getting image extension
        if ($extension != 'zip') return ['error' => true, 'message' => 'Uploaded file should be zip file'];
        $fileOriginalName = $file->getClientOriginalName();
        $name = str_replace('.' . $extension, '', $fileOriginalName);
        $zipName = $name;

        $uploadPath = public_path("Framework{$ds}versions");

        $componentName = $fileOriginalName;
        $componentPath = $uploadPath . DS . $componentName;
        $file->move($uploadPath, $componentName); // uploading file to given path
        try {
            \Zipper::make($uploadPath . DS . $fileOriginalName)
                ->extractTo($uploadPath);
            $fileName = $uploadPath . DS . $name;
        } catch (\Exception $exception) {
            return ['error' => true, 'message' => $exception->getMessage()];
        }
        \File::delete($uploadPath.DS.$fileOriginalName);
        $files = \File::files($uploadPath.DS.$name);

        if(count($files)){
            foreach ($files as $value){
                if(\File::exists($value)){
                    $data = json_decode(\File::get($value),true);

                    if($data && (isset($data['type']) || isset($data['data']))){
                        //dd($data, $fileName);
                        switch ($data['type']){
                            case "custom_classes":
                                $name = (isset($data['name'])) ? $data['name'] : uniqid();
                                $col = new CustomClasses();
                                $col->create([
                                    'name' => $name,
                                    'data' => $data['data']
                                ]);
                                break;
                            case "custom_collections":
                                    $name = (isset($data['name'])) ? $data['name'] : uniqid();
                                    $col = new Collections();
                                    $col->create([
                                        'name' => $name,
                                        'active' => 0,
                                        'data' => Collections::checkUniqueCollectionNames($data['data'], 'custom')
                                    ]);
                                break;
                            case "master_collections":
                                    $name = (isset($data['name'])) ? $data['name'] : uniqid();
                                    $col = new Collections();
                                    $col->create([
                                        'name' => $name,
                                        'active' => 0,
                                        'is_default' => 0,
                                        'type' => "master",
                                        'data' => Collections::checkUniqueCollectionNames($data['data'], 'master')
                                    ]);
                                break;
                            case "framework":
                                $name = (isset($data['name'])) ? $data['name'] : uniqid();
                                $framework = Framework::create(['version' => $name]);
                                if(!\File::isDirectory(public_path("Framework{$ds}versions{$ds}{$name}"))){
                                    \File::makeDirectory(public_path("Framework{$ds}versions{$ds}{$name}"));
                                }
                                if(basename($value) == 'config.json') {
                                    \File::put((public_path("Framework{$ds}versions{$ds}{$name}{$ds}config.json")), \File::get($value));
                                }

                                if(\File::extension($value) == 'css') {
                                    if(!\File::isDirectory(public_path("Framework{$ds}versions{$ds}{$name}{$ds}css"))){
                                        \File::makeDirectory(public_path("Framework{$ds}versions{$ds}{$name}{$ds}css"));
                                    }
                                    \File::move(public_path("Framework{$ds}versions{$ds}{$name}{$ds}css"), $uploadPath.DS.$zipName.DS.'css'.DS.'main.css');
                                }
//                                Framework::makeFrameworkCss($data['data'],$name);
                                break;
                            case "editors":
                                $storageFilePath = storage_path('app/framework_assets.json');
                                $storageFile = \File::get($storageFilePath);
                                $storageFile = json_decode($storageFile, true);
                                //dd($storageFile);
                                $assetSlug = uniqid();
                                $type = (isset($data['type'])) ? $data['type'] : 'asset';
                                $asset = [
                                    'title' => (isset($data['name'])) ? $data['name'] : $assetSlug,
                                    'self_type' => (isset($data['self_type'])) ? $data['self_type'] : 'assets',
                                    'type' => $type,
                                    'preview' => (isset($data['preview'])) ? $data['preview'] : false,
                                    'shortcode' => (isset($data['shortcode'])) ? '[FW-' . $data['shortcode'] . ']' : false,
                                    'created_at' => time('now'),
                                    'slug' => $assetSlug,
                                    'folder' => $zipName,
                                    'path' => 'app/Modules/Framework/' . DS . 'assets' . DS . $type . DS . basename($fileName)
                                ];

                                mkdir(module_path('framework') . DS . 'assets' . DS . $type . DS . basename($fileName));
                                $this->rcopy($fileName, module_path('framework') . DS . 'assets' . DS . $type . DS . basename($fileName));
                                $storageFile[$assetSlug] = $asset;
                                \File::put($storageFilePath, json_encode($storageFile, true));
                                break;
                        }
                    }
                }
            }
        }

        \File::delete($uploadPath.DS.$zipName);
    }

    public  function rcopy($src, $dst) {
        if (file_exists ( $dst ))
            $this->rrmdir ( $dst );
        if (is_dir ( $src )) {
            mkdir ( $dst );
            $files = scandir ( $src );
            foreach ( $files as $file )
                if ($file != "." && $file != "..")
                    $this->rcopy ( "$src/$file", "$dst/$file" );
        } else if (file_exists ( $src ))
            copy ( $src, $dst );
    }

    public function rrmdir($dir) {
        if (is_dir($dir)) {
            $files = scandir($dir);
            foreach ($files as $file)
                if ($file != "." && $file != "..") $this->rrmdir("$dir/$file");
            rmdir($dir);
        }
        else if (file_exists($dir)) unlink($dir);
    }
}