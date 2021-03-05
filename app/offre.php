<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class offre extends Model
{
    protected $guarded=[];
    function categorie(){
        return $this->belongsTo(categorie::class);
    }
    function domaine(){
        return $this->belongsTo(domaine::class);
    }
    function localite(){
        return $this->belongsTo( localite::class);
    }
    function secteur(){
        return $this->belongsTo(secteur::class);
    }
    function structure(){
        return $this->belongsTo(structure::class);
    }
}
