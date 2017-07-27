<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 3/23/2017
 * Time: 11:24 PM
 */

namespace Sahakavatar\Framework\Http\Controllers;

use Sahakavatar\Framework\Models\Classes;
use Sahakavatar\Framework\Models\CustomClasses;
use Sahakavatar\Framework\Models\Framework;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CustomController extends Controller
{
    public function getIndex(Request $request)
    {
        $type = $request->get('type', 'basic');
        $p = $request->get('p');
        $types = Classes::$referencesMenuItems;
        $selectMenuItems = isset(Classes::$referencesSubMenuItems[$type]) ? Classes::$referencesSubMenuItems[$type] : [];
        if ($p == NULL && count($selectMenuItems)) $p = key($selectMenuItems);

        $data = CustomClasses::references($type,$p);//$version->references($type,$p);//$version->reserences($type, $p);
        $studio = "collections";
        return view('framework::custom.index',compact(['types', 'selectMenuItems', 'type', 'types', 'p', 'data', 'studio']));
    }

    public function postUpload(Request $request,CustomClasses $customClasses)
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

        $result = $customClasses->upload($file);

        if($result['error'] == false){

            $col = new CustomClasses();
            $col->create([
                'name' => $data['name'],
                'data' => $result['data']
            ]);
            $customClasses->generateCss();
            return \Response::json(['error' => false,'message' => 'collection saved']);
        }

        return \Response::json(['error' => true]);
    }

    public function postDelete(Request $request,CustomClasses $customClasses)
    {
        $DS = DS;
        $id = $request->get('slug');
        $deleted = false;
        $class = CustomClasses::findOrFail($id);
        if($class->delete()){
            $deleted= true;
            $customClasses->generateCss();
        }
        return \Response::json(['success' => $deleted]);
    }

    public function postActivate(Request $request) {
        $selectedClass = CustomClasses::find($request->id);
        $result = false;
        if($selectedClass && $selectedClass->active) {
            $data = $selectedClass->data;
            if(!empty($data) && array_key_exists($request->item_name, $data)
                && $data[$request->item_name]['item_name'] == $request->item_name){
                $data[$request->item_name]['active'] = true;
                $selectedClass->data = $data;
            }
            $result = $selectedClass->save() ? true : false;
            $selectedClass->generateCss();
        }
        return \Response::json(['success' => $result]);
    }

    public function postDeactivate(Request $request) {
        $selectedClass = CustomClasses::find($request->id);
        $result = false;
        if($selectedClass && $selectedClass->active) {
            $data = $selectedClass->data;
            if(!empty($data) && array_key_exists($request->item_name, $data)
                && $data[$request->item_name]['item_name'] == $request->item_name){
                $data[$request->item_name]['active'] = false;
                $selectedClass->data = $data;
            }
            $result = $selectedClass->save() ? true : false;
            $selectedClass->generateCss();
        }
        return \Response::json(['success' => $result]);
    }
}