<?php
/**
 * Copyright (c) 2017. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

namespace Sahakavatar\Framework\Http\Controllers;

use App\Http\Controllers\Controller;
use Sahakavatar\Framework\Http\Requests\SettingsSaveRequest;
use Sahakavatar\Framework\Repository\VersionsRepository;
use Sahakavatar\Framework\Services\SettingsService;
use Sahakavatar\Settings\Repository\AdminsettingRepository;

/**
 * Class SystemController
 * @package App\Modules\Settings\Http\Controllers
 */
class SettingsController extends Controller
{
    public function getIndex(
        VersionsRepository $versionsRepository,
        AdminsettingRepository $adminsettingRepository
    )
    {
        $type = "back";
        $cssData = $versionsRepository->wherePluck('type', 'css', 'name', 'id')->toArray();
        $model = $adminsettingRepository->getVersionsSettings('versions', 'backend');

        return view('framework::versions.settings', compact(['cssData', 'model', 'type']));
    }

    public function postIndex(
        SettingsSaveRequest $request,
        AdminsettingRepository $adminsettingRepository,
        SettingsService $service
    )
    {
        $data = $request->except('_token');
        $data['jquery_version'] = $service->makeJquery($request, 'Back');
        $adminsettingRepository->createOrUpdateToJson($data, 'versions', 'frontend');

        return back()->with('message', 'Settings are saved');
    }

    public function getFrontSettings(
        VersionsRepository $versionsRepository,
        AdminsettingRepository $adminsettingRepository
    )
    {
        $type = "front";
        $cssData = $versionsRepository->wherePluck('type', 'css', 'name', 'id')->toArray();
        $model = $adminsettingRepository->getVersionsSettings('versions', 'frontend');
        return view('framework::versions.settings', compact(['cssData', 'model', 'type']));
    }

    public function postFrontSettings(
        SettingsSaveRequest $request,
        AdminsettingRepository $adminsettingRepository,
        SettingsService $service
    )
    {
        $data = $request->except('_token');
        $data['jquery_version'] = $service->makeJquery($request, 'Front');
        $adminsettingRepository->createOrUpdateToJson($data, 'versions', 'frontend');

        return back()->with('message', 'Settings are saved');
    }
}
