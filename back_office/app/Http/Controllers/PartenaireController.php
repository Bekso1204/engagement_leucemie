<?php

namespace App\Http\Controllers;

use App\Models\Lien;
use App\Models\Partenaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partenaires = Partenaire::all();
        return view('partenaire.index', compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partenaire.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'logo_partenaire' => 'required|image|max:2000',
            'nom_partenaire' => 'required',
            'lien_partenaire' => 'required',
        ]);

        //dd($request);
        $nv_partenaire = new Partenaire();

        $nv_partenaire->nom = $request->input('nom_partenaire');

        /** @var UploadImage $logo */
        $logo = $request->file('logo_partenaire');
        $logoPath = $logo->store('logos', 'public');
        $nv_partenaire->logo = $logoPath;

        $nv_partenaire->save();

        $nv_lien = new Lien();
        $nv_lien->libelle = $request->input('lien_partenaire');
        $nv_lien->type = 'site';
        $nv_lien->partenaire_id = $nv_partenaire->id;

        $nv_lien->save();


        return redirect()->route('partenaire.index')->with('success', 'Partenaire créé');
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
        $partenaire = Partenaire::findOrFail($id);
        return  view("partenaire.edit", compact('partenaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'logo_partenaire' => 'required|image|max:2000',
            'nom_partenaire' => 'required',
        ]);

        $partenaire = Partenaire::find($id);

        $partenaire->nom = $request->input('nom_partenaire');

        if ($partenaire->logo) {
            Storage::disk('public')->delete($partenaire->logo);
        }

        /** @var UploadImage $logo */
        $logo = $request->file('logo_partenaire');
        $logoPath = $logo->store('logos', 'public');
        $partenaire->logo = $logoPath;

        $partenaire->save();

        return redirect()->route('partenaire.index')->with('success', 'Partenaire modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partenaire = Partenaire::find($id);
        $liens = $partenaire->liens()->get();
        foreach ($liens as $lien) {
            $lien->delete();
        }
        if ($partenaire->logo) {
            Storage::disk('public')->delete($partenaire->logo);
        }
        $partenaire->delete();
        return redirect()->route('partenaire.index')->with('success', 'Partenaire supprimé');
    }
}
