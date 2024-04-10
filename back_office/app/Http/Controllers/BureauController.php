<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bureau;
use App\Models\Fonction;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class BureauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bureaux = Bureau::all();
        return view('bureau.index', compact('bureaux'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fonctions = Fonction::all();
        return view('bureau.create', compact('fonctions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        // Création du bureau
        $nv_bureau = new Bureau();
        $nv_bureau->nom = $request->input('nom');
        $nv_bureau->prenom = $request->input('prenom');

        /** @var UploadImage $logo */
        $logo = $request->file('photo');
        $logoPath = $logo->store('photo_bureau', 'public');
        $nv_bureau->photo = $logoPath;

        $nv_bureau->save();

        // Récupération de l'ID du bureau fraîchement créé
        $bureauId = $nv_bureau->id;

        // Attachement des fonctions au bureau
        foreach ($request->input('fonctions') as $fonctionId) {
        DB::table('bureau_fonction')->insert([
            'bureau_id' => $bureauId,
            'fonction_id' => $fonctionId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }


        return redirect()->route('bureau.index')->with('success', 'Bureau créé avec succès.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récupère le bureau à modifier depuis la base de données
        $bureau = Bureau::findOrFail($id);

        $fonctions = Fonction::all();
        
        // Retourne la vue du formulaire de modification avec les données du bureau
        return view('bureau.edit', compact('bureau', 'fonctions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Valide les données du formulaire de modification
        /*$request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // La photo est facultative
        ]);
        */

        // Récupère le bureau à modifier depuis la base de données
        $bureau = Bureau::findOrFail($id);
        
        // Met à jour les informations du bureau
        $bureau->nom = $request->input('nom');
        $bureau->prenom = $request->input('prenom');

        if ($request->hasFile('photo')) {
            // Traite et enregistre la nouvelle photo
            $photoPath = $request->file('photo')->store('photo_bureau', 'public');
            $bureau->photo = $photoPath;
        }

        // Récupère les IDs des nouvelles fonctions sélectionnées dans le formulaire
        $fonctionsSelectionnees = $request->input('fonctions');

        // Met à jour les fonctions associées au bureau
        $bureau->fonctions()->sync($fonctionsSelectionnees);

        $bureau->save();

        // Redirige vers la page d'index avec un message de succès
        return redirect()->route('bureau.index')->with('success', 'Bureau mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupère le bureau à supprimer depuis la base de données
        $bureau = Bureau::findOrFail($id);
        
        // Supprime le bureau
        $bureau->delete();

        // Redirige vers la page d'index avec un message de succès
        return redirect()->route('bureau.index')->with('success', 'Bureau supprimé avec succès.');
    }
}
