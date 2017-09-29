<?php

namespace App\Http\Controllers;

//use App\Gestion\DossierGestionInterface;
use App\Http\Requests\DossierCreateRequest;
use App\Http\Requests\DossierUpdateRequest;
use App\MembreTribunal;
use Illuminate\Http\Request;
use App\DossierCorrectionnel;

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
  public function edit( Request $request)
  {
    $dossier = DossierCorrectionnel::find($request->id)-with('membres_tribunal');
    var_dump($dossier);
    die;
    return response()->json($dossier);

    //return view('dossiers.edit',  compact('dossier')); 
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update()
  {
    //$this->dossierGestion->update($id, $request->all());

    //return redirect('dossier')->withOk("Le dossier ayant pour numero d'ordre:" . $request->input('numero_ordre') . " a été modifié.");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $r)
  {

    $dossier =  DossierCorrectionnel::find($r->id);
    $dossier->membres_tribunal()->detach();

    $dossier->delete();
    //$this->dossierGestion->destroy($id);

    return redirect()->back();
  }

  public function delete(Request $r)
  {

  }
  
}

?>