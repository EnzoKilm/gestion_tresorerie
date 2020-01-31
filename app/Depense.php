<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    protected $table = "depenses";
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

    public function type_paiement()
    {
    	return $this->belongsTo(TypePaiement::class, 'type_paiement_id');
    }
}
