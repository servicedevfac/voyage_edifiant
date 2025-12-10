<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
        <title>@yield('meta-title', 'Voyage Édifiant | Voyages & excursions en Côte d’Ivoire')</title>
        <meta name="description" content="@yield('meta-description', 'Voyage Édifiant vous propose des excursions privées, voyages sur mesure et location de voiture avec chauffeur en Côte d’Ivoire. Explorez Abidjan et ses environs en toute sécurité et authenticité.')" />
        <meta name="keywords" content="@yield('meta-keywords', 'voyage Côte d\'Ivoire, excursions Abidjan, location voiture Abidjan, chauffeur privé, tourisme authentique Afrique, Voyage Édifiant')" />
        <meta name="author" content="Voyage Édifiant">

        <!-- Open Graph -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="@yield('meta-title', 'Voyage Édifiant | Voyages & excursions en Côte d’Ivoire')">
        <meta property="og:description" content="@yield('meta-description', 'Voyage Édifiant vous propose des excursions privées, voyages sur mesure et location de voiture avec chauffeur en Côte d’Ivoire. Explorez Abidjan et ses environs en toute sécurité et authenticité.')">
        <meta property="og:image" content="@yield('meta-image', asset('assets/images/front/images/favicon.ico'))">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('meta-title', 'Voyage Édifiant | Voyages & excursions en Côte d’Ivoire')">
        <meta name="twitter:description" content="@yield('meta-description', 'Voyage Édifiant vous propose des excursions privées, voyages sur mesure et location de voiture avec chauffeur en Côte d’Ivoire. Explorez Abidjan et ses environs en toute sécurité et authenticité.')">
        <meta name="twitter:image" content="@yield('meta-image', asset('assets/images/front/images/favicon.ico'))">

        <!-- bootstrap link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- font awesome  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ url('assets/front/css/style.css') }}">
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="48x48" href="{{ url('assets/front/images/favicon.ico') }}">
        <!-- SweetAlert2 CDN -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="logo">
                    <a href="#"><img src="{{ url('assets/front/images/logo.png') }}" alt="Logo"></a>
                </div>
                <ul class="nav-links">
                    <li class="{{ Route::is('accueil') ? 'active' : '' }} menu-active"><a href="{{ route('accueil') }}">Accueil</a></li>
                    <li class="{{ Route::is('apropos') ? 'active' : '' }} menu-active"><a href="{{ route('apropos') }}">A propos</a></li>
                    <li class="{{ Route::is('locationvehicule') ? 'active' : '' }} menu-active"><a href="{{ route('locationvehicule') }}">Location de vehicule</a></li>
                    <li class="{{ Route::is('teambuilding') ? 'active' : '' }} menu-active"><a href="{{ route('teambuilding') }}">Team building</a></li>
                    <li class="{{ Route::is('decouverte', 'decouverteshow') ? 'active' : '' }} menu-active"><a href="{{ route('decouverte') }}">Découverte</a></li>
                    <li class="{{ Route::is('agence') ? 'active' : '' }} menu-active"><a href="{{ route('agence') }}">Agence</a></li>
                    <li class="{{ Route::is('contact') ? 'active' : '' }} menu-active"><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
                <div id="menu-btn" class="fas fa-bars"></div>
                <div id="close-menu" class="fas fa-times hidden"></div>
            </nav>
        </header>

        @yield('content')

        <footer>
        <!-- Section téléchargement de l'application -->
            <section class="app-download">
                <div class="text">
                    <h4 class="secondary-text-white mb-3">Téléchargez notre application sur</h4>
                    <p class="text-leger-white app-text mb-d-none">Téléchargez dès maintenant l’application <b>Voyage Édifiant</b> et organisez tous vos déplacements en quelques clics ! <br> 
                        Disponible sur Google Play et App Store. 
                    </p>
                    <div class="store-buttons">
                        <a href="#" class="store apple normal-text-white"><i class="fab fa-apple me-2 fs-4"></i> App Store</a>
                        <a href="#" class="store google normal-text-white"><i class="fab fa-google-play me-2 fs-4"></i> Play Store</a>
                    </div>
                </div>
                <div class="app-images">
                    <img src="{{ url('assets/front/images/mockupVe.png') }}" alt="App screen 1">
                </div>
            </section>

            <!-- Section bas de page -->
            <section class="footer-bottom">
                <div class="about">
                    <div class="title-trait d-flex align-items-center">
                        <div class="d-flex flex-column">
                            <div class="trait1  me-2 mb-1"></div>
                            <div class="trait4 ms-2"></div>
                        </div>
                        <h4 class="secondary-text-white ms-2">A propos de nous</h4>
                    </div>
                    <p class="text-leger-white m-t20">Nous proposons la location de véhicules, l’organisation de team buildings et un accompagnement complet pour vos projets de voyage (réservations de billets, assistance visa, conseils...). 
                    </p>
                    <div class="socials m-t20">
                        <a href="https://www.facebook.com/voyageedifiant/" target="_blank" style="text-decoration: none; color: white;"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.tiktok.com/@voyage.edifiant?_t=ZM-8xJVdLmdZDU&_r=1" target="_blank" style="text-decoration: none; color: white;"><i class="fab fa-tiktok"></i></a>
                        <a href="https://www.instagram.com/voyage_edifiant?igsh=dTYxNmYwY2tmamVj" target="_blank" style="text-decoration: none; color: white;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="contact">
                    <div class="title-trait d-flex align-items-center">
                        <div class="d-flex flex-column">
                            <div class="trait1  me-2 mb-1"></div>
                            <div class="trait4 ms-2"></div>
                        </div>
                        <h4 class="secondary-text-white ms-2">Contactez nous</h4>
                    </div>
                    <p class="normal-text-white m-t20"><i class="fas fa-phone me-3"></i> +225 07 07 49 47 72 </p>
                    <p class="normal-text-white m-t10"><i class="fas fa-envelope me-3"></i> infos@voyagedifiant.com</p>
                    <p class="normal-text-white m-t10 m-b10"><i class="fas fa-map-marker-alt me-3"></i> Angré Nouveau CHU</p>
                    <a href="https://maps.app.goo.gl/NgLKmENMh9ncmhZP7" target="_blank" class="normal-text-white text-decoration-none"><i class="fas fa-map me-3"></i> Lien map</a>
                </div>
                <div class="links">
                    <div class="title-trait d-flex align-items-center">
                        <div class="d-flex flex-column">
                            <div class="trait1  me-2 mb-1"></div>
                            <div class="trait4 ms-2"></div>
                        </div>
                        <h4 class="secondary-text-white ms-2">Liens utiles</h4>
                    </div>
      
                    <ul>
                        <li class="m-t20"><a href="{{ route('accueil') }}" class="normal-text-white">Accueil</a></li>
                        <li class="m-t10"><a href="{{ route('apropos') }}" class="normal-text-white">A propos</a></li>
                        <li class="m-t10"><a href="{{ route('locationvehicule') }}" class="normal-text-white">Location de véhicule</a></li>
                        <li class="m-t10"><a href="{{ route('teambuilding') }}" class="normal-text-white">Team building</a></li>
                        <li class="m-t10"><a href="{{ route('decouverte') }}" class="normal-text-white">Decouverte</a></li>
                        <li class="m-t10"><a href="{{ route('agence') }}" class="normal-text-white m-t10">Agence</a></li>
                        <li class="m-t10"><a href="{{ route('contact') }}" class="normal-text-white">Contact</a></li>
                    </ul>
                </div>
    
            </section>
            <p class="m-l30 m-b0 m-t30 normal-text-white">Conçu par &copy; <a href="https://www.attouco.com/" target="_blank" style="color: white;">Firme Attou & Co</a></p> 
        </footer>

        <!-- jQuery -->
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
        
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <!-- Français -->
        <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js"></script>



        <script src="{{ url('assets/front/js/nav.js') }}"></script>
        <script src="{{ url('assets/front/js/locat.js') }}"></script>
        <script src="{{ url('assets/front/js/menu.js') }}"></script>
        <!-- Bootstrap Bundle avec Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            // Initialiser la date de début et stocker l'instance
            let dateDebutInstance = flatpickr("#dateDebut", {
                locale: "fr",
                dateFormat: "d/m/Y",
                minDate: "today",
                onChange: function(selectedDates, dateStr, instance) {
                    dateFinInstance.set("minDate", selectedDates[0]);
                }
            });

            // Initialiser la date de fin et stocker l'instance
            let dateFinInstance = flatpickr("#dateFin", {
                locale: "fr",
                dateFormat: "d/m/Y",
                minDate: "today",
                onChange: function(selectedDates, dateStr, instance) {
                    dateDebutInstance.set("maxDate", selectedDates[0]);
                }
            });
        </script>

        @if(session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'OK'
                });
            </script>
        @endif





    </body>
 </html>