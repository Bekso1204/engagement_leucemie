<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actions = Action::all();
        return view('action.index', compact('actions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('action.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $action = new Action();
        $action->titre = $request->titre;
        $action->date = $request->date;
        $action->heure = $request->heure;
        $action->adresse = $request->adresse;
        $action->code_postal = $request->code_postal;
        $action->ville = $request->ville;
        $action->nb_inscrits = $request->nb_inscrits;
        $action->nb_sensibilises = $request->nb_sensibilises;
        $action->is_private = $request->has('is_private') ? true : false;

        $action->save();

        $photo = new  Photo();
        $photo->titre = $request->titre_photo;
        $photo->legende = $request->legende_photo;

        /** @var UploadImage $logo */
        $logo = $request->file('photo');
        $logoPath = $logo->store('photos_actions', 'public');
        $photo->photo = $logoPath;

        $photo->action_id = $action->id;
        $photo->is_main = true;

        $photo->save();

        return redirect()->route('action.index')->with('success', 'L\'action a été créée');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $action = Action::find($id);
        return view('action.show', compact('action'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $action = Action::find($id);
        return view('action.edit', compact('action'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $action = Action::find($id);
        $action->titre = $request->titre;
        $action->date = $request->date;
        $action->heure = $request->heure;
        $action->adresse = $request->adresse;
        $action->code_postal = $request->code_postal;
        $action->ville = $request->ville;
        $action->nb_inscrits = $request->nb_inscrits;
        $action->nb_sensibilises = $request->nb_sensibilises;
        $action->is_private = $request->has('is_private') ? true : false;

        $action->save();
        return redirect()->route('action.index')->with('success', 'L\'action a été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $action = Action::find($id);
        $photos = $action->photos()->get();

        foreach ($photos as $photo) {
            Storage::disk('public')->delete($photo->photo);
            $photo->delete();
        }

        $action->delete();

        return redirect()->route('action.index')->with('success', 'L\'action a été supprimée');
    }

    /**
     * Show the form for adding a new picture.
     */
    public function addPicture(string $id)
    {
        $action = Action::findOrFail($id);
        return view('action.addpicture', compact('action'));
    }

    /**
     * Store a newly added picture in action.
     */
    public function storePicture(Request $request, string $id)
    {
        $action = Action::findOrFail($id);
        $photo = new  Photo();
        $photo->titre = $request->titre_photo;
        $photo->legende = $request->legende_photo;

        /** @var UploadImage $logo */
        $logo = $request->file('photo');
        $logoPath = $logo->store('photos_actions', 'public');
        $photo->photo = $logoPath;

        $photo->action_id = $action->id;
        $photo->is_main = false;

        $photo->save();

        return redirect()->back()->with('success', 'Photo ajoutée à l\'action');
    }

    /**
     * Display the pictures of the specified resource.
     */
    public  function showPictures(string $id)
    {
        $action = Action::findOrFail($id);
        $pictures = $action->photos;
        return view('action.showpictures', compact('action', 'pictures'));
    }

    /**
     * Show the form for editing the specified picture.
     */
    public function editPicture(string  $actionId, string $picId)
    {
        //dd($picId);
        $action = Action::findOrFail($actionId);
        $picture = Photo::find($picId);

        return view("action.editpicture", compact('action', 'picture'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePicture(Request $request, string $actionId, string $picId)
    {
        $action = Action::findOrFail($actionId);
        $photo = Photo::find($picId);

        $photo->titre = $request->input('titre_photo');
        $photo->legende = $request->input('legende_photo');

        if ($photo->photo) {
            Storage::disk('public')->delete($photo->photo);
        }

        if ($request->file('photo')) {
            /** @var UploadImage $logo */
            $logo = $request->file('photo');
            $logoPath = $logo->store('photos_actions', 'public');
            $photo->photo = $logoPath;
        }

        $photo->save();

        return redirect()->route('action.showPictures', ['action' => $action])->with('success', 'La photo a bien été modifiée !');
    }

    /**
     * Remove the specified picture from storage.
     */
    public function destroyPicture(string $actionId, string $picId)
    {
        $picture = Photo::find($picId);
        Storage::disk('public')->delete($picture->photo);
        $picture->delete();

        return redirect()->route("action.showPictures", ['action' => $actionId])->with('success', "La photo a bien été supprimé");
    }
}
