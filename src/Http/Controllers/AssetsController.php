<?php
/**
 * Created by PhpStorm.
 * User: shojan
 * Date: 2/1/2017
 * Time: 10:41 AM
 */

namespace Sahakavatar\Framework\Http\Controllers;

use Sahakavatar\Framework\Models\Assets;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    public function getIndex(Request $request)
    {
        $type = $request->get('type','fonts');
//        $p = $request->get('p', Assets::getMainSub($type));
        $p = $request->get('p');
        $currentAsset = null;
        $assets = CmsItemReader::getAllGearsByType('assets')
            ->where('type', $type)
            ->run();
        if ($p) {
            $currentAsset = CmsItemReader::getAllGearsByType('assets')
                ->where('type', $type)
                ->where('slug', $p)
                ->first();
        } elseif(count($assets)) {
            $currentAsset = CmsItemReader::getAllGearsByType('assets')
                ->where('type', $type)
                ->first();
        }

        return view('framework::framework_assets.index',compact(['type','p', 'assets', 'currentAsset']));

    }
}