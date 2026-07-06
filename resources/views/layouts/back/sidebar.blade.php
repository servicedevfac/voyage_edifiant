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

<<<<<<< HEAD
    <!--- Menu -->
=======
    <!--- Menu --->
>>>>>>> djuedev
    <div data-simplebar>
        <ul class="app-menu">

            <li class="menu-title">Menu</li>

            <li class="menu-item">
<<<<<<< HEAD
                <a href="{{ route('dashboard') }}" class="menu-link waves-effect waves-light">
=======
                <a href="{{ route('dashboard') }}" class="menu-link waves-effect waves-light {{ Route::is('dashboard') ? 'active' : '' }}">
>>>>>>> djuedev
                    <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                    <span class="menu-text"> Tableau de bord </span>
                </a>
            </li>

<<<<<<< HEAD
            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('vehicule.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Reservation vehicules </span>
                </a>
            </li>

            <li class="menu-title"></li>

             <li class="menu-item">
                <a href="{{ route('devisteam.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
=======
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
>>>>>>> djuedev
                    <span class="menu-text"> Devis Team building</span>
                </a>
            </li>

<<<<<<< HEAD
            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('teambuilding.liste') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
=======
            <li class="menu-item">
                <a href="{{ route('teambuilding.liste') }}" class="menu-link waves-effect waves-light {{ Route::is('teambuilding.*', 'team_building.*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="bx bx-group"></i></span>
>>>>>>> djuedev
                    <span class="menu-text"> Team Building </span>
                </a>
            </li>

<<<<<<< HEAD
            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('decouverte.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Decouverte</span>
                </a>
            </li>

            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('agence.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Reservation Agence</span>
                </a>
            </li>

            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('contact.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
=======
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
>>>>>>> djuedev
                    <span class="menu-text"> Contact</span>
                </a>
            </li>

<<<<<<< HEAD




            {{-- <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('typev.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Types de vehicules </span>
                </a>
            </li>

            

            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Location vehicule </span>
                </a>
            </li>

             --}}
            
            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('users.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Utilisateurs </span>
                </a>
            </li> 
           
           

            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('roles.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Roles </span>
                </a>
            </li>

            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('permissions.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Permissions </span>
                </a>
            </li>
            
            

        </ul>
    </div>

</div>



{{-- <div class="main-menu">
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

    <!--- Menu -->
    <div data-simplebar>
        <ul class="app-menu">

            <li class="menu-title">Menu</li>

            <li class="menu-item">
                <a href="{{ route('dashboard') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                    <span class="menu-text"> Tableau de bord </span>
                </a>
            </li>

            <li class="menu-title"></li>

            {{-- <li class="menu-item">
                <a href="{{ route('banniere.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Bannière </span>
                </a>
            </li> --}}

            {{-- <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('categories.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Categories </span>
                </a>
            </li>

            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('articles.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Articles </span>
                </a>
            </li>

            @if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('superadmin'))

            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('devis.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Reservation vehicule </span>
                </a>
            </li>

            <li class="menu-title"></li>

             <li class="menu-item">
                <a href="{{ route('ventes.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Devis</span>
                </a>
            </li>

            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('locations.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Reservation</span>
                </a>
            </li>

            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('locations.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Contact</span>
                </a>
            </li>
            
            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('users.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Utilisateurs </span>
                </a>
            </li> 
           
            @if(auth()->user()->hasRole('superadmin'))

            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('roles.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Roles </span>
                </a>
            </li>

            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('permissions.index') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
=======
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
>>>>>>> djuedev
                    <span class="menu-text"> Permissions </span>
                </a>
            </li>

            @endif

<<<<<<< HEAD
            @endif
            
            

        </ul>
    </div>

</div> --}}
=======
        </ul>
    </div>

</div>
>>>>>>> djuedev
