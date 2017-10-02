<?php

namespace App\Http\Controllers;

//use App\Gestion\DossierGestionInterface;
use App\Http\Requests\DossierCreateRequest;
use App\Http\Requests\DossierUpdateRequest;
use App\MembreTribunal;
use App\Renvoi;
use Illuminate\Http\Request;
use App\DossierCorrectionnel;
use Illuminate\Support\Facades\DB;

class DossierCorrectionnelController extends Controller 
{

  protected $dossierCorrectionnel;

  public function __construct(DossierCorrectionnel $dossierCorrectionnel)
  {
    $this->dossierCorrectionnel= $dossierCorrectionnel;
  }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */

   public function index()
  {
    $dossierCorrectionnels = $this->dossierCorrectionnel
        ->with('membres_tribunal')
        ->orderBy('dossiers_correctionnels.created_at', 'desc')
        ->paginate(4);
    $links = $dossierCorrectionnels->setPath('')->render();
  	return view('dossiers.list', compact('dossierCorrectionnels', 'links'));
  }



  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('dossiers.add', ['membres'=>MembreTribunal::pluck('nom', 'id')]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
        $dossier = new DossierCorrectionnel([
                                              'numero_ordre' => $request['numero_ordre'],
                                              'date_premiere_audience' => $request['date_premiere_audience'],
                                              'partie_civile' => $request['partie_civile'],
                                              'prevenu' => $request['prevenu'],
                                              'situation_penale' => $request['situation_penale'],
                                              'jugment_ADD' => $request['jugment_ADD'],
                                              'jugement_au_fond' => $request['jugement_au_fond']
                                            ]);
    $dossier->save();
//    $membres = MembreTribunal::find($request->membre_id);
//    $dossier->membres_tribunal()->save($membres);
    $dossier->membres_tribunal()->attach($request->membre_id);
    
    return redirect('dossiers')->withOk("le dossier ayant pour numero d'odre:" . $dossier->numero_ordre . " a été créé.");
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    //return view('dossiers.show',  compact('dossier'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit( Request $r)
  {
//
    $dossier = $this->dossierCorrectionnel
        ->with('membres_tribunal')
        ->where('dossiers_correctionnels.id', '=', $r->id)
        ->get();
//dd($dossier);

//    $dossier = DossierCorrectionnel::find($r->id);
//
//    $membres_dossier = DB::table('membres_tribunal')
//        ->join('dossiers_membres', 'membres_tribunal.id', '=', 'dossiers_membres.membres_id')
//        ->join('dossiers_correctionnels', 'dossiers_correctionnels.id', '=', 'dossiers_membres.dossiers_id')
//        ->where('dossiers_membres.dossiers_id', '=', $r->id)
//        ->get();
//    $membres = MembreTribunal::all();





    return view('dossiers.edit', ['dossier' => $dossier[0], 'membres' => MembreTribunal::pluck('nom', 'id')]);
        
   

    //return view('dossiers.edit',  compact('dossier')); 
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $r)
  {
//    dd($r);
    $dossier=  DossierCorrectionnel::find($r->id);

    // recuperation de champ $modossier$renvoi->motif_renvoi = $r->motif_renvoi;
    $dossier->numero_ordre = $r->numero_ordre;
    $dossier->date_premiere_audience = $r->date_premiere_audience;
    $dossier->partie_civile = $r->partie_civile;
    $dossier->prevenu = $r->prevenu;
    $dossier->situation_penale= $r->situation_penale;
    $dossier->jugment_ADD = $r->jugment_ADD;
    $dossier->jugement_au_fond = $r->jugement_au_fond;

    $cur_ids = array();
   foreach ($dossier->membres_tribunal as $membre_tribunal) {
     $cur_ids[] = $membre_tribunal->id;
   }
    $dossier->membres_tribunal()->detach($cur_ids);

    $membre_ids = array();

    foreach ($r->membre_id as $membre) {
      if ($membre) $membre_ids[] = $membre;
    }

      $dossier->membres_tribunal()->attach($membre_ids);

    //enregistrement des modifications
    $dossier->save();
    //$this->dossierGestion->update($id, $request->all());

    return redirect('dossiers')->withOk("Le dossier ayant pour numero d'ordre:" . $r->input('numero_ordre') . " a été modifié.");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $r)
  {

    $dossier =  DossierCorrectionnel::find($r->id); //->with('renvoi')->with('membres_tribunal');
    //$dossier->membres_tribunal()->detach();

    $renvois = Renvoi::where('dossier_id','=',$r->id);
    var_dump($renvois);
//    foreach ($dossier->renvoi() as $renvoi){
//      dump($renvoi);
//      $renvoi->membres_tribunal()->detach();
//      $renvoi->delete();
//    }
//    $dossier->delete();
    //$this->dossierGestion->destroy($id);
    die;

    return redirect()->back();
  }

  public function delete(Request $r)
  {

  }
  
}

?>