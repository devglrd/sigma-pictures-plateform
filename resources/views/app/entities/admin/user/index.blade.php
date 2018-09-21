@extends('app')


@section('css')
@stop

@section('content')
    @include("app.partials.navbarAdmin")
    <div class="container col-md-10 base">
        <h1 class="h3 mb-3 font-weight-normal text-center">Liste des utilisateurs</h1>
        <div class="raw text-center">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col"># ID</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $user->email }} {{ Auth::user()->email ===  $user->email ? "(Vous)" : ""}}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td class="{{ $user->is_admin ? "text-success" : "" }}">{{ $user->is_admin ? "Admin" : "Membre normal" }}</td>
                        <td>
                            @if(!$user->is_admin)
                                <a href="{{ action('App\AdminController@editUser', $user->id) }}" class="btn btn-outline-warning mr-2">Modifier</a>
                                <a href="{{ action('App\AdminController@deleteUser', $user->id) }}" class="btn btn-outline-danger">Supprimer</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
@stop