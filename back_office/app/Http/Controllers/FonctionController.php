<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fonction;
use App\Http\Controllers\Controller;




class FonctionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fonctions = Fonction::all();
        return view('fonction.index', compact('fonctions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fonction.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        // Validation des données
        $request->validate([
            'libelle' => 'required|string|max:255'
        ]);

        $nv_fonction = new Fonction();
        $nv_fonction->libelle = $request->input('libelle');
        $nv_fonction->save();
        return redirect()->route('bureau.index')->with('success', 'Fonction créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fonction = Fonction::findOrFail($id);
        return view('fonction.edit', compact('fonction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'libelle' => 'required|string|max:255',
        ]);
    
        $fonction = Fonction::findOrFail($id);
        $fonction->libelle = $request->input('libelle');
        $fonction->save();
    
        return redirect()->route('fonction.index')->with('success', 'Fonction mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fonction = Fonction::findOrFail($id);
        $fonction->delete();

        return redirect()->route('fonction.index')->with('success', 'Fonction supprimée avec succès.');
    }
}
