<?php
namespace Sahakavatar\Framework\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sahakavatar\Cms\Models\Routes;
use Sahakavatar\Framework\Http\Requests\AddVersionRequest;
use Sahakavatar\Framework\Http\Requests\MakeActiveVersionRequest;
use Sahakavatar\Framework\Repository\VersionSettingsRepository;
use Sahakavatar\Framework\Repository\VersionsRepository;
use Sahakavatar\Framework\Services\VersionsService;
use Sahakavatar\Settings\Repository\AdminsettingRepository;

/**
 * Class SystemController
 * @package App\Modules\Settings\Http\Controllers
 */
class IndexController extends Controller
{
    public function getIndex(
       VersionsRepository  $versionsRepository
    )
    {
        $versions = $versionsRepository->getAll();
        return view('framework::versions.index',compact(['versions']));
    }

    public function postUpload(
        AddVersionRequest $request,
        VersionsService $versionsService
    )
    {
        $versionsService->makeVersion($request);

        return redirect()->back()->with('message','version created successfully');
    }

    public function postMakeActive(
        MakeActiveVersionRequest $request,
        VersionsService $versionsService
    )
    {
        $versionsService->makeActive($request->id);

        return redirect()->back()->with('message','version activated');
    }

    public function getSettings(
        VersionsRepository $versionsRepository,
        AdminsettingRepository $adminsettingRepository
    )
    {
        $cssData = $versionsRepository->wherePluck('type','css','name','id')->toArray();
        $jsData = $versionsRepository->wherePluck('type','js','name','id')->toArray();
        $jqueryData = $versionsRepository->wherePluck('type','jquery','name','id')->toArray();
        $model = $adminsettingRepository->getVersionsSettings('versions','backend');

        return view('framework::versions.settings',compact(['cssData','jsData','jqueryData','model']));
    }

    public function postSettings(
        Request $request,
        AdminsettingRepository $adminsettingRepository
    )
    {
        $adminsettingRepository->createOrUpdateToJson($request->except('_token'),'versions','backend');

        return back()->with('message','Settings are saved');
    }

    public function getFrontSettings(
        VersionsRepository $versionsRepository,
        AdminsettingRepository $adminsettingRepository
    )
    {
        $cssData = $versionsRepository->wherePluck('type','css','name','id')->toArray();
        $jsData = $versionsRepository->wherePluck('type','js','name','id')->toArray();
        $jqueryData = $versionsRepository->wherePluck('type','jquery','name','id')->toArray();
        $model = $adminsettingRepository->getVersionsSettings('versions','frontend');

        return view('framework::versions.front_settings',compact(['cssData','jsData','jqueryData','model']));
    }

    public function postFrontSettings(
        Request $request,
        AdminsettingRepository $adminsettingRepository
    )
    {
        $adminsettingRepository->createOrUpdateToJson($request->except('_token'),'versions','frontend');

        return back()->with('message','Settings are saved');
    }

    public function getAssets(
        VersionsRepository $versionsRepository
    )
    {
        $plugins = $versionsRepository->getBy('type','js');
        return view('framework::versions.assets',compact(['plugins']));
    }

    public function getMainJs(
        VersionsRepository $versionsRepository
    )
    {
        $plugins = $versionsRepository->getBy('type','js');
        return view('framework::versions.mainjs',compact(['plugins']));
    }
}
