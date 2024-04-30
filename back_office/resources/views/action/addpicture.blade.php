@extends('template')
@section('content')

<h1>Ajouter une photo secondaire</h1>
<form method="POST" action="{{ route('action.storePicture', [$action['id']])}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo secondaire" >
        @error('photo')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="titre_photo" name="titre_photo" placeholder="Titre de la photo" value="{{old('titre_photo')}}" >
        @error('titre_photo')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="legende_photo" name="legende_photo" placeholder="Legende de la photo" value="{{old('legende_photo')}}" >
        @error('legende_photo')
        {{$message}}
        @enderror
    </div>

    <button type="submit" class="btn btn-success" >Ajouter</button>
</form>

@endsection