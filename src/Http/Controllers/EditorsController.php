<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 3/1/2017
 * Time: 3:26 PM
 */

namespace Sahakavatar\Framework\Http\Controllers;

use Sahakavatar\Framework\Models\Assets;
use Sahakavatar\Framework\Models\Components;
use Sahakavatar\Framework\Models\StylesBulder;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class EditorsController extends Controller
{
    public function index(Components $components,StylesBulder $stylesBulder)
    {
        $type='jumbtron';
        $p=1;
            $core='core';
        $component = $components->makeCores($type, $p) ;
        $stylesBulder->data['component'];
        $componentClasses= isset($stylesBulder->data['component'][$type][$p])?$stylesBulder->data['component'][$type][$p]:[];
        $cssJson = $stylesBulder->getClassByPath('component.' . $type . '.' . $p);
        $cssJson = ($cssJson) ? json_encode($cssJson, true) : null;
        $types=['button'=>'Buttons','nav_bar'=>'Navbar','jumbtron'=>'Jumbtron','menu'=>'Menu','card'=>'Card'];

        return view('framework::Editors.index',compact(['component','types']));

    }


}