<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recette;
use App\Tva;

class RecetteController extends Controller
{
    public function index()
    {
    	$recettes = Recette::all();
    	return view("recettes.index", compact('recettes'));
    }

    public function show($recetteId)
    {
    	$recette = Recette::find($recetteId);
    	return view("recettes.show", compact('recette'));
    }

    public function add()
    {
        $tvas = Tva::all();
		return view("recettes.add", compact('tvas'));
    }

    public function store(Request $request)
    {
    	$recette = new Recette();
    	$recette->designation = $request->get('designation');
    	$recette->date = $request->get('date');
    	$recette->amount = $request->get('amount');
    	$recette->tva_id = $request->get('tva_id');
    	$recette->discount = $request->get('discount');
    	$recette->discount_type = $request->get('discount_type');
    	$recette->save();
    	return redirect()->route('recette.index');
    }

    public function edit($recetteId)
    {
    	$recette = Recette::find($recetteId);
        $tvas = Tva::all();
    	return view('recettes.edit', compact('recette'), compact('tvas'));
    }

    public function update(Request $request, $recetteId)
    {
    	$recette = Recette::find($recetteId);
    	$recette->designation = $request->get('designation');
    	$recette->date = $request->get('date');
    	$recette->amount = $request->get('amount');
    	$recette->tva_id = $request->get('tva_id');
    	$recette->discount = $request->get('discount');
    	$recette->discount_type = $request->get('discount_type');
    	$recette->save();
        return redirect()->route('recette.index');
    }

    public function delete($recetteId)
    {
    	$recette = Recette::find($recetteId);
    	$recette->delete();
    	return redirect()->route('recette.index');
    }
}
