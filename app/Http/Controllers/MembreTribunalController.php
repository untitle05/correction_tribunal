<?php 

namespace App\Http\Controllers;

use App\MembreTribunal;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;

class MembreTribunalController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $membres = MembreTribunal::all(); 
    return view('membres_tribunal.list', compact('membres'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return  view('membres_tribunal.list');
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
      $membre =  MembreTribunal::find($r->id);
      return Response($membre);
    }
  }
    
  public function NewMember(Request $r)
  {
    if($r->ajax())
    {
      $membres =  MembreTribunal::create($r->all());
      return response()->json($membres);
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

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  
  public function update()
  {
    
  }
  
  
  public function UpdateMember(Request $r)
  {

    if($r->ajax())
    {
      //recuperation de la clé d'un enregistrement
      $membre =  MembreTribunal::find($r->id);

      // recuperation de champ modifier
      $membre->nom = $r->nom;
      $membre->telephone = $r->telephone;
      $membre->grade = $r->grade;

      //enregistrement des modifications
      $membre->save();

      return Response($membre);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {

  }

  public function delete(Request $r)
  {
    MembreTribunal::destroy($r->id);
  }
  
}

?>