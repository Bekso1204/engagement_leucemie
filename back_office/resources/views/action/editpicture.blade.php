@extends('template')
@section('content')
<h1>Modifier la photo {{ $picture['is_main'] ? 'principale' : 'secondaire' }} de l'action {{$action->titre}}</h1>
<form action="{{ route('action.updatePicture', [$action['id'], $picture['id']]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo" >
        @error('photo')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="titre_photo" name="titre_photo" placeholder="Titre de la photo" value="{{$picture->titre}}" >
        @error('titre_photo')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="legende_photo" name="legende_photo" placeholder="Legende de la photo" value="{{$picture->legende}}" >
        @error('legende_photo')
        {{$message}}
        @enderror
    </div>

    <button type="submit" class="btn btn-success" >Ajouter</button>
</form>
@endsection