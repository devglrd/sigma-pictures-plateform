@extends('app')


@section('css')
@stop

@section('content')

    <div class="container rounded bg-light row col-md-8 offset-md-2 justify-content-center text-center">
        <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal text-center ">Creation d'un nouvel utilisateur</h1>

            <label for="inputname" class="sr-only">Name</label>
            <input type="name" id="inputname" class="form-control" placeholder="Nom" required autofocus>

            <label for="inputfirstname" class="sr-only">firstname</label>
            <input type="firstname" id="inputfirstname" class="form-control" placeholder="Prénom" required autofocus>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Adresse mail" required autofocus>

            <button class="btn btn-secondary btn-lg" type="button">Upload</button>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Validé</button>
        </form>
    </div>
@stop

@section('js')
@stop