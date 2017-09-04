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
Route::get('/','IndexController@getIndex');
Route::get('/assets','IndexController@getAssets');
Route::get('/main-js','IndexController@getMainJs');
Route::post('/','IndexController@postUpload');
Route::post('/generate-main-js','IndexController@postGenerateMainJs');
Route::post('/make-active','IndexController@postMakeActive');

Route::group(['prefix' => 'settings'], function () {
    Route::get('/','IndexController@getSettings');
    Route::post('/','IndexController@postSettings');
    Route::get('/frontend','IndexController@getFrontSettings');
    Route::post('/frontend','IndexController@postFrontSettings');
});

