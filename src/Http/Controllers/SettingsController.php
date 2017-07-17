<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 3/23/2017
 * Time: 11:24 PM
 */

namespace App\Modules\Framework\Http\Controllers;

use App\Modules\Framework\Models\Collections;
use App\Modules\Framework\Models\Framework;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SettingsController extends Controller
{
    public function getIndex()
    {
        $localeFrameworks = Framework::where('active', '!=', Framework::INACTIVE_VERSION)->pluck('version', 'id')->toArray();
//        $configuredCollections=Collections::ConfiguredCollections();
        $configuredMainCss=Collections::ConfiguredMainCss();
        $defaultMasterCollections = Collections::defaultMasterCollection();
        $ActiveFrameworks = Framework::where('active', Framework::FINAL_ACTIVE_VERSION)->first();
        $ActiveFrameworks=($ActiveFrameworks)?$ActiveFrameworks->id:null;
        $collections = Collections::where('active', '!=', Collections::INACTIVE_VERSION)->where('is_default', 0)->where('type', 'master')->pluck('name', 'id')->toArray();
        $activeCollection = Collections::where('active', Collections::FINAL_ACTIVE_VERSION)->first() ? Collections::where('active', Collections::FINAL_ACTIVE_VERSION)->first()->id: null;
        return view('framework::Settings.index', compact(['localeFrameworks','ActiveFrameworks','configuredMainCss','collections', 'activeCollection','configuredCollections', 'defaultMasterCollections']));

    }

    public function getSortCodes()
    {
        return view('framework::Settings.shortcodes');
    }

    public function postSaveFramework(Request $request)
    {
        $data = $request->all();
        $active = $data['local_fw'];
        $default = Collections::where('is_default', 1)->first();
        if(!count($default)) {
            $collection = new Collections([
                'name' => $data['master_collection_default'],
                'data' => Collections::getDefaultMasterCollectionContent(),
                'active' => Framework::ACTIVE_VERSION,
                'type' => 'master',
                'is_default' => 1
            ]);
            $collection->save();
        }

        Framework::activate($active);
//        $collection = Collections::findOrFail($request->collection_id);
        $collection = (int)$request->default ? Collections::where('is_default', 1)->first() : Collections::findOrFail($request->collection_id);

        if ($collection->activate()) {
            return redirect()->back()->with('message', "successfully activated");
        } else {
            return redirect()->back()->with('message', "something going wrong");
        }

        return redirect()->back();

    }
}