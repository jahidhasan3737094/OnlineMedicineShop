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

 Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Medicine', 'AdminController@Medicine');
Route::post('/medicineSubmit','AdminController@medicineSubmit');
 Route::get('/editInfo/{pid}','HomeController@editInfo');
 Route::post('/updateUser','HomeController@updateUser');
 Route::prefix('admin')->group(function(){
  //Route::post('admin.login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.Login');
  Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/Medicine', 'AdminController@Medicine');

});
