<?php

namespace App\Http\Controllers;

use App\Models\Temoignage;
use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    public function show(){
        
            $temoignages = Temoignage::orderBy('date', 'desc')->get();
            return view('temoignages',compact('temoignages'));
        
		
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        
    }
}
