@extends('app')


@section('css')
@stop

@section('content')

    <div class="container col-md-10 base">
        <h1 class="h3 mb-3 font-weight-normal text-center">Liste des utilisateurs</h1>
        <div class="raw text-center">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th scope="col"># ID</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Modification</th>
                    <th scope="col">Supression</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Jean-jacques@gmail.com</td>
                    <td><a href="ROUTE A DEFINIR" class="btn btn-outline-warning">Modifier</a></td>
                    <td><a href="ROUTE A DEFINIR" class="btn btn-outline-danger">Supprimer</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
@stop