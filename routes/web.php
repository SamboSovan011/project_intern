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
// Route User
Route::get('/', 'HomeController@index');
Route::post('/signup', ['as' => 'SignUp', 'uses' => 'HomeController@SignUp']);
// Route::post('/login', ['as' => 'Login', 'uses' => 'HomeController@Login']);
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/checkEmail', ['as' => 'checkEmail', 'uses' => 'RegisterController@checkEmailAvailable']);

// Route admin
Route::get('/admin/login', 'AdminController@showadminloginform');
Route::post('/admin', ['as' => 'adminlogin', 'uses' => 'AdminController@login']);
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::prefix('/admin/dashboard')->group(function(){
    Route::get('/slidelisting', ['as' => 'slidelisting', 'uses' => 'ListingController@slideListing']);
    Route::get('/slide', ['as' => 'slide', 'uses' => 'ListingController@slideForm']);
    Route::post('/post', ['as'=>'postSlide', 'uses' => 'ListingController@postSlide']);
});
