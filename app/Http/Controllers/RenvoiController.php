<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

use App\Renvoi;
use App\DossierCorrectionnel;
use App\MembreTribunal;

class RenvoiController extends Controller 
{

    public $renvoi_array;
    public $dossier_array;
    public $membres_du_renvoi;
    public $data;
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */

//$livres = App\Editeur::find(11)->livres;

    public function index()
  {

//      $renvois = Renvoi::with('membres_tribunal')
//
//               ->get();
//
//      foreach ( $renvois as $item) {
//
//          $dossier = DossierCorrectionnel::find($item->dossier_id);
//
//          $renvoi_array = ['motif_renvoi' => $item->motif_renvoi,
//              'date_renvoi' => $item->date_renvoi,
//              'dossier_id' => $item->dossier_id
//          ];
//
//          $dossier_array =['numero_ordre' => $dossier->numero_ordre,
//                           'date_premiere_audience' =>  $dossier->date_premiere_audience,
//              'partie_civile' =>$dossier->partie_civile,
//              'prevenu' => $dossier->prevenu,
//              'situation_penale' => $dossier->situation_penale,
//              'jugment_ADD' => $dossier->jugment_ADD,
//              'ugement_au_fond' => $dossier->jugement_au_fond
//          ];
//
//          //$data = array_merge($renvoi_array, $dossier_array);
//
//          foreach ( $item->membres_tribunal as $membres){
//              $membres_du_renvoi = ['nom' =>$membres->nom];
//
//              $data = array_merge($renvoi_array, $dossier_array, $membres_du_renvoi);
//              dump($data);
//          }
//
//      }
//
//      die;


        //$renvois = Renvoi::all();

        $dossiers = DB::select(
            'SELECT 
renvoi.id AS renvoi_id,
dossiers_correctionnels.id AS dossier_id,
numero_ordre, partie_civile, prevenu, situation_penale, jugment_ADD, jugement_au_fond,
date_renvoi,
GROUP_CONCAT(membres_tribunal.nom SEPARATOR ", ") AS membres
FROM renvoi
JOIN dossiers_correctionnels ON renvoi.dossier_id = dossiers_correctionnels.id
JOIN membres_renvoi ON renvoi.id = membres_renvoi.renvoi_id
JOIN membres_tribunal ON membres_tribunal.id = membres_renvoi.membres_id
WHERE (dossier_id,date_renvoi) IN (
    SELECT dossier_id , MAX(date_renvoi)
    FROM renvoi
    GROUP BY renvoi.dossier_id
)
GROUP BY membres_renvoi.renvoi_id'
        );

        return view('renvoi.listrenvoi',compact('dossiers'));
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
      $dossier = DossierCorrectionnel::find($r->id);
      $renvois = Renvoi::where('dossier_id', $r->id)
          ->with('membres_tribunal')
          ->get();
      return view('renvoi.show', compact(['dossier','renvois']));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Request $r)
  {
      $renvoi = Renvoi::find($r->id);


      $dossier =  DB::table('dossiers_correctionnels')
          ->where('id', $renvoi->dossier_id)
          ->select('dossiers_correctionnels.id', 'dossiers_correctionnels.partie_civile', 'dossiers_correctionnels.prevenu' )
          ->get();

     // dd($dossier[0]);

      return view('renvoi.edit', [
          'dossier'=> $dossier[0],
          'membres'=>MembreTribunal::pluck('nom', 'id'),
          'renvoi' => $renvoi
      ]);
  }

  //nouveau renvoi

    public function NewRenvoi(Request $request)
    {

        $renvoi = new Renvoi([
            'motif_renvoi' => $request['motif_renvoi'],
            'date_renvoi' => $request['date_renvoi'],
            'dossier_id' => (int)($request['dossier_id']),
            ]);

        $renvoi->save();
//    $membres = MembreTribunal::find($request->membre_id);
//    $dossier->membres_tribunal()->save($membres);
        $renvoi->membres_tribunal()->attach($request->membre_id);

        return redirect('Renvois')->withOk("le renvoi du dossier a ete effectue");
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
            $renvoi =  Renvoi::find($r->renvoi_id);

            // recuperation de champ modifier
            $renvoi->motif_renvoi = $r->motif_renvoi;
            $renvoi->date_renvoi = $r->date_renvoi;

            $cur_ids = array();
            foreach($renvoi->membres_tribunal as $membre_tribunal){
                $cur_ids[] = $membre_tribunal->id;
            }

            $renvoi->membres_tribunal()->detach($cur_ids);

            $membre_ids = array();
            foreach ($r->membre_id as $membre){
                if($membre) $membre_ids[] = $membre;
            }
            $renvoi->membres_tribunal()->attach($membre_ids);

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
      $renvoi = Renvoi::find($renvoi->id);
      $renvoi->membres_tribunal()->detach();
      $renvoi->delete();

  }
  
}

?>