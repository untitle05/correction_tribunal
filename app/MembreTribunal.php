<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembreTribunal extends Model 
{

    protected $table = 'membres_tribunal';
    public $timestamps = true;
    protected $fillable = [
                            'nom', 'telephone', 'grade'
        ];

    public function dossiers_correctionnels()
    {
        return $this->belongsToMany('App\DossierCorrectionnel');
    }

    public function renvoi()
    {
        return $this->belongsToMany('App\Renvoi');
    }
}