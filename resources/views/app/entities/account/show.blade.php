@extends('app')


@section('css')

@stop

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center flex-column">
                    <div class="btn">Voici vos information !</div>
                    Email : {{ $user->email }}<br>
                    Password :{{ $password }}
                    <br>
                    <br>
                    <a href="{{ action('Auth\LoginController@showLoginForm') }}" class="btn btn-outline-primary">Me connecter</a>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')
    <script>
        $(document).ready(() => {
            console.log("docu", this);

            $('.btn').on('click', () => {
                console.log("docu", this);
            })
        })
    </script>
@stop