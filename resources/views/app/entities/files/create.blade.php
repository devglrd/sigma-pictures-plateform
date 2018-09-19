@extends('app')


@section('css')
@stop

@section('content')
    
    <div class="container col-md-6">
        <div class="raw text-center">
            <form class="form-signin" method="POST" action="{{ action('App\Files\FilesController@postFile') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h1 class="h3 mb-3 font-weight-normal">Ajout d'un fichier</h1>
                <div class="offset-md-2 col-md-8  ">
                    <label for="inputname" class="sr-only">Nom</label>
                    <input type="text" id="inputname" class="form-control mb-md-3" placeholder="Nom" name="name" required autofocus>
                    <label for="inputfirstname" class="sr-only">Descritpion</label>
                    <textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
                    <label for="inputEmail" class="sr-only">Fichier</label>
                    <input type="file" name="file" class="form-control" multiple="multiple">
                    <!--<button id="btnlogin" class="btn btn-lg btn-block btn btn-outline-info mb-md-3" type="button">Ajouter</button>-->
                    <button id="btnlogin" class="btn btn-lg btn-block btn btn-outline-info" type="submit">Ajouter</button>
                </div>
                <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
            </form>
        </div>
    </div>
@stop

@section('js')
@stop