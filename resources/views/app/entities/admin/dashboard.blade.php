@extends('app')


@section('css')
@stop

@section('content')
    @include("app.partials.navbarAdmin")
    <section class="dashboard">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-centerw">
                    Dashboard Admin
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')
@stop