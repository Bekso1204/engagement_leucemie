<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actus = Actualite::all();
        return view('actualites.index', compact("actus"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('actualites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nv_actu = new Actualite();
        $nv_actu->titre = $request->input('titre_actu');
        $nv_actu->date = $request->input('date_actu');
        $nv_actu->contenu = $request->input('contenu_actu');

        /** @var UploadImage $logo */
        $logo = $request->file('image_actu');
        $logoPath = $logo->store('image_actus', 'public');
        $nv_actu->image = $logoPath;

        $nv_actu->save();

        return redirect()->route('actualite.index')->with('success', 'Actualité créée');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $actu = Actualite::find($id);
        return  view('actualites.show', ['actu' => $actu]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $actu = Actualite::findOrFail($id);
        return view('actualites.edit', ['actu' => $actu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $actu = Actualite::find($id);

        $actu->titre = $request->input('titre_actu');
        $actu->date = $request->input('date_actu');
        $actu->contenu = $request->input('contenu_actu');

        if ($actu->image) {
            Storage::disk('public')->delete($actu->image);
        }

        if ($request->file('image_actu')) {
            /** @var UploadImage $logo */
            $logo = $request->file('image_actu');
            $logoPath = $logo->store('image_actus', 'public');
            $actu->image = $logoPath;
        }

        $actu->save();

        return redirect()->route('actualite.index')->with('success', 'Actualité modifiée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $actu = Actualite::find($id);
        if ($actu->image) {
            Storage::disk('public')->delete($actu->image);
        }
        $actu->delete();
        return redirect()->route('actualite.index')->with('success', 'Actualité supprimée');
    }
}
