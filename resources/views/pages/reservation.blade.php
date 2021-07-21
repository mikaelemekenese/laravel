@extends('layouts.default')
@section('content')

    <div class="container" style="width:500px">

        <h3 class="text-success" style="margin-top:30px;">Formulaire de prise de rendez-vous chez un médecin traitant</h3>
        <p style="margin-bottom:30px;color:blue;">Remplissez le formulaire ci-dessous en indiquant le type de rendez-vous dont vous avez besoin. Nous vous recontacterons bientôt pour de plus amples informations.</p>

        <form>
            <hr>
            <div class="mb-3"><p>Pour qui prenez-vous ce rendez-vous ?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Moi-même
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Un proche
                    </label>
                </div>
            </div>
            <hr>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" aria-describedby="nom">
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
    </div>

@stop