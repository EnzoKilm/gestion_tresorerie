<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TypePaiement;

class TypePaiementController extends Controller
{
    public function index()
    {
    	$typePaiements = TypePaiement::all();
    	return view("type_paiements.index", compact('typePaiements'));
    }

    public function show($typePaiementsId)
    {
    	$typePaiement = TypePaiement::find($typePaiementsId);
    	return view("type_paiements.show", compact('typePaiement'));
    }

    public function add()
    {
        $typePaiements = TypePaiement::all();
		return view("type_paiements.add", compact('typePaiements'));
    }

    public function store(Request $request)
    {
    	$typePaiement = new TypePaiement();
    	$typePaiement->name = $request->get('name');
    	$typePaiement->save();
    	return redirect()->route('type_paiement.index');
    }

    public function edit($typePaiementsId)
    {
    	$typePaiement = TypePaiement::find($typePaiementsId);
    	return view('type_paiements.edit', compact('typePaiement'));
    }

    public function update(Request $request, $typePaiementsId)
    {
    	$typePaiement = TypePaiement::find($typePaiementsId);
    	$typePaiement->name = $request->get('name');
    	$typePaiement->save();
		return redirect()->route('type_paiement.index');
    }

    public function delete($typePaiementsId)
    {
    	$typePaiement = TypePaiement::find($typePaiementsId);
    	$typePaiement->delete();
    	return redirect()->route('type_paiement.index');
    }
}
