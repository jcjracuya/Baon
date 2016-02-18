<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@landingpage');
Route::get('/test', 'PagesController@test');
Route::get('/adminlogin', 'PagesController@adminlogin');
Route::post('/adminlogin', 'AdminAuthController@adminLogin');
Route::get('/adminsignup', 'PagesController@adminsignup');
Route::post('/adminsignup', 'AdminAuthController@adminRegister');
Route::get('/editor', 'PagesController@editor');
Route::get('/admin/home', 'AdminController@index');
Route::get('/admin/schools', 'AdminController@viewSchools');
Route::get('/admin/mealpackages', 'AdminController@viewMP');
Route::get('/admin/school/add', 'AdminController@addSchool');
Route::get('/admin/mealpackage/add', 'AdminController@addMP');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
