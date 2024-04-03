<?php

namespace App\Http\Controllers;

use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $temoignages = Temoignage::orderBy('date', 'desc')->get();
        return view('temoignage.index', compact('temoignages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('temoignage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $temoignages=Temoignage::all();
        $temoignage= new Temoignage();
        $temoignage->titre= $request['titre'];
        $temoignage->prenom= $request['prenom'];
        $temoignage->contenu= $request['contenu'];
        $temoignage->date= $request['date'];
        if($request['image_temoignage']){
            /** @var UploadImage $logo */
            $logo = $request->file('image_temoignage');
            $logoPath = $logo -> store('temoignage', 'public');
            $temoignage -> image = $logoPath;
        }
        else{
            $temoignage->image= "temoignage/temoignage-placeholder.jpg";
        }
        $temoignage->save();
        return redirect()->route('temoignage.index',compact('temoignages'))->with("success","Le témoignage a été crée");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $temoignage=Temoignage::find($id);
        return view('temoignage.show',compact('temoignage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $temoignage=Temoignage::find($id);
        return view('temoignage.edit',compact('temoignage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $temoignages=Temoignage::all();
        $temoignage=Temoignage::find($id);
        $temoignage->titre= $request->get('titre');
        $temoignage->contenu= $request->get('contenu');
        $temoignage->date= $request->get('date');
        $temoignage->prenom= $request->get('prenom');

        if($request['image_temoignage']){
            if ($temoignage->image) {
                Storage::disk('public')->delete($temoignage->image);
            }
            /** @var UploadImage $logo */
            $logo = $request->file('image_temoignage');
            $logoPath = $logo -> store('temoignage', 'public');
            $temoignage -> image = $logoPath;
        }
        $temoignage->save();
        return redirect()->route('temoignage.index',compact('temoignages'))->with("success","Le témoignage a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $temoignage = Temoignage::find($id);
        $temoignage->delete();
        return redirect()->route('temoignage.index')->with("success","Le témoignage a été supprimé");
    }
}
