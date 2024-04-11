<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use Illuminate\Http\Request;

class AdhererController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adherer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $adherer= new Adherent();
        $adherer->nom= $request['nom'];
        $adherer->prenom= $request['prenom'];
        $adherer->email= $request['email'];
        $adherer->save();
        return redirect()->route('adherer.index')->with("success","Votre adhésion a été confirmée");
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
        //
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
        //
    }
}
