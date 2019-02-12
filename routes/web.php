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
Route::get('/home/sholat', 'HomeController@sholat')->name('home.solat');
Route::get('/home/sholat/subuh', 'HomeController@subuh')->name('home.subuh');
Route::get('/home/sholat/dzuhur', 'HomeController@dzuhur')->name('home.dzuhur');
Route::get('/home/sholat/ashar', 'HomeController@ashar')->name('home.ashar');
Route::get('/home/sholat/magrib', 'HomeController@magrib')->name('home.magrib');
Route::get('/home/sholat/isya', 'HomeController@isya')->name('home.isya');

Route::get('/t/qadhasolat', 'SolatController@create')->name('solat.create');
Route::post('/t/qadhasolat', 'SolatController@store')->name('solat.store');
Route::get('/qadhasolat/{id}', 'SolatController@edit')->name('solat.edit');
Route::patch('/qadhasolat/{id}', 'SolatController@update')->name('solat.update');