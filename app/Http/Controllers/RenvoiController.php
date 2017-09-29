<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

use App\Renvoi;
use App\DossierCorrectionnel;

class RenvoiController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    //$renvois = Renvoi::all();
      $renvois = DB::table('dossiers_correctionnels')
          ->join('renvoi', 'dossiers_correctionnels.id', '=', 'renvoi.dossier_id')
          ->select('renvoi.*', 'dossiers_correctionnels.prevenu')
          ->get();

    return view('renvoi.renvoi',compact('renvois'),['dossiers' => DossierCorrectionnel::pluck('prevenu','id')]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Request $r)
  {
      if($r->ajax())
      {



          //$renvoi =  Renvoi::find($r->id);

          $renvoi = DB::table('dossiers_correctionnels')
              ->where('renvoi.id',$r->id)
              ->join('renvoi', 'dossiers_correctionnels.id', '=', 'renvoi.dossier_id')
              ->select('renvoi.*', 'dossiers_correctionnels.prevenu')
              ->get();
          return Response($renvoi);
      }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  //nouveau renvoi

    public function NewRenvoi(Request $r)
    {
        if($r->ajax())
        {
            $renvoi =  Renvoi::create($r->all());
            return response()->json($renvoi);
        }
    }





  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

    public function UpdateRenvoi(Request $r)
    {

        if($r->ajax())
        {
            //recuperation de la clé d'un enregistrement
            $renvoi =  Renvoi::find($r->id);

            // recuperation de champ modifier
            $renvoi->motif_renvoi = $r->motif_renvoi;
            $renvoi->date_renvoi = $r->date_renvoi;
            $renvoi->dossier_id = $r->dossier_id;

            //enregistrement des modifications
            $renvoi->save();

            return Response($renvoi);
        }
    }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $renvoi)
  {
    Renvoi::destroy($renvoi->id);

  }
  
}

?>