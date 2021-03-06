<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DossierCorrectionnel extends Model 
{

    protected $table = 'dossiers_correctionnels';
    public $timestamps = true;
    protected $fillable = [
                            'numero_ordre', 'date_premiere_audience', 'partie_civile', 'prevenu',
        'situation_penale', 'jugment_ADD', 'jugement_au_fond','decision'
    ];

    public function membres_tribunal()
    {
        return  $this->belongsToMany('App\MembreTribunal', 'dossiers_membres', 'dossiers_id', 'membres_id');
    }

    public function renvoi()
    {
        return $this->hasMany('App\Renvoi');
    }

}