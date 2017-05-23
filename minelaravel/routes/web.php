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
Route::get('admin','Admin\LoginController@index')->name('index');
Route::get('admin/login','Admin\LoginController@login')->name('login');
Route::get('admin/register','Admin\RegisterController@index')->name('register');
/*Route::group(['perfix'=>'admin','middleware'=>'auth'],function (){
    Route::get('/','Admin\LoginController@index');

    Route::get('/login','Admin\LoginController@login');

});*/
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
