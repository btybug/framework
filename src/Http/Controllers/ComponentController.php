<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 2/6/2017
 * Time: 1:59 PM
 */

namespace App\Modules\Framework\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Framework\Models\CssCompiliator;
use App\Modules\Framework\Models\StylesBulder;
use Illuminate\Http\Request;
use App\Modules\Framework\Models\Components;

class ComponentController extends Controller
{
    public function index(Request $request, Components $components, StylesBulder $stylesBulder)
    {
        $data = $components->getSubs();
        $type = $request->get('type', 'button');
        $is_core = $request->get('core', false);
        $parent = isset($components->baseClasses[$type]) ? $components->baseClasses[$type] : null;
        $p = $request->get('p', null);
        $data = isset($data[$type]) ? $data[$type] : [];
        $id = isset($data[$p]['id']) ? $data[$p]['id'] : null;
        $cssJson = $stylesBulder->getClassByPath('component.' . $type . '.' . $p);
        $cssJson = ($cssJson) ? json_encode($cssJson, true) : null;
        $component = ($is_core) ? $components->makeCores($type, $p) : $components->make($id);
        $cores = isset($components->cores[$type]) ? $components->cores[$type] : [];
        $componentClasses= isset($stylesBulder->data['component'][$type][$p])?$stylesBulder->data['component'][$type][$p]:[];
        $types=['button'=>'Buttons','nav_bar'=>'Navbar','jumbtron'=>'Jumbtron','menu'=>'Menu','card'=>'Card'];
        return view('framework::components', compact(['type', 'p', 'data', 'component', 'cssJson', 'parent', 'cores', 'components','componentClasses','types']));
    }

    public function updareCss(CssCompiliator $compiliator)
    {
        $compiliator->cssGenerators();
        dd('done');
    }

    public function postUpload(Request $request, Components $components)
    {
        return $components->upload($request->file());
    }

    public function deleteComponent(Request $request, Components $components)
    {
        $id = $request->id;
        $components->delete($id);
        return redirect()->back();
    }

    public function test(CssCompiliator $gen)
    {
        return view('framework::test');
    }
    public function getComponentsTypes(Request $request, Components $components)
    {
        $data = $components->getSubs();
        $type = $request->get('type', 'button');
        $extra = isset($data[$type]) ? $data[$type] : [];
        $cores = isset($components->cores[$type]) ? $components->cores[$type] : [];
        return \Response::json(['cores'=>$cores,'extra'=>$extra]);

    }

    public function getItemsindex(Request $request, Components $components, StylesBulder $stylesBulder)
    {
        $is_core=$request->get('core',false);
        $type=$request->get('type');
        $p=$request->get('p');
        $data = $components->getSubs();
        $id = isset($data[$p]['id']) ? $data[$p]['id'] : null;
        $component = ($is_core) ? $components->makeCores($type, $p) : $components->make($id);
        $componentClasses= isset($stylesBulder->data['component'][$type][$p])?$stylesBulder->data['component'][$type][$p]:[];
        return \Response::json(['original'=>$component,'variations'=>$componentClasses]);
    }

    public function getExport(Request $request, StylesBulder $stylesBulder)
    {
        $data=$request->all();
        dd($stylesBulder->data['component'][$data['type']][$data['sub']][$data['slug']]);
        dd($data);

    }
}