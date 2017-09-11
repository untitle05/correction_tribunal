<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DossierCorrectionnel extends Model 
{

    protected $table = 'dossiers_correctionnels';
    public $timestamps = true;
    protected $fillable = array('numero_ordre', 'date_premiere_audience', 'partie_civile', 'prevenu', 'situation_penale', 'jugment_ADD', 'jugement_au_fond', 'jury_id');

    public function jury()
    {
        return $this->belongsTo('Jury');
    }

    public function renvoi()
    {
        return $this->hasMany('Renvoi');
    }

}