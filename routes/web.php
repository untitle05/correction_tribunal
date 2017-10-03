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

////Route::get('/', function () {
//    return view('membres_tribunal.add');
////});

//Route::get('/',function (){
//    $dossiers = DB::table('dossiers_correctionnels')
//        ->selectRaw('max(renvoi.date_renvoi) as derniere_date
//      ,dossiers_correctionnels.numero_ordre as ordre
//      ,dossiers_correctionnels.id as IDDossier
//      ,dossiers_correctionnels.partie_civile as civil
//      ,dossiers_correctionnels.prevenu
//      ,dossiers_correctionnels.situation_penale as penal
//      ,dossiers_correctionnels.jugment_ADD as jadd
//      ,dossiers_correctionnels.jugement_au_fond as jfond
//      ,group_concat(membres_renvoi.membres_id)
//      ')
//        ->leftjoin('renvoi', 'dossiers_correctionnels.id', '=', 'renvoi.dossier_id')
//        ->join('membres_renvoi', 'membres_renvoi.renvoi_id','=','renvoi.id')
//        ->join('membres_tribunal', 'membres_tribunal.id','=','membres_renvoi.membres_id')
//        ->groupBy('renvoi.dossier_id')
//        ->get();
//    $dossiers = DB::select(
//        'SELECT
//renvoi.id AS renvoi_id,
//dossiers_correctionnels.id AS dossier_id,
//numero_ordre, partie_civile, prevenu, situation_penale, jugment_ADD, jugement_au_fond,
//date_renvoi,
//GROUP_CONCAT(membres_tribunal.nom SEPARATOR "\n") AS membres
//FROM renvoi
//JOIN dossiers_correctionnels ON renvoi.dossier_id = dossiers_correctionnels.id
//JOIN membres_renvoi ON renvoi.id = membres_renvoi.renvoi_id
//JOIN membres_tribunal ON membres_tribunal.id = membres_renvoi.membres_id
//WHERE (dossier_id,date_renvoi) IN (
//    SELECT dossier_id , MAX(date_renvoi)
//    FROM renvoi
//    GROUP BY renvoi.dossier_id
//)
//GROUP BY membres_renvoi.renvoi_id'
//    );
//    dump($dossiers);
//});


//// Route in Member /////////////////////////////////////////////


Route::group(['middleware' => ['auth']], function() {
    Route::get('/', 'DossierCorrectionnelController@index');

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

    Route::get('/createRenvoi', 'RenvoiController@create');

    Route::post('/updateRenvoi', 'RenvoiController@UpdateRenvoi');

    Route::get('/modifierRenvoi', 'RenvoiController@edit');

    Route::get('/listRenvois', 'RenvoiController@show');

    Route::get('/deleteRenvoi', 'RenvoiController@destroy');

    Route::get('/editRenvoi', [
        'as'   => 'editerRenvoi',
        'uses' => 'RenvoiController@edit'
    ]);



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

//// End Route in DossierCorrectionnel /////////////////////////////////////////////

    /*Route::resource('renvoi', 'RenvoiController');
    Route::resource('users', 'UsersController');*/



    Route::get('/home', 'HomeController@index')->name('home');

/////// Route Profile////////////////////////////////////////////////////////////////////
///
    Route::get('profile', 'UsersController@profile');
    Route::post('profile', 'UsersController@update_avatar');

/////// Route Profile////////////////////////////////////////////////////////////////////
});

Auth::routes();