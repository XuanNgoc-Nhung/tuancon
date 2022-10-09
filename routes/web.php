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
Route::middleware(['cors'])->group(function () {
    Route::get('/check-ip-config', 'AdminController@CheckIpConfig');
});

Route::get('/', 'HomeController@getHome')->name("homeUser");
Route::get('/admin', 'AdminController@getHome')->name("homeAdmin");
Route::get('/ip-config', 'AdminController@ipConfig')->name("ipConfig");
Route::post('/get-list-ip', 'AdminController@getListIp');
Route::post('/add-ip', 'AdminController@addIp');
Route::post('/update-ip', 'AdminController@updateIp');
Route::post('/delete-ip', 'AdminController@deleteIp');
Route::get('/login', 'MyLoginController@getLogin')->name("getLogin");
Route::post('/login', 'MyLoginController@postLogin')->name("postLogin");
Route::get('/register', 'MyLoginController@getRegister')->name("getRegister");
Route::post('/register', 'MyLoginController@postRegister')->name("postRegister");

