<?php 

namespace App\Http\Controllers;

use App\MembreTribunal;
use Illuminate\Http\Request;
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
  public function store(Request $r)
  {
    if($r->ajax())
    {
      $membres =  MembreTribunal::create($r->all());
      return response()->json($membres);
    }
    
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
  public function update($id)
  {
    
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
  
}

?>