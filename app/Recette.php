<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    protected $table = "recettes";
    protected $fillable = [
        "designation",
        "date",
        "amount",
        "tva_id"
    ];

    public function tva()
    {
    	return $this->belongsTo(Tva::class, 'tva_id');
    }
}
