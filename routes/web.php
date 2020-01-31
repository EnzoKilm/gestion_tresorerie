<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Routes pour la partie recettes
Route::get('/recettes', 'RecetteController@index')->name('recette.index');
Route::get('/recettes/{id}/show', 'RecetteController@show')->name('recette.show');
Route::get('/recettes/add', 'RecetteController@add')->name('recette.add');
Route::post('/recettes/store', 'RecetteController@store')->name('recette.store');
Route::get('/recettes/{id}/edit', 'RecetteController@edit')->name('recette.edit');
Route::put('/recettes/{id}/update', 'RecetteController@update')->name('recette.update');
Route::get('/recettes/{id}/delete', 'RecetteController@delete')->name('recette.delete');

// Routes pour la partie TVA
Route::get('/tva', 'TvaController@index')->name('tva.index');
Route::get('/tva/{id}/show', 'TvaController@show')->name('tva.show');
Route::get('/tva/add', 'TvaController@add')->name('tva.add');
Route::post('/tva/store', 'TvaController@store')->name('tva.store');
Route::get('/tva/{id}/edit', 'TvaController@edit')->name('tva.edit');
Route::put('/tva/{id}/update', 'TvaController@update')->name('tva.update');
Route::get('/tva/{id}/delete', 'TvaController@delete')->name('tva.delete');

// Routes pour la partie types de paiement
Route::get('/types_paiements', 'TypePaiementController@index')->name('type_paiement.index');
Route::get('/types_paiements/{id}/show', 'TypePaiementController@show')->name('type_paiement.show');
Route::get('/types_paiements/add', 'TypePaiementController@add')->name('type_paiement.add');
Route::post('/types_paiements/store', 'TypePaiementController@store')->name('type_paiement.store');
Route::get('/types_paiements/{id}/edit', 'TypePaiementController@edit')->name('type_paiement.edit');
Route::put('/types_paiements/{id}/update', 'TypePaiementController@update')->name('type_paiement.update');
Route::get('/types_paiements/{id}/delete', 'TypePaiementController@delete')->name('type_paiement.delete');

// Routes pour la partie types de paiement
Route::get('/depenses', 'DepenseController@index')->name('depense.index');
Route::get('/depenses/{id}/show', 'DepenseController@show')->name('depense.show');
Route::get('/depenses/add', 'DepenseController@add')->name('depense.add');
Route::post('/depenses/store', 'DepenseController@store')->name('depense.store');
Route::get('/depenses/{id}/edit', 'DepenseController@edit')->name('depense.edit');
Route::put('/depenses/{id}/update', 'DepenseController@update')->name('depense.update');
Route::get('/depenses/{id}/delete', 'DepenseController@delete')->name('depense.delete');
