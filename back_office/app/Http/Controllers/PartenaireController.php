<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partenaires=Partenaire::all();
        return view('partenaire.index', compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typeLiens=['site', 'facebook', 'instagram', 'twitter', 'tiktok'];
        return view('partenaire.create', compact('typeLiens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect()->route('partenaire.index')->with('error', 'Partenaire supprimé');
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
        $partenaire=Partenaire::findOrFail($id);
        return  view("partenaire.edit", compact( 'partenaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partenaire=Partenaire::find($id);
        $liens=$partenaire->liens()->get();
        foreach($liens as $lien){
            $lien->delete();
        }
        $partenaire->delete();
        return redirect()->route('partenaire.index')->with('success', 'Partenaire supprimé');
    }
}
