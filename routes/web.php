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

Route::group(['middleware' => 'auth'], function () {
   Route::resource('balita', 'balitaController');
   Route::get('api/balita', 'balitaController@apiBalita')->name('api/balita');

   Route::resource('ibuhamil', 'ibuhamilController');
   Route::get('api/ibuhamil', 'ibuhamilController@apiIbuHamil')->name('api/ibuhamil');

   Route::resource('ruasjalan', 'ruasjalanController');
   Route::get('api/ruasjalan', 'ruasjalanController@apiRuasJalan')->name('api/ruasjalan');

   Route::resource('rumahibadah', 'rumahibadahController');
   Route::get('api/rumahibadah', 'rumahibadahController@apiRumahIbadah')->name('api/rumahibadah');
});