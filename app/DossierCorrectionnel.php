<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DossierCorrectionnel extends Model 
{

    protected $table = 'dossiers_correctionnels';
    public $timestamps = true;
    protected $fillable = [
                            'numero_ordre', 'date_premiere_audience', 'partie_civile', 'prevenu', 'situation_penale', 'jugment_ADD', 'jugement_au_fond'
    ];

    public function membres_tribunal()
    {
        return  $this->belongsToMany('App\Models\MembreTribunal');
    }

    public function renvoi()
    {
        return $this->hasMany('App\Models\Renvoi');
    }

}