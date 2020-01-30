<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypePaiement extends Model
{
    protected $table = "type_paiement";
    protected $fillable = [
    	"name"
    ];

    public function type_paiements()
    {
    	return $this->hasMany(Recette::class);
    }
}
