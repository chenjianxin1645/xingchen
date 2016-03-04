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
Route::group(['namespace' => 'frontDesk'], function()
{
    /*
   Route::get('/', function () {
       return view('frontDesk/index');
   });
   */

    Route::get('/','indexController@index');
    Route::get('introduce','indexController@index1');
    Route::get('about',function(){
        return view('frontDesk/about') ;});
    Route::get('services',function(){
        return view('frontDesk/services');
    });
    Route::get('gallery',function(){return view('frontDesk/gallery');});
    Route::get('testmonials',function(){return view('frontDesk/testmonials');});
    Route::get('contact',function(){return view('frontDesk/contact');});
});

Route::controllers([
    'manager/auth' => 'backManager\Auth\AuthController',
    'manager/password' => 'backManager\Auth\PasswordController',
]);
Route::get('manager/mews','CaptchaController@mews');



Route::group(['prefix'=>'manager','namespace'=>'backManager','middleware'=>'adminAuth'],function() {
    Route::get('home', 'PanerController@index');
    Route::group(['prefix'=>'display','namespace'=>'display'],function(){
        Route::get('/','aboutController@index');
        Route::get('about','aboutController@index');
//团队简介：
        Route::get('about/introEdit/{id}','aboutController@introEdit');
        Route::post('about/introEditOk/{id}','aboutController@introEditOk');
//团队成员：
       // Route::get('about/member/create','aboutController@memAdd');/manager/display/about/member/create
        Route::controller('about/member', 'memController');//隐式控制器




        Route::get('news','newsController@index');
        Route::get('exhibition','exhibitionController@index');
        Route::get('testmonials','testmonialsController@index');
        Route::get('contact','contactController@index');
    });
    Route::group(['prefix'=>'user','namespace'=>'display'],function(){
        Route::get('/',function() {
            return view('backManager/person/person');
        });
    });
    Route::group(['prefix'=>'video','namespace'=>'display'],function(){
        Route::get('/',function() {
            return view('backManager/video/video');
        });
    });
    Route::group(['prefix'=>'talk','namespace'=>'display'],function(){
        Route::get('/',function() {
            return view('backManager/group/group');
        });
    });
    Route::group(['prefix'=>'discuss','namespace'=>'display'],function(){
        Route::get('/',function() {
            return view('backManager/discuss/discuss');
        });
    });
    Route::group(['prefix'=>'personinfo','namespace'=>'display'],function(){
        Route::get('/',function(){
            return view('backManager/person/personinfo');
        });
    });





});