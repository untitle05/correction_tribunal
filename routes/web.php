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

/*
Route::resource('membretribunal', 'MembreTribunalController');
Route::resource('jury', 'JuryController');
Route::resource('dossiercorrectionnel', 'DossierCorrectionnelController');
Route::resource('renvoi', 'RenvoiController');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// pour le photo
Route::get('profile', 'UsersController@profile');
Route::post('profile', 'UsersController@update_avatar');
