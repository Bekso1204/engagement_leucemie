<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

    public function submitForm(Request $request)
    {
        //
        //
        //
        return redirect()->route('contact.form')->with('success', 'Votre message a été envoyé avec succès !');
    }
}
