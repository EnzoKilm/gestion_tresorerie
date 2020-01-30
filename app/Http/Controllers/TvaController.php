<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tva;

class TvaController extends Controller
{
    public function index()
    {
    	$tvas = Tva::all();
    	return view("tvas.index", compact('tvas'));
    }

    public function show($tvaId)
    {
    	$tva = Tva::find($tvaId);
    	return view("tvas.show", compact('tva'));
    }

    public function add()
    {
		return view("tvas.add");
    }

    public function store(Request $request)
    {
    	$tva = new Tva();
    	$tva->name = $request->get('name');
    	$tva->rate = $request->get('rate');
    	$tva->save();
    	return redirect()->route('tva.index');
    }

    public function edit($tvaId)
    {
    	$tva = Tva::find($tvaId);
    	return view('tvas.edit', compact('tva'));
    }

    public function update(Request $request, $tvaId)
    {
    	$tva = Tva::find($tvaId);
    	$tva->name = $request->get('name');
    	$tva->rate = $request->get('rate');
    	$tva->save();
		return redirect()->route('tva.index');
    }

    public function delete($tvaId)
    {
    	$tva = Tva::find($tvaId);
    	$tva->delete();
    	return redirect()->route('tva.index');
    }
}
