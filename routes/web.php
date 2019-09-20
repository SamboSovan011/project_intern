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

Route::get('/', 'HomeController@index');
Route::post('/signup', ['as' => 'SignUp', 'uses' => 'HomeController@SignUp']);
// Route::post('/login', ['as' => 'Login', 'uses' => 'HomeController@Login']);

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
// Route admin
Route::get('/admin/login', 'AdminController@showadminloginform');
Route::post('/admin', ['as' => 'adminlogin', 'uses' => 'AdminController@login']);
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::prefix('/admin/dashboard')->group(function(){
    Route::get('/slide', ['as' => 'slide', 'uses' => 'AdminController@slide']);
    Route::post('/post', ['as'=>'postSlide', 'uses' => 'AdminController@postSlide']);
});
