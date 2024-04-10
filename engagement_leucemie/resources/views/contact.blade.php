@extends('template')
@section('content')

<section class="contact" id="contact">
        <h2 class="heading">Contact</span></h2>

        <form action="#">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" placeholder="Prenom" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Nom" required>
                    <span class="focus"></span>
                </div>

                <div class="input-field">
                    <input type="email" placeholder="Mail" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="tel" placeholder="Téléphone" required>
                    <span class="focus"></span>
                </div>

                <div class="textarea-field">
                    <textarea name="" id="" cols="150" rows="5" placeholder="Votre Message" required></textarea>
                    <span class="focus"></span>
                </div>

                <div class="btn-box btns">
                    <button type="submit" class="btn">Envoyer</button>
                </div>
            </div>
        </form>
    </section>

    <style>
        :root {
    --text: #000000;
    --background: #ffffff;
    --primary: #25A54E;
    --secondary: #FAB029;
    --accent:#0a6728;
}
        .contact {
    min-height: auto;
}
.contact h2 {
    color: var(--primary);
    font-size: 4rem;
    text-align: center;
    padding: 2rem;
}

.contact form {
    max-width: 70rem;
    margin: 0 auto;
    text-align: center;
}

.contact form .input-box {
    position: relative;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.contact form .input-box .input-field {
    position: relative;
    width: 49%;
    margin: .8rem 0;
}

.contact form .input-box .input-field input {
    width: calc(100% - 4rem);
    padding: 0.7rem;
    font-size: 1rem;
    color: var(--text);
    background: transparent;
    border-radius: .6rem;
    border: .2rem solid var(--primary);
}

.contact form .textarea-field textarea {
    width: calc(100% - 4rem);
    padding: 0.7rem;
    font-size: 1rem;
    color: var(--text);
    background: transparent;
    border-radius: .6rem;
    border: .2rem solid var(--primary);
    margin-left: 2rem;
}

.contact form .input-box .input-field input::placeholder,
.contact form .textarea-field textarea::placeholder {
    color: var(--text);
}

.contact form .focus {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: var(--background);
    border-radius: .6rem;
    z-index: -1;
    transition: .5s;
}

.contact form .input-box .input-field input:focus~.focus,
.contact form .input-box .input-field input:valid~.focus,
.contact form .textarea-field textarea:focus~.focus,
.contact form .textarea-field textarea:valid~.focus {
    width: 100%;
}

.contact form .textarea-field {
    position: relative;
    margin: .8rem 0 2.7rem;
    display: flex;
}

.contact form .textarea-field textarea {
    resize: none;
}



.contact form .btn-box.btns .btn {
    cursor: pointer;
    background-color: var(--primary);
    color: white;
    font-size: 1.2rem;
    padding: 0.5rem 1rem; 
    border: none; 
    border-radius: 0.6rem; 
}

.contact form .btn-box.btns{
    margin : auto;
    margin-bottom: 2rem;
}
    </style>

    @endsection