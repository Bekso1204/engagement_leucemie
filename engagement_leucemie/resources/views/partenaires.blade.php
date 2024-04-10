@extends('template')
@section('content')
<div class="page-partenaires">
    <div class="partenaires-header">
        <h1>Nos partenaires</h1>
        <p>Voici nos partenaires engagés qui rendent possible chacune de nos actions.</p>
    </div>
    <div class="container">
        @foreach( $partenaires as $partenaire )
        <div class="partenaire-1">
            @foreach($partenaire->liens as $lien)
            @if($lien->type === 'site')
            <a href="{{ $lien->libelle }}" target="_blank">
                <img src="\back_office/public/storage/{{ $partenaire['logo'] }}" alt="{{ $partenaire['nom'] }}" height="25%" width="25%" />
            </a>
            <h1>{{ $partenaire->nom }}</h1>
            @elseif($lien->type !== 'site')
            <a href="{{ $lien->libelle }}" target="_blank" class="btn btn-dark" >
                <i class="{{ convertToIcon($lien->type) }}"></i>
            </a>
            @endif
            @endforeach
        </div>
        @endforeach
    </div>
</div>
@endsection