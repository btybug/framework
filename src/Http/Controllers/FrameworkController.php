<?php
/**
 * Copyright (c) 2017.
 * *
 *  * Created by PhpStorm.
 *  * User: Edo
 *  * Date: 10/3/2016
 *  * Time: 10:44 PM
 *
 */

namespace App\Modules\Framework\Http\Controllers;

use App\helpers\helpers;
use App\Http\Controllers\Controller;
use App\Modules\Framework\Models\Classes;
use App\Modules\Framework\Models\Collection;
use App\Modules\Framework\Models\Collections;
use App\Modules\Framework\Models\CssCompiliator;
use App\Modules\Framework\Models\CustomClasses;
use App\Modules\Framework\Models\Framework;
use App\Modules\Framework\Models\FW_INPUT;
use App\Modules\Framework\Models\StylesBulder;
use App\Repositories\AdminsettingRepository as Settings;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Validator;

/**
 * Class SystemController
 * @package App\Modules\Settings\Http\Controllers
 */
class FrameworkController extends Controller
{
    /**
     * @var Settings|null
     */
    private $settings = null;
    /**
     * @var helpers|null
     */
    private $helpers = null;

    /**
     * SystemController constructor.
     * @param Settings $settings
     */
    public function __construct(Settings $settings)
    {
        $this->helpers = new helpers;
        $this->settings = $settings;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex(Request $request)
    {
        $type = $request->get('type', 'basic');
        $p = $request->get('p');
        $version = Framework::active()->first();
        $types = Classes::$referencesMenuItems;
        $selectMenuItems = isset(Classes::$referencesSubMenuItems[$type]) ? Classes::$referencesSubMenuItems[$type] : [];
        if ($p == NULL && count($selectMenuItems)) $p = key($selectMenuItems);

        $data = ($version) ? $version->references($type,$p) : []; //$version->reserences($type, $p);
        $studio = "collections";
        return view('framework::index',compact(['types', 'selectMenuItems', 'type', 'types', 'p', 'data', 'studio']));
    }

    public function getConfigurations(Request $request)
    {
        $version = Framework::active()->first();
        $collection = new Collection;
        $selectMenuItems = Classes::$collectionsMenuItems;
        $type = $request->get('type', 'p');
        $collections = ($version) ? $version->getCollectionsByType($type) : [];
        
        return view('framework::configurations',compact(['selectMenuItems', 'type', 'collections']));
    }

    public function getMasterCollection(Request $request)
    {
        $version = Framework::active()->first();
        $collection = new Collection;
        $selectMenuItems = Classes::$collectionsMenuItems;
        $type = $request->get('type', 'p');
        $data = count($version) ? $version->getMasterCollectionsByType($type) : [];
        $collection = Collections::where('active', Collections::FINAL_ACTIVE_VERSION)->where('type', 'master')->first();
        return view('framework::collections.master',compact(['selectMenuItems', 'type','data', 'collection']));
    }

    public function getCoreClasses()
    {

        return view('framework::index');
    }

    public function getFonts($request, $classes)
    {
        $tab = 'basic';
        $type = 'font_icons';
        $p = $request->get('p');
        $curent_sub_dir = 'sub_types';
        $selectMenuItems = Classes::$basicMenuItems;
        return view('framework::fonts', compact(['type', 'p', 'tab', 'selectMenuItems', 'curent_sub_dir']));
    }

    public function getIconFonts(Request $request, Classes $classes)
    {
        $tab = 'basic';
        $type = 'text_parts';
        $p = $request->get('p');
        $curent_sub_dir = 'sub_types';
        $selectMenuItems = Classes::$basicMenuItems;
        return view('framework::fonts', compact(['type', 'p', 'tab', 'selectMenuItems', 'curent_sub_dir']));
    }

    public function postCreateClass(Request $request, Classes $classes, StylesBulder $stylesBulder)
    {
        $data = $request->except('_token');
        $validator = Validator::make($data, [
            'type' => "required",
            'tab' => "required",
            'sub' => "required",
            'css' => "required",
        ]);
        if ($validator->fails()) {
            return \Response::json(['error' => true, "message" => $validator->messages()]);
        }
        $permission = $classes->isAllocreateItem($data['tab'], $data['type'], $data['sub']);
        if (!$permission) return \Response::json(['error' => true, "message" => ['type' => ['permission denied!!!']]]);
//        if (!isset(Classes::$basicMenuItems[$data['type']])) return \Response::json(['error' => true, "message" => ['type' => ['type is wrong!!!']]]);

        $result = $stylesBulder->create($data);
        return \Response::json(['error' => false, 'data' => $result->data[$data['tab']][$data['type']][$data['sub']]]);

    }

    public function getComponents(Request $request)
    {

        return view('framework::index');
    }

    public function getJs()
    {
        return view('framework::js');
    }

    public function getCollections(Request $request)
    {
        $version = Framework::active()->first();
        $collection = new Collection;
        $selectMenuItems = Classes::$collectionsMenuItems;
        $type = $request->get('type', 'p');
        $data = $request->collection == 'framework' ? $version->getCollectionsByType($type) : $collection->getExistingCollections($type);
        return view('framework::collections', compact(['selectMenuItems', 'type', 'data']));
    }

    public function getElementClass(Request $request) {
        $collection = new Collection;
        $selectMenuItems = Classes::$collectionsMenuItems;
        $type = $request->get('type', 'p');
        $data = $collection->getExistingCollections($type);
        return view('framework::element_class', compact(['selectMenuItems', 'type', 'data']));
    }

    public function postCreateGlobalClasses(Request $request) {
        $data = $request->except('token');

        $rules = [
            'name' => 'required|alpha_dash',
        ];
        $v = \Validator::make($data, $rules);
        if ($v->fails()) return redirect()->back()->withErrors($v);


        $collection = new Collections;
        $collection->name = Collections::checkUniqueCollectionName($request->name, 'custom');
        $collection->active = Collections::ACTIVE_VERSION;
        $collection->type = 'custom';
        $collection->is_default = 0;
        $collection->data = [
            $data['sub_type'] => [
                Collections::checkUniqueCollectionName($request->name, 'custom') => [
                    'display_name' => Collections::checkUniqueCollectionName($request->name, 'custom')
                ]
            ]
        ];
//        if(!Collections::checkUniqueCollectionName($request->name, 'custom')) {
//            return redirect()->back()->withErrors(['Class name must be a unique']);
//        }
        if($collection->save()) {
            return redirect()->back()->with(['message' => 'New class has been added successfully.']);
        }

    }

    public function deleteCollection(Request $request) {
        $collection = new Collection;
        $deleted = $collection->delete($request->slug) ? true : false;
        return \Response::json(['success' => $deleted]);

    }

    public function getCssLive($type, $p)
    {
        return view('framework::css_live_editor', compact(['type', 'p']));
    }

    public function postGetSubClasses(Request $request, Classes $classes, StylesBulder $stylesBulder)
    {
        $data = $request->all();
        $validator = Validator::make($data, ['type' => "required"]);
        if ($validator->fails()) {
            return \Response::json(['error' => true, "message" => $validator->messages()]);
        }
        return $stylesBulder->getItemsByType($data['type']);

    }

    public function test()
    {
        return view('framework::test.index');
    }

    public function postGetEditData(Request $request, Classes $classes, StylesBulder $stylesBulder)
    {
        $data = $request->except('_token');
        $validator = Validator::make($data, [
            'type' => "required",
            'tab' => "required",
            'sub' => "required",
            'css' => "required",
            'old_classname' => "required",
        ]);
        if ($validator->fails()) {
            return \Response::json(['error' => true, "message" => $validator->messages()]);
        }

        $permission = $classes->isAllocreateItem($data['tab'], $data['type'], $data['sub']);
        if (!$permission && !isset($data['css'][$data['old_classname']])) return \Response::json(['error' => true, "message" => ['type' => ['permission denied!!!']]]);
        if ($data['tab'] == 'basic') {
            if (!isset(Classes::$basicMenuItems[$data['type']])) return \Response::json(['error' => true, "message" => ['type' => ['type is wrong!!!']]]);
        }
        if ($data['tab'] == 'styles') {
            if (!isset(Classes::$styleMenuItems[$data['type']])) return \Response::json(['error' => true, "message" => ['type' => ['type is wrong!!!']]]);
        }


        $result = $stylesBulder->edit($data);
        return \Response::json(['error' => false, 'data' => $result->data[$data['tab']][$data['type']][$data['sub']]]);
    }

    public function deleteClass(Request $request, Classes $classes, StylesBulder $stylesBulder)
    {
        $data = $request->except('_token');
        $validator = Validator::make($data, [
            'type' => "required",
            'tab' => "required",
            'sub' => "required",
            'classname' => "required",
        ]);
        if ($validator->fails()) {
            return \Response::json(['error' => true, "message" => $validator->messages()]);
        }
        $permission = $classes->isAllocreateItem($data['tab'], $data['type'], $data['sub']);
        if (!$permission) return \Response::json(['error' => true, "message" => ['type' => ['permission denied!!!']]]);
        if($data['tab']!='component'){
            if (!isset(Classes::$basicMenuItems[$data['type']]) & !isset(Classes::$collectionsMenuItems[$data['type']])) return \Response::json(['error' => true, "message" => ['type' => ['type is wrong!!!']]]);
        }
        $result = $stylesBulder->delete($data);
        return \Response::json(['error' => false]);
    }

    public function getSubItems(Request $request, StylesBulder $stylesBulder)
    {
        $data = $request->except('_token');
        $validator = Validator::make($data, [
            'type' => "required",
            'tab' => "required",
            'sub' => "required",
        ]);
        if ($validator->fails()) {
            return \Response::json(['error' => true, "message" => $validator->messages()]);
        }
        $data = isset($stylesBulder->data[$data['tab']][$data['type']][$data['sub']]) ? $stylesBulder->data[$data['tab']][$data['type']][$data['sub']] : [];
        return \Response::json(['error' => false, "data" => $data]);
    }

    public function getClassByPaath(Request $request, StylesBulder $stylesBulder)
    {
        $data = $request->except('_token');
        $validator = Validator::make($data, [
            'path' => "required",
        ]);
        if ($validator->fails()) {
            return \Response::json(['error' => true, "message" => $validator->messages()]);
        }
        return $stylesBulder->getClassByPath($data['path']);
    }

    public function getCreateNewGroup(Request $request, Classes $classes)
    {
        $validator = Validator::make($request->all(), ['group_name' => 'required', 'type' => 'required', 'sub' => 'required']);
        if ($validator->fails()) {
            return \Response::json(['error' => true, 'message' => $validator->messages()]);
        }
        $name = $request->get('group_name');
        $type = $request->get('type');
        $sub = $request->get('sub');

        $key = strtolower(str_replace(' ', '_', $name));
        if (!isset($classes->collections[$type][$key])) {
            $classes->collections[$type][$key] = $name;
            $classes->saveGroup();
            return \Response::json(['error' => false]);
        }
        return \Response::json(['error' => true, 'message' => []]);
    }

    public function getDeleteNewGroup(Request $request, Classes $classes, StylesBulder $stylesBulder)
    {
        $type = $request->type;
        $key = $request->key;
        if (isset($classes->collections[$type][$key])) {
            unset($classes->collections[$type][$key]);
            if (isset($stylesBulder->data['collections'][$type][$key])) {
                unset($stylesBulder->data['collections'][$type][$key]);
                $stylesBulder->saveJson();
            }
            $classes->saveGroup();
        }
        return redirect()->back();
    }

    public function getClassByTabTypeSub(Request $request, StylesBulder $stylesBulder)
    {

        $data = $request->except('_token');
        $validator = Validator::make($data, [
            'type' => "required",
            'tab' => "required",
            'sub' => "required",
        ]);
        if ($validator->fails()) {
            return \Response::json(['error' => true, 'message' => $validator->messages()]);
        }
        $tab = $data['tab'];
        $type = $data['type'];
        $sub = $data['sub'];
        $data = $stylesBulder->getStylesData($data['tab'], $data['type'], $data['sub']);
        $prefix = isset($stylesBulder->prefixes[$tab][$type][$sub]) ? $stylesBulder->prefixes[$tab][$type][$sub] : "";
        return \Response::json(['error' => false, 'data' => $data, 'prefix' => $prefix]);
    }

    public function getBasicSubs(Request $request, Classes $classes)
    {
        $type = $request->get('type', false);
        if (!$type || !isset($classes->groups[$type])) return \Response::json(['error' => true, 'message' => "Type is wrong"]);
        return \Response::json(['error' => false, 'data' => $classes->groups[$type]]);
    }

    public function getCollectionsSubs(Request $request, Classes $classes)
    {
        $validator = Validator::make($request->all(), [
            'type' => "required",
        ]);
        if ($validator->fails()) {
            return \Response::json(['error' => true, 'message' => $validator->messages()]);
        }
        $type = $request->get('type');
        $flag=['general' => 'General','custom'=>'Custom'];
        if(isset(Classes::$basicRules['collectios'][$type])){
            $flag=isset(Classes::$colectionFixetSubs[$type])?Classes::$colectionFixetSubs[$type]:[];
        }
        $colect_subs = isset($classes->collections[$type]) ? $flag + $classes->collections[$type] : $flag;
        return \Response::json($colect_subs);
    }
    public function postLessCss(Request $request){
        $data=$request->except('_token');
        dd($data);
    }

    public function postUpload(Request $request,Framework $framework)
    {
         $data=$framework->upload($request->file('file'));
         return \Response::json(['data'=>$data]);
    }

    public function getMainClassesContent(Request $request) {
        $type = $request->get('type', 'basic');
        $p = $request->get('p');
        $version = Framework::active()->first();
        $types = Classes::$referencesMenuItems;
        $selectMenuItems = isset(Classes::$applyClassesSubMenuItems[$type]) ? Classes::$applyClassesSubMenuItems[$type] : [];
        if ($p == NULL && count($selectMenuItems)) $p = key($selectMenuItems);

        $data = $version->references($type,$p);
        $studio = "collections";

        $collection = Collections::where('active', '!=', Collections::INACTIVE_VERSION)
            ->where('name', $request->collection)
            ->first();
        $existingClasses = [];
        if(!$collection) {
            $collections = Collections::where('active', '!=', Collections::INACTIVE_VERSION)->get();
            foreach($collections as $collection) {
                if(isset($collection->data[$request->type][$request->collection])) {
                    $classes = $collection->data[$request->type][$request->collection];
                    if(isset($classes['classes']) && $classes['classes'] != '') {
                        $classes = explode(' ', trim($classes['classes']));
                        foreach($classes as $class) {
                            if($class != '') {
                                $existingClasses[$class] = $class;
                            }
                        }
                    }
                }
            }
        } else {
            if(isset($collection->data[$request->type][$request->collection])) {
                $classes = $collection->data[$request->type][$request->collection];
                if(isset($classes['classes']) && $classes['classes'] != '') {
                    $classes = explode(' ', trim($classes['classes']));
                    foreach($classes as $class) {
                        if($class != '') {
                            $existingClasses[$class] = $class;
                        }
                    }
                }
            }
        }



        $classes = json_encode($existingClasses, true);
        $html =  \View::make('framework::_partials.apply_main_classes',compact(['types', 'selectMenuItems', 'type', 'types', 'p', 'data', 'studio', 'classes', 'existingClasses']))->render();
        return \Response::json(['html' => $html]);
    }

    public function getCustomClassesContent(Request $request) {
        $type = $request->get('type', 'basic');
        $p = $request->get('p');
        $types = Classes::$referencesMenuItems;
        $selectMenuItems = isset(Classes::$referencesSubMenuItems[$type]) ? Classes::$referencesSubMenuItems[$type] : [];
        if ($p == NULL && count($selectMenuItems)) $p = key($selectMenuItems);

        $data = CustomClasses::references($type,$p);
        $studio = "collections";
        $html =  \View::make('framework::_partials.apply_custom_classes',compact(['types', 'selectMenuItems', 'type', 'types', 'p', 'data', 'studio']))->render();
        return \Response::json(['html' => $html]);
    }

    public function applyClassesToCollection(Request $request) {
        $result = false;
        $collection = Collections::where('type', $request->type)->where('name', $request->key)->where('active', '!=', 0)->first();
        if(!$collection) {
            $collections = Collections::where('type', $request->type)->where('active', '!=', 0)->get();
            foreach($collections as $collection) {
                $data = $collection->data;
                if(isset($data[$request->element]) && array_key_exists($request->key, $data[$request->element])) {

                    $data[$request->element][$request->key]['classes'] = implode(' ', array_values(json_decode($request->items, true)));
                    $collection->data = $data;
                    $result = $collection->save() ? true : false;
                }
            }
        } else {
            $data = $collection->data;
            if(isset($data[$request->element]) && array_key_exists($request->key, $data[$request->element])) {
                $data[$request->element][$request->key]['classes'] = implode(' ', array_values(json_decode($request->items, true)));
                $collection->data = $data;
                $result = $collection->save() ? true : false;
            }
        }
        if($result) {
            Collections::generateMainJS();
        }
        return \Response::json(['success' => $result]);
    }

}
