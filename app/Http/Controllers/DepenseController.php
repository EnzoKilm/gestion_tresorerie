<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Depense;
use App\Tva;
use App\TypePaiement;

class DepenseController extends Controller
{
    public function index()
    {
    	$depenses = Depense::all();
    	return view("depenses.index", compact('depenses'));
    }

    public function show($depenseId)
    {
        $this->calculation($depenseId);
        $depense = Depense::find($depenseId);
    	return view("depenses.show", compact('depense'));
    }

    public function add()
    {
        $tvas = Tva::all();
        $types_paiements = TypePaiement::all();
		return view("depenses.add", compact('tvas', 'types_paiements'));
    }

    public function store(Request $request)
    {
    	$depense = new Depense();
    	$depense->designation = $request->get('designation');
    	$depense->date = $request->get('date');
    	$depense->amount = $request->get('amount');
    	$depense->tva_id = $request->get('tva_id');
    	$depense->discount = $request->get('discount');
        if (isset($depense->discount)) {
            $depense->discount_type = $request->get('discount_type');
        }
    	$depense->type_paiement_id = $request->get('type_paiement_id');
    	$depense->save();
    	return redirect()->route('depense.index');
    }

    public function calculation($depenseId)
    {
        $depense = Depense::find($depenseId);
        $depense->montant_tva = $depense->amount*$depense->tva->rate/100;
        $depense->montant_ttc = $depense->amount+$depense->montant_tva;
        if (isset($depense->discount)) {
            if ($depense->discount_type == "%") {
                $depense->montant_remise = $depense->montant_ttc-$depense->montant_ttc*$depense->discount/100;
            } else {
                $depense->montant_remise = $depense->montant_ttc-$depense->discount;
            }
        }
    	$depense->save();
    }

    public function edit($depenseId)
    {
    	$depense = Depense::find($depenseId);
        $tvas = Tva::all();
        $types_paiements = TypePaiement::all();
    	return view('depenses.edit', compact('depense', 'tvas', 'types_paiements'));
    }

    public function update(Request $request, $depenseId)
    {
    	$depense = Depense::find($depenseId);
    	$depense->designation = $request->get('designation');
    	$depense->date = $request->get('date');
    	$depense->amount = $request->get('amount');
    	$depense->tva_id = $request->get('tva_id');
    	$depense->discount = $request->get('discount');
    	$depense->discount_type = $request->get('discount_type');
    	$depense->type_paiement_id = $request->get('type_paiement_id');
    	$depense->save();
        return redirect()->route('depense.index');
    }

    public function delete($depenseId)
    {
    	$depense = Depense::find($depenseId);
    	$depense->delete();
    	return redirect()->route('depense.index');
    }
}
