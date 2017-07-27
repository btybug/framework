<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 3/2/2017
 * Time: 2:58 PM
 */

namespace Sahakavatar\Framework\Http\Controllers;

use Sahakavatar\Framework\Models\Assets;
use Sahakavatar\Framework\Models\Components;
use Sahakavatar\Framework\Models\StylesBulder;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class CreatorController
{
    public function index()
    {

        return view('framework::index');
    }
}