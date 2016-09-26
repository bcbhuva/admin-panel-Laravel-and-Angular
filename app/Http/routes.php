<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['prefix' => 'siteadmin/'], function () {
    Route::get('/', function(){
      return view('master');
    });
});

Route::group(['prefix' => 'api', 'middleware' => 'cors'], function(){
    Route::resource('/video', 'VideoController');
    Route::post('/auth/login', 'AuthController@authenticate');
    Route::get('/video/search/{term}', 'VideoController@search');
});
