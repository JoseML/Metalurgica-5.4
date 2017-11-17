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
    return view ('admins.admin');
})->middleware('auth');


Route::prefix('admin')->group(function () {
  
Route::get('/expedientes','ExpedientesController@gestionExpediente')->name('admin.expedientes')->middleware('auth');
Route::get('/expedientes/create','ExpedientesController@create')->name('admin.expedientes.create')->middleware('auth');
Route::post('/expedientes','ExpedientesController@store')->name('admin.expedientes.store')->middleware('auth');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
