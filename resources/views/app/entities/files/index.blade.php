@extends('app')


@section('css')

@stop

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center flex-column">
                    <h4>
                        Display tout les fichiers de l'utilsateur
                    </h4>
                    <br>
                    <br>
                    @foreach(Auth::user()->getFiles as $file)
                        <a href="{{ asset($file->file) }}" target="_blank">
                            Fichier # {{ $file->id }} : {{ $file->name }}
                        </a>
                        <br>
                        
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')

@stop