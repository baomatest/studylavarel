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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
/*Route::group(['middleware' => 'auth'], function () {
    Route::get('/home','HomeController@index')->name('home');
        // User đăng nhập mới vào được backend

Auth::routes();

  /*  Route::get('user/profile', function () {
        // User đăng nhập mới vào được trang cá nhân
    });*
});*/


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cm','Menucontroller@Guicreate');
Route::post('/cm','Menucontroller@create');
