<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 2/13/2017
 * Time: 3:39 PM
 */

namespace Sahakavatar\Framework\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Framework\Models\CssCompiliator;
use Illuminate\Http\Request;


class gridsController extends Controller
{
    public function index()
    {
        return view('framework::grids.index');
    }

    public function saveGrid(Request $request, CssCompiliator $compiliator)
    {
        $data = $request->all();
        $compiliator->gridGen($data['css_data']);
        return redirect()->back();
    }

}