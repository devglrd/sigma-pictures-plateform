@extends('app')


@section('css')
@stop

@section('content')

    <div class="container col-md-6">
        <div class="raw text-center">
            <form class="form-signin">
                <h1 class="h3 mb-3 font-weight-normal">Connexion Administrateur</h1>
                <div class="offset-md-2 col-md-8">
                    <label for="inputEmail" class="sr-only">Adresse email</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Adresse email" required autofocus>
                    <label for="inputPassword" class="sr-only">Mot de passe</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
                    <!-- Penser à placer la route pour la récupération du mot de passe Admion ICI -->
                    <p>Mot de passe oublié ? Cliquez <a href="PLACER UNE ROUTE ICI">ici</a></p>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Se souvenir de moi
                        </label>
                    </div>
                <button id="btnlogin" class="btn btn-lg btn-block btn btn-outline-info" type="submit">Se connecter</button>
                </div>
                <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
            </form>
        </div>
    </div>
@stop

@section('js')
@stop