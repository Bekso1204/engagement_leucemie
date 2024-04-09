@extends('template')
@section('content')
<div class="page-adherer">
    <h1>Soutenez l'association en devenant adhérant</h1>
    <div class="contenu">
        <div>
            <div class="texte-engagement">L'association a besoin d'un plus grand nombre <br> d'adhérents pour poursuivre ses engagements :</div>
            <div class="engagements">
                <div class="engagement">
                    <i class="fa-solid fa-comments"></i>
                    01 Réaliser des actions de recrutement
                </div>
                <div class="engagement">
                    <i class="fa-solid fa-address-book"></i>
                    02 Organiser des séances de formation de bénévoles
                </div>
                <div class="engagement">
                    <i class="fa-solid fa-graduation-cap"></i>
                    03 Intervenir dans les milieux éducatifs, les entreprises, les manifestations sportives & culturelles
                </div>
                <div class="engagement">
                    <i class="fa-solid fa-people-carry-box"></i>
                    04 Gérer le service des actions (accueil, logistique, restauration…)
                </div>
            </div>
            <div class="texte-engagement">Merci pour votre engagement à nos côtés.</div>
        </div>
        <form action="" class="form_main">
            <p class="heading">Rejoignez-nous</p>
            <h4>paiement par chèque à :
                Engagement Leucémie <br>
                56, Chemin des Montarmots
                25000 BESANCON</h4>
            <div class="inputContainer">
            <input type="text" class="inputField" id="username" placeholder="Nom">
            </div>
            
        <div class="inputContainer">
            <input type="text" class="inputField" id="password" placeholder="Prénom">
        </div>
        <div class="inputContainer">
            <input type="text" class="inputField" id="password" placeholder="Email">
        </div>
                   
        <button id="button">Valider</button>
        </form>
    </div>
</div>
@endsection