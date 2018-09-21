@if(Auth::check() && Auth::user()->is_admin)
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <nav class="my-2 my-md-0 mr-md-3">
            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Utilisateur
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ action('App\AdminController@showAllUser') }}">Tout les utilisateurs</a>
                <a class="dropdown-item"  href="{{ action('App\AdminController@createUser') }}">Ajouter un utilsateur</a>
                
            </div>
        </nav>
    </div>
@endif
