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

//MENU -----------------------------------------------------------------

Route::get('menus','MenuController@index')->name('menus.index');
Route::get('menus/create','MenuController@create')->name('menus.create');
Route::post('menus','MenuController@store')->name('menus.store');
Route::put('menus/{menu}','MenuController@update')->name('menus.update');
Route::get('menus/{menu}','MenuController@show')->name('menus.show');
Route::get('menus/{menu}/edit','MenuController@edit')->name('menus.edit');
Route::delete('menus/{menu}','MenuController@destroy')->name('menus.destroy');

//--------- Routes Types ---------------------------------------------------------------

Route::get('types/create','TypeMenuController@create')->name('types.create');
Route::post('types','TypeMenuController@store')->name('types.store');
Route::put('types/{type}','TypeMenuController@update')->name('types.update');
Route::get('types/{type}','TypeMenuController@show')->name('types.show');
Route::get('types/{type}/edit','TypeMenuController@edit')->name('types.edit');
Route::delete('types/{type}','TypeMenuController@destroy')->name('types.destroy');
//-------------------- Routes des contenu ------------------------------------------------------
Route::get('contenus','ContenuMenu@create')->name('contenus.index');
Route::get('contenus/create','ContenuMenu@create')->name('contenus.create');
Route::post('contenus','ContenuMenu@store')->name('contenus.store');
Route::put('contenus/{contenu}','ContenuMenu@update')->name('contenus.update');
Route::get('contenus/{contenu}','ContenuMenu@show')->name('contenus.show');
Route::get('contenus/{contenu}/edit','ContenuMenu@edit')->name('contenus.edit');
Route::delete('contenus/{contenu}','ContenuMenu@destroy')->name('contenus.destroy');
//---------------------------Voici Route Pour jquery---------------------------------------
Route::get('/ajax-menus','ContenuMenu@menus');



