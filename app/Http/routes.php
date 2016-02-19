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
// Route::get('/adminlogin', 'PagesController@adminlogin');
// Route::post('/adminlogin', 'AdminAuthController@adminLogin');
// Route::get('/adminsignup', 'PagesController@adminsignup');
// Route::post('/adminsignup', 'AdminAuthController@adminRegister');
// Route::get('/editor', 'PagesController@editor');
// Route::get('/admin/home', 'AdminController@index');
// Route::get('/admin/schools', 'AdminController@viewSchools');
// Route::get('/admin/mealpackages', 'AdminController@viewMP');
// Route::get('/admin/school/add', 'AdminController@addSchool');
// Route::post('/admin/school/add', 'AdminController@storeSchool');
// Route::get('/admin/mealpackage/add', 'AdminController@addMP');
// Route::post('/admin/mealpackage/add', 'AdminController@storeMP');
// Route::get('/admin/mealpackage/edit/{id?}', 'AdminController@editMP');
// Route::post('/admin/mealpackage/edit/{id?}', 'AdminController@updateMP');
// Route::get('/admin/mealpackage/delete/{id?}', 'AdminController@deleteMP');







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
    Route::post('/login', 'LoginController@login');
    Route::get('/home', 'HomeController@index');

    Route::get('user/home', 'UserController@home');
    Route::get('user/order', 'UserController@order');
    Route::post('user/order/add', 'UserController@addOrder');
    Route::get('user/order/view', 'UserController@viewOrders');

    Route::get('/admin/home', 'AdminController@index');
    Route::get('/admin/schools', 'AdminController@viewSchools');
    Route::get('/admin/mealpackages', 'AdminController@viewMP');
    Route::get('/admin/school/add', 'AdminController@addSchool');
    Route::post('/admin/school/add', 'AdminController@storeSchool');
    Route::get('/admin/mealpackage/add', 'AdminController@addMP');
    Route::post('/admin/mealpackage/add', 'AdminController@storeMP');
    Route::get('/admin/mealpackage/edit/{id?}', 'AdminController@editMP');
    Route::post('/admin/mealpackage/edit/{id?}', 'AdminController@updateMP');
    Route::get('/admin/mealpackage/delete/{id?}', 'AdminController@deleteMP');
    Route::get('/admin/school/edit/{id?}', 'AdminController@editSchool');
    Route::post('/admin/school/edit/{id?}', 'AdminController@updateSchool');
    Route::get('/admin/school/delete/{id?}', 'AdminController@deleteSchool');

});
