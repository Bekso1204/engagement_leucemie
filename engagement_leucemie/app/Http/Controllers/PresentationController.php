<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bureau;

class PresentationController extends Controller
{
    public function presentation()
    {
        // Récupère les bureaux depuis ta base de données
        $bureaux = Bureau::all();

        // Passe la variable $bureaux à la vue presentation.blade.php
        return view('presentation', compact('bureaux'));
    }
}
