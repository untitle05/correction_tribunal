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
    return view('page_model');
});

Route::get('/members', 'MembreTribunalController@index');

Route::post('/Nouveau', 'MembreTribunalController@NewMember');

Route::put('/Nouveau', 'MembreTribunalController@UpdateMember');

Route::get('/listMembers', 'MembreTribunalController@show');

Route::post('/deleteMember', 'MembreTribunalController@delete');





/*Route::resource('dossiercorrectionnel', 'DossierCorrectionnelController');
Route::resource('renvoi', 'RenvoiController');
Route::resource('users', 'UsersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
