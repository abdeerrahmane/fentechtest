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
Route::resource('menu', 'MenuController');
Route::resource('contenu_menu', 'Contenu_menuController');
Route::resource('type_contenu', 'Type_contenuController');
Route::resource('photo_contenu', 'Photo_contenuController');
Route::resource('utilisateur_menu', 'Utilisateur_menuController');
