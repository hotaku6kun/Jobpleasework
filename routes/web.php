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

Route::get('/', 'hotaController@getMain')->name('root');
Route::get('/acercade', 'hotaController@getAcerca')->name('acerca');
Route::get('/knowledge', 'hotaController@getKnowledge')->name('knowledge');
Route::get('/work', 'hotaController@getWork')->name('work');
Route::get('/contacto', 'hotaController@getContacto')->name('contacto');

