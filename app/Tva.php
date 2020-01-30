<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tva extends Model
{
    protected $table = "tva";
    protected $fillable = [
    	"name",
    	"rate"
    ];

    public function tva()
    {
    	return $this->hasMany(Recette::class);
    }
}
