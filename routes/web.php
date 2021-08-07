<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/user', function () {
    return view('user');
});

Route::get('superadmin','Crud\SuperadminController@index');
Route::post('save','Crud\SuperadminController@store');
Route::get('superadminShow','Crud\SuperadminController@show');
Route::get('superadminEdit','Crud\SuperadminController@edit');
Route::post('superadminShow','Crud\SuperadminController@delete');