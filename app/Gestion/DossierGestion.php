<?php
/**
 * Created by PhpStorm.
 * User: untitled
 * Date: 9/24/17
 * Time: 11:17 AM
 */

namespace App\Gestion;

use App\DossierCorrectionnel;
use App\MembreTribunal;
use Illuminate\Http\Request;

class DossierGestion
{
    protected $dossier;
    protected $membre;

    public function __construct(DossierCorrectionnel $dossier)
    {
        $this->dossier = $dossier;
    }

    public function getPaginate($n)
    {
        return $this->user->paginate($n);
    }

    

    public function store(Array $inputs)
    {
           $membre1 = MembreTribunal::find($inputs['membre1']);
           $membre2 = MembreTribunal::find($inputs['membre2']);
           $membre3 = MembreTribunal::find($inputs['membre3']);
           $membre4 = MembreTribunal::find($inputs['membre']);
        
        

        $membre1->dossiers_correctionnels()->save($dossier);
        $membre2->dossiers_correctionnels()->save($dossier);
        $membre3->dossiers_correctionnels()->save($dossier);
        $membre4->dossiers_correctionnels()->save($dossier);


    }    


}