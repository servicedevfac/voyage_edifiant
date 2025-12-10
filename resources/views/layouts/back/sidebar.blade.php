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
                    <span class="menu-text"> Devis Team building</span>
                </a>
            </li>

            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{ route('teambuilding.liste') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-folder"></i></span>
                    <span class="menu-text"> Team Building </span>
                </a>
            </li>

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
                    <span class="menu-text"> Contact</span>
                </a>
            </li>





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
                    <span class="menu-text"> Permissions </span>
                </a>
            </li>

            @endif

            @endif
            
            

        </ul>
    </div>

</div> --}}