<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jury extends Model 
{

    protected $table = 'jury';
    public $timestamps = true;
    protected $fillable = array('libelle');

    public function membres_tribunal()
    {
        return $this->belongsToMany('MembreTribunal');
    }

    public function dossiers_correctionnels()
    {
        return $this->hasMany('DossierCorrectionnel');
    }

}