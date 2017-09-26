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


//// Route in Member /////////////////////////////////////////////


Route::get('/members', 'MembreTribunalController@index');

Route::post('/Nouveau', 'MembreTribunalController@NewMember');

Route::put('/Nouveau', 'MembreTribunalController@UpdateMember');

Route::get('/listMembers', 'MembreTribunalController@show');

Route::post('/deleteMember', 'MembreTribunalController@delete');

//// Fin Route in Member /////////////////////////////////////////////


//// Route in Renvoi /////////////////////////////////////////////



//// Fin Route in Renvoi /////////////////////////////////////////////


Route::get('/Renvois', 'RenvoiController@index');

Route::post('/NewRenvoi', 'RenvoiController@NewRenvoi');

Route::put('/NewRenvoi', 'RenvoiController@UpdateRenvoi');

Route::get('/listRenvois', 'RenvoiController@show');

Route::post('/deleteRenvoi', 'RenvoiController@destroy');

Route::get('/sql','DossierCorrectionnelController@SqlText');


//// Route in Dossiers Correctionnel /////////////////////////////////////////////

Route::get('dossiers', 'DossierCorrectionnelController@index');


Route::get('NewDossiers', [
    'as'   => 'creerDossier',
    'uses' => 'DossierCorrectionnelController@create'
]);


Route::post('NewDossiers', [
    'as'   => 'saveDossier',
    'uses' => 'DossierCorrectionnelController@store'
]);

Route::get('updateDossiers', [
    'as'   => 'upDossier',
    'uses' => 'DossierCorrectionnelController@edit'
]);

Route::post('updateDossiers', [
    'as'   => 'downDossier',
    'uses' => 'DossierCorrectionnelController@update'
]);


Route::get('deleteDossier', 'DossierCorrectionnelController@destroy');

//// Fin Route in DossierCorrectionnel /////////////////////////////////////////////

/*Route::resource('renvoi', 'RenvoiController');
Route::resource('users', 'UsersController');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
