@extends('app')


@section('css')

@stop

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-start">
                    Display tout les fichiers de l'utilsateur
                    @foreach(Auth::user()->getFiles as $file)
                        {{ $file->name }}
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')

@stop