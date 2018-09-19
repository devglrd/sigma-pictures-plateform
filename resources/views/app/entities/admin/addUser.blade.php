@extends('app')


@section('css')
@stop

@section('content')

    <div class="container col-md-6">
        <div class="raw text-center">
            <form class="form-signin">
                <h1 class="h3 mb-3 font-weight-normal">Création d'un Utilisateur</h1>
                <div class="offset-md-2 col-md-8  ">
                    <label for="inputname" class="sr-only">Nom</label>
                    <input type="email" id="inputname" class="form-control mb-md-3" placeholder="nom" required autofocus>
                    <label for="inputfirstname" class="sr-only">Prénom</label>
                    <input type="email" id="inputfirstname" class="form-control mb-md-3" placeholder="Prénom" required autofocus>
                    <label for="inputEmail" class="sr-only">Adresse mail</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Adresse mail" required autofocus>
                    <br>
                    <button id="btnlogin" class="btn btn-lg btn-block btn btn-outline-info" type="button">Ajouter</button>
                    <br>
                    <button id="btnlogin" class="btn btn-lg btn-block btn btn-outline-info" type="submit">Se connecter</button>
                </div>
                <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
            </form>
        </div>
    </div>
@stop

@section('js')
@stop