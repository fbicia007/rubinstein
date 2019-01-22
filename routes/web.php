<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

/*中间件
Route::group(['middleware' => ['admin.login']], function() {

    Route::any('admin/index','Admin\IndexController@index');
    Route::any('admin/basic','Admin\IndexController@basic');
    Route::any('admin/logout','Admin\LoginController@logout');

});
*/

if (env('APP_ENV') === 'production') {
    URL::forceSchema('https');
}

//优化中间件提出相同部分的前缀
Route::group(['middleware' => ['admin.login'],'prefix' => 'admin', 'namespace'=>'Admin'], function() {

    Route::any('index','IndexController@index');
//    Route::get('basic','IndexController@basic');
    Route::get('logout','LoginController@logout');
    Route::any('password','IndexController@password');
    Route::get('reg_edu','IndexController@reg_edu');
    Route::get('reg_master','IndexController@reg_master');
    Route::get('reg_match','IndexController@reg_match');

});

Route::any('admin/login','Admin\LoginController@login');



Route::get('admin/crypt','Admin\LoginController@crypt');

//Route::get('admin/code','Admin\LoginController@code');//验证码

Route::get('','IndexController@index');
Route::get('infos','IndexController@infos');
Route::any('contact','IndexController@contact');
Route::get('news','IndexController@news');
Route::get('branch','IndexController@branch');
Route::get('imprint','IndexController@imprint');
Route::get('dp','IndexController@dp');

Route::get('lecturers','IndexController@lecturers');
Route::get('lecturerDetails/{lecturerId}','IndexController@lecturerDetails');


Route::get('masterClasses','IndexController@masterClasses');
Route::any('masterClassDetails/{masterId}','IndexController@masterClassDetails');

Route::get('educationalSystem','IndexController@educationalSystem');
Route::get('educationalDetails/{eduId}','IndexController@educationalDetails');

Route::get('competitions','IndexController@competitions');
Route::any('competitionDetails/{compId}','IndexController@competitionDetails');

Route::any('registration','IndexController@registration');
Route::get('location/{locId}','IndexController@location');

