<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a href="{{ url('/') }}" class="text-dark">
            Sigma Project
        </a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Ajouter un fichier</a>
    </nav>
    @if(Auth::user()->is_admin)
        <a class="btn btn-outline-success mr-2 {{ Route::is('admin') ? "active" : "" }}" href="{{ action('App\AdminController@dashboard') }}">Administration</a>
    @endif
    @if(Auth::check())
        <a class="btn btn-outline-dark mr-2" href="{{ action('App\Files\FilesController@showUserFile') }}">Mes fichiers</a>
        <a class="btn btn-outline-primary mr-2" href="{{ route('logout') }}">Deconnexion</a>
    @else
        <a class="btn btn-outline-primary mr-2" href="{{ action('Auth\LoginController@showLoginForm') }}">Me connecter</a>
    @endif
    {{--    <a class="btn btn-outline-primary" href="{{ action('Auth\RegisterController@showRegistrationForm') }}">M'inscrire</a>--}}
</div>