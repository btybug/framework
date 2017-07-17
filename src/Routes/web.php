<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/main-css/main','FrameworkController@getIndex');
Route::get('/main-css/element-collection','FrameworkController@getConfigurations');
Route::get('/main-css/master-collection','FrameworkController@getMasterCollection');
Route::get('/main-css/get-apply-classes/{collection}/{type?}','FrameworkController@getMainClassesContent');
Route::get('/main-css/get-apply-custom-classes','FrameworkController@getCustomClassesContent');
Route::post('/main-css/apply-component-classes','FrameworkController@applyClassesToCollection');

Route::get('/js','FrameworkController@getJs');
Route::get('/core-classes','FrameworkController@getCoreClasses');
Route::get('/fonts','FrameworkController@getFonts');
Route::get('/icon-fonts','FrameworkController@getIconFonts');
//Route::get('/elements-collection/{collection}','FrameworkController@getCollections');
Route::post('/create-new-collection','FrameworkController@postCreateGlobalClasses');
Route::post('/delete-collection','FrameworkController@deleteCollection');
Route::get('/css-live/{type}/{p}','FrameworkController@getCssLive');
Route::post('/get-items','FrameworkController@getSubItems');
//CRUD
Route::post('/create-class','FrameworkController@postCreateClass');
Route::post('/get-subs-with-classes','FrameworkController@postGetSubClasses');
Route::post('/get-class-with-tab-type-sub','FrameworkController@getClassByTabTypeSub');
Route::post('/get-basic-subs','FrameworkController@getBasicSubs');
Route::post('/get-collections-subs','FrameworkController@getCollectionsSubs');
Route::post('/edit-class','FrameworkController@postGetEditData');
Route::post('/delete-class','FrameworkController@deleteClass');
Route::post('/get-class-by-path','FrameworkController@getClassByPaath');
Route::post('/create-new-group','FrameworkController@getCreateNewGroup');
Route::get('/delete-group/{type}/{key}','FrameworkController@getDeleteNewGroup');
Route::post('/get-less-css','FrameworkController@postLessCss');
Route::post('/upload','FrameworkController@postUpload');


//component
Route::group(['prefix'=>'component'],function (){
    Route::get('/','ComponentController@index');
    Route::get('/js-components','ComponentController@JsComponents');
    Route::get('/full-page','ComponentController@fullPage');
    Route::post('/upload','ComponentController@postUpload');
    Route::post('/upload-core/{type}','ComponentController@postUploadCore');
    Route::get('/update-css','ComponentController@updareCss');
    Route::get('/delete/{id}','ComponentController@deleteComponent');
    Route::get('/test','ComponentController@test');
    Route::post('/get-items','ComponentController@getItemsindex');
    Route::post('/get-components','ComponentController@getComponentsTypes');
    Route::post('/export','ComponentController@getExport');
});
Route::group(['prefix'=>'editor'],function (){
    Route::get('/','EditorsController@index');

});
Route::group(['prefix'=>'essential'],function (){
    Route::get('/','EssentialController@getIndex');
    Route::get('/general-classes','EssentialController@generalClasses');
    Route::get('/grid-classes','EssentialController@gridClasses');

});
Route::group(['prefix'=>'unit-maker'],function (){
    Route::get('/','UnitMakerController@getIndex');

});
Route::group(['prefix'=>'creator'],function (){
    Route::get('/','CreatorController@index');
    Route::post('/json-to-export','CreatorController@jsonToExport');
    Route::post('/get-super-classes','CreatorController@postGetSuperClasses');
});
Route::group(['prefix'=>'fw-collections'],function (){
    Route::get('/elements-collection','FrameworkController@getCollections');
    Route::get('/page-collections','CreateController@getIndex');
    Route::get('/component-collections','FrameworkController@getComponentCollections');
});
Route::group(['prefix'=>'grids'],function (){
    Route::get('/','gridsController@index');
    Route::post('/','gridsController@saveGrid');
});
Route::group(['prefix'=>'plugins'],function (){
    Route::get('/classes','PlugunController@getCustomClasses');
    Route::get('/styles','PlugunController@styles');
    Route::get('/components','PlugunController@components');
    Route::get('/components/make-active-component/{id}/{action}','PlugunController@makeActive');
    Route::get('/framework','PlugunController@framework');
    Route::get('/assets','PlugunController@getAssets');
    Route::get('/icons','PlugunController@getIcons');
    Route::get('/collections','PlugunController@getCollections');
//    Route::post('/activate-collection','PlugunController@postActivateCollection');
    Route::post('/upload-collection','PlugunController@postUploadCollections');
    Route::post('/delete-collection','PlugunController@postDeleteCollections');
    Route::get('/add-on','PlugunController@getAddOns');
    Route::post('/upload','PlugunController@postUploadAddOns');
    Route::post('/upload-icons','PlugunController@postUploadIcon');
    Route::post('/activate-add-on','PlugunController@activateAddOn');
    Route::post('/inactivate-add-on','PlugunController@inactivateAddOn');
    Route::post('/delete-add-on','PlugunController@deleteAddOn');
});


//for test
Route::get('/for-test','FrameworkController@test');


//assets
Route::get('/assets','AssetsController@getIndex');
Route::group(['prefix'=>'settings'],function (){
    Route::get('/','SettingsController@getIndex');
    Route::get('/short-codes','SettingsController@getSortCodes');
    Route::post('/','SettingsController@postSaveFramework');
    Route::post('/activate-collection','SettingsController@postActivateCollection');
});
Route::group(['prefix'=>'custom-classes'],function (){
    Route::get('/','CustomController@getIndex');
    Route::post('/upload','CustomController@postUpload');
    Route::post('/delete','CustomController@postDelete');
    Route::post('/activate','CustomController@postActivate');
    Route::post('/inactivate','CustomController@postDeactivate');
});