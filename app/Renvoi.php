<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renvoi extends Model 
{

    protected $table = 'renvoi';
    public $timestamps = true;
    protected $fillable = [
        'dossier_id', 'motif_renvoi', 'date_renvoi'
    ];

    public function dossiers_correctionnels()
    {
        return $this->belongsTo('DossierCorrectionnel');
    }

}