<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renvoi extends Model 
{

    protected $table = 'renvoi';
    public $timestamps = true;
    protected $fillable = array('dossier_id');

    public function dossiers_correctionnels()
    {
        return $this->belongsTo('DossierCorrectionnel');
    }

}