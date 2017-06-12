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

Route::get('/send', function () {
    return view('sendMessage');
});
Route::post('/tasks','TaskController@store');

Route::get('/login',function(){
  return view('loginPage');
});
Route::post('/getId','DeviceIdController@store');
