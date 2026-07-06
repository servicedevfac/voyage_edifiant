<div class="main-menu">
    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="{{ route('accueil') }}" class="logo-light">
            <img src="{{ url('assets/front/image/logoFirmeBlanc.png') }}" alt="logo" class="logo-lg" height="80">
            <img src="{{ url('assets/front/image/logoFirmeBlanc.png') }}" alt="small logo" class="logo-sm" height="28">
        </a>

        <!-- Brand Logo Dark -->
        <a href="{{ route('accueil') }}" class="logo-dark">
            <img src="{{ url('assets/front/image/logoFirmeBlanc.png') }}" alt="dark logo" class="logo-lg" height="28">
            <img src="{{ url('assets/front/image/logoFirmeBlanc.png') }}" alt="small logo" class="logo-sm" height="28">
        </a>
    </div>

    <!--- Menu --->
    <div data-simplebar>
        <ul class="app-menu">

            <li class="menu-title">Menu</li>

            <li class="menu-item">
                <a href="{{ route('dashboard') }}" class="menu-link waves-effect waves-light {{ Route::is('dashboard') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                    <span class="menu-text"> Tableau de bord </span>
                </a>
            </li>

            <!-- Lien vers le site front -->
            <li class="menu-item">
                <a href="{{ route('accueil') }}" class="menu-link waves-effect waves-light" target="_blank">
                    <span class="menu-icon"><i class="bx bx-globe"></i></span>
                    <span class="menu-text"> Voir le site </span>
                </a>
            </li>

            <li class="menu-title">Gestion</li>

            <li class="menu-item">
                <a href="{{ route('categories_vehicules.index') }}" class="menu-link waves-effect waves-light {{ Route::is('categories_vehicules.*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="bx bx-list-ul"></i></span>
                    <span class="menu-text"> Catégories Véhicules </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('parc_vehicules.index') }}" class="menu-link waves-effect waves-light {{ Route::is('parc_vehicules.*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="bx bx-car"></i></span>
                    <span class="menu-text"> Parc Automobile </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('vehicule.index') }}" class="menu-link waves-effect waves-light {{ Route::is('vehicule.*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="bx bx-calendar-event"></i></span>
                    <span class="menu-text"> Réservations Véhicules </span>
                </a>
            </li>

             <li class="menu-item">
                <a href="{{ route('devisteam.index') }}" class="menu-link waves-effect waves-light {{ Route::is('devisteam.*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="bx bx-receipt"></i></span>
                    <span class="menu-text"> Devis Team building</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('teambuilding.liste') }}" class="menu-link waves-effect waves-light {{ Route::is('teambuilding.*', 'team_building.*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="bx bx-group"></i></span>
                    <span class="menu-text"> Team Building </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('decouverte.index') }}" class="menu-link waves-effect waves-light {{ Route::is('decouverte.*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="bx bx-map-alt"></i></span>
                    <span class="menu-text"> Découverte</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('agence.index') }}" class="menu-link waves-effect waves-light {{ Route::is('agence.*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="bx bx-briefcase-alt"></i></span>
                    <span class="menu-text"> Réservation Agence</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('contact.index') }}" class="menu-link waves-effect waves-light {{ Route::is('contact.*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="bx bx-envelope"></i></span>
                    <span class="menu-text"> Contact</span>
                </a>
            </li>

            @if(auth()->user() && auth()->user()->hasAnyRole(['admin', 'superadmin']))

            <li class="menu-title">Administration</li>

            <li class="menu-item">
                <a href="{{ route('users.index') }}" class="menu-link waves-effect waves-light {{ Route::is('users.*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="bx bx-user"></i></span>
                    <span class="menu-text"> Utilisateurs </span>
                </a>
            </li> 

            @endif

            @if(auth()->user() && auth()->user()->hasRole('superadmin'))

            <li class="menu-item">
                <a href="{{ route('roles.index') }}" class="menu-link waves-effect waves-light {{ Route::is('roles.*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="bx bx-shield-alt-2"></i></span>
                    <span class="menu-text"> Rôles </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('permissions.index') }}" class="menu-link waves-effect waves-light {{ Route::is('permissions.*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="bx bx-lock-alt"></i></span>
                    <span class="menu-text"> Permissions </span>
                </a>
            </li>

            @endif

        </ul>
    </div>

</div>
