<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembreTribunal extends Model 
{

    protected $table = 'membres_tribunal';
    public $timestamps = true;
    protected $fillable = array('nom', 'tel');

    public function jury()
    {
        return $this->belongsToMany('Jury');
    }

}