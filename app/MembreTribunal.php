<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembreTribunal extends Model 
{

    protected $table = 'membres_tribunal';
    public $timestamps = true;
    protected $fillable = [
                            'nom', 'tel', 'grade'
        ];

    public function dossiers_correctionnels()
    {
        return $this->belongsToMany('App\Models\dossiers_correctionnels');
    }

}