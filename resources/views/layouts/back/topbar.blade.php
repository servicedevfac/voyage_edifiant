<div class="topbar">
    <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

        <!-- Brand Logo -->
        <div class="logo-box">
            <!-- Brand Logo Light -->
            <a href="{{ route('dashboard') }}" class="logo-light">
                <img src="{{ url('assets/back/images/logo-light.png') }}" alt="logo" class="logo-lg" height="22">
                <img src="{{ url('assets/back/images/logo-sm.png') }}" alt="small logo" class="logo-sm" height="22">
            </a>

            <!-- Brand Logo Dark -->
            <a href="{{ route('dashboard') }}" class="logo-dark">
                <img src="{{ url('assets/back/images/logo-dark.png') }}" alt="dark logo" class="logo-lg" height="22">
                <img src="{{ url('assets/back/images/logo-sm.png') }}" alt="small logo" class="logo-sm" height="22">
            </a>
        </div>

        <!-- Sidebar Menu Toggle Button -->
        <button class="button-toggle-menu">
            <i class="mdi mdi-menu"></i>
        </button>
    </div>

    <ul class="topbar-menu d-flex align-items-center gap-4">

        <!-- Lien vers le front -->
        <li class="d-none d-md-inline-block">
            <a class="nav-link" href="{{ route('accueil') }}" target="_blank" title="Voir le site">
                <i class="mdi mdi-web font-size-24"></i>
            </a>
        </li>

        <li class="d-none d-md-inline-block">
            <a class="nav-link" href="" data-bs-toggle="fullscreen">
                <i class="mdi mdi-fullscreen font-size-24"></i>
            </a>
        </li>


        <li class="nav-link" id="theme-mode">
            <i class="bx bx-moon font-size-24"></i>
        </li>

        <li class="dropdown">
            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ url('assets/back/images/users/avatar-4.jpg') }}" alt="user-image" class="rounded-circle">
                <span class="ms-1 d-none d-md-inline-block">
                    {{ ucwords(Auth::user()->name) }} <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Bienvenue !</h6>
                </div>

                <!-- item-->
                <a href="{{ route('profile.edit') }}" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>Mon Profil</span>
                </a>

                <!-- Lien vers le site -->
                <a href="{{ route('accueil') }}" class="dropdown-item notify-item" target="_blank">
                    <i class="fe-globe"></i>
                    <span>Voir le site</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i>
                    <span>Déconnexion</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </div>
        </li>

    </ul>
</div>