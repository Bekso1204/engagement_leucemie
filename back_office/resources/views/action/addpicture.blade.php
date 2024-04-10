@extends('template')
@section('content')

<h1>Ajouter une photo secondaire</h1>
<form method="POST" action="{{ route('action.storePicture', [$action['id']])}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo secondaire" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="titre_photo" name="titre_photo" placeholder="Titre de la photo" value="{{old('titre_photo')}}" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="legende_photo" name="legende_photo" placeholder="Legende de la photo" value="{{old('legende_photo')}}" required>
    </div>

    <button type="submit" class="btn btn-success" >Ajouter</button>
</form>

@endsection