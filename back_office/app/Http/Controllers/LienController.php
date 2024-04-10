<?php

namespace App\Http\Controllers;

use App\Models\Lien;
use App\Models\Partenaire;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id=Session::get('partenaire_id');
        $partenaire = Partenaire::findOrFail($id);
        $liens = $partenaire->liens;
        return view('partenaire.liens.index', compact('liens', 'partenaire'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typeLiens = ['site', 'facebook', 'instagram', 'twitter', 'tiktok'];
        return view('partenaire.liens.create', compact('typeLiens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'libelle_lien' => 'required',
            'type_liens' => 'required',
        ]);

        $partenaire_id = Session::get('partenaire_id');
        $nv_lien = new Lien();
        $nv_lien->libelle = $request->input('libelle_lien');
        $nv_lien->type = $request->input('type_liens');
        $nv_lien->partenaire_id = $partenaire_id;

        $nv_lien->save();

        return redirect()->route('lien.index')->with('success', 'Lien créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        session(['partenaire_id' => $id]);
        return redirect()->route('lien.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lien = Lien::FindOrFail($id);
        $typeLiens = ['site', 'facebook', 'instagram', 'twitter', 'tiktok'];
        return view('partenaire.liens.edit', compact( 'lien', 'typeLiens' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'libelle_lien' => 'required',
            'type_liens' => 'required',
        ]);
        
        $lien = Lien::FindOrFail( $id );
        $lien->libelle = $request->input('libelle_lien');
        $lien->type = $request->input('type_liens');

        $lien->save();

        return redirect()->route('lien.index')->with('success', 'Lien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lien = Lien::find($id);
        $lien->delete();

        return redirect()->route('lien.index')->with('success', 'Lien supprimé');
    }
}
