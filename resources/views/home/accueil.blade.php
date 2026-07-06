@extends("layouts.app")

<<<<<<< HEAD
@section('meta-title')
Voyage Édifiant | Voyages, excursions & location de voiture en Côte d’Ivoire
@endsection

@section('meta-description')
Découvrez la Côte d'Ivoire avec Voyage Édifiant : excursions privées, voyages sur mesure, location de voiture avec chauffeur à Abidjan et dans tout le pays.
@endsection

@section('meta-keywords')
voyage Côte d'Ivoire, excursions Abidjan, location voiture Abidjan, chauffeur privé, tourisme Côte d'Ivoire, Voyage Édifiant
@endsection

@section('meta-image')
{{ asset('assets/front/images/bg-travel.png') }}
@endsection


@section("content")

    <main>
        <div id="monCarrousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('assets/front/images/bg-describe.png') }}" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption">
                        <h2 class="mb-4">Louez une voiture en toute confiance</h2>
                        <p class="mb-4 text-leger-white">Besoin d’un véhicule pour une course rapide, un déplacement pro, un mariage ou un séjour à l’intérieur du pays ?<br>   
                        Nous mettons à votre disposition des voitures propres, bien entretenues et prêtes à rouler, à des prix abordables. 
                        <p>
                        <a href="{{ route('locationvehicule') }}" class="primary-btn">Louer une voiture maintenant </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ url('assets/front/images/bg-travel.png') }}" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption">
                        <h2 class="mb-4">Voyagez sans stress, on s’occupe de tout </h2>
                        <p class="mb-4 text-leger-white">Que ce soit pour les vacances, un voyage d’affaires ou un départ à l’étranger, on vous accompagne à chaque étape : billets d’avion, obtention de visa, hébergement, conseils pratiques… tout est géré pour vous.
                        </p>
                        <a href="{{ route('agence') }}" class="primary-btn">Je prépare mon voyage </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ url('assets/front/images/bg-locat.png')}}" class="d-block w-100" alt="Slide 3">
                    <div class="carousel-caption">
                        <h2 class="mb-3">Des équipes plus soudées, des résultats plus forts</h2>
                        <p class="mb-4 text-leger-white">Offrez à vos collaborateurs une expérience mémorable !
                        <br>Des activités sur mesure, fun et motivantes, pour renforcer les liens et booster la performance. 
                        </p>
                        <a href="{{ route('teambuilding') }}" class="primary-btn">Organiser un team building  </a>
                    </div>
                </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#monCarrousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#monCarrousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button> -->
        </div>

        <section class="py-5">
            <div class="container">
            <div class="title text-center">
                <h3 class="primary-text mb-3">Trouvez la voiture parfaite pour tout vos déplacement </h3>
                <p class="text-leger">Des voitures confortables , sécurisé et adapté pour tout vos déplacements</p>
            </div>
            </div>
        </section>

        <section class="">
            <div class="container">
                <div class="row gx-5">
                <div class="col-lg-6 col-md-12 contenus mb-md-5">
                        <div class="cadImages">
                            <img src="{{ url('assets/front/images/2.jpg') }}" alt="">
                        </div>
                        <div class="cadImage mb-md-5">
                            <img src="{{ url('assets/front/images/3.jpg') }}" alt="">
                        </div>
                </div>
                <div class="col-lg-6 col-md-12 ">
                    <div class="title-trait d-flex align-items-center">
                    <div class="d-flex flex-column">
                        <div class="trait1  me-2 mb-1"></div>
                        <div class="trait2 ms-2"></div>
                    </div>
                    <h4 class="secondary-text ms-2">Pourquoi louer avec nous?</h4>
                    </div>
                    <p class="p-t30 why">
                    parce que  nous nous engageons à vous offrir une expérience 
                    de location de véhicule exceptionnelle.
                    Grâce à notre large gamme de véhicules, 
                    vous aurez la possibilité de choisir le modèle qui correspond 
                    parfaitement à vos besoins spécifiques.
                    </p>
                    <h4 class="secondary-text p-a30">Nous avons une catégorie de voiture</h4>
                    <div class="row p-lr30 p-t10">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="car p-b10  d-flex align-items-center">
                        <div class="car-image">
                            <img src="{{ url('assets/front/images/car5.png') }}" alt="">
                        </div>
                        <p class="normal-text">Citadine</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="car p-b10  d-flex align-items-center">
                        <div class="car-image">
                            <img src="{{ url('assets/front/images/car5.png') }}" alt="">
                        </div>
                        <p class="normal-text" style="white-space: nowrap;">4 X 4</p>
                        </div>
                    </div>
                    </div>
                    <div class="row p-lr30 m-b30 p-t20">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="car p-b10 d-flex align-items-center">
                        <div class="car-image">
                            <img src="{{ url('assets/front/images/car5.png') }}" alt="">
                        </div>
                        <p class="normal-text" style="white-space: nowrap;">Suv</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="car p-b10 d-flex align-items-center">
                        <div class="car-image">
                            <img src="{{ url('assets/front/images/car5.png') }}" alt="">
                        </div>
                        <p class="normal-text" style="white-space: nowrap;">Mini Bus</p>
                        </div>
                    </div>
                    </div>
                    <div class="m-a30 m-t50">
                        <a href="{{ route('locationvehicule') }}" class="primary-btn">Reserver maintenant</a>
                    </div>
                    
                </div>
                </div>
                
            </div>
        </section>

        <section class="py-5">
            <div class="container ">
                <div class="title text-center ">
                    <h3 class="primary-text mb-3">Des équipes fatiguées, démotivées, qui manquent de cohésion ?</h3>
                    <p class="text-leger">Des jeux et des découvertes enrichissantes pour vous permettre de profiter</p>
                </div>
            </div>
        </section>


        <section class="">
            <div class="container">
                <div class="row gx-5">
                <div class="col-lg-6 col-md-12 mb-md-5">
                    <p class="offre">
                    Dans beaucoup d’entreprises, la routine, le stress et le manque de lien humain finissent par freiner l’efficacité et la motivation. <br>
                    Les collaborateurs viennent, travaillent, repartent… sans vraiment créer de lien. Résultat ? Moins de communication, moins d’envie, moins de résultats. <br>
                    Et si vous changiez ça ? <br>
                    Avec Voyage Édifiant, transformez l’ambiance de travail grâce à un team building bien pensé, bien organisé et vraiment utile. <br>
                    Ce qu’on vous propose : <br>
                        <ul>
                            <li>Des activités fun et stratégiques pour renforcer les liens</li>
                            <li>Un accompagnement complet (transport, repas, animation…)</li>
                            <li>Des formats flexibles : demi-journée, journée complète ou week-end</li>
                            <li>Des lieux variés : lagune, forêt, résidence privée, ville ou intérieur du pays</li>
                        </ul>
                    </p>
                    <div class=" m-t50">
                    <a href="{{ route('teambuilding') }}" class="primary-btn">Organiser un team building</a>
                    </div>
                    
                </div>
                <div class="col-lg-6 col-md-12 contenus1  mb-md-5">
                        <div class="cadImage1">
                            <img src="{{ url('assets/front/images/2.jpg') }}" alt="">
                        </div>
                        <div class="cadImage2 mb-md-5">
                            <img src="{{ url('assets/front/images/3.jpg') }}" alt="">
                        </div>
                </div>
                </div>
                
            </div>
        </section>
        
        <section class="py-5 m-t200" style="background-image: url('{{ url('assets/front/images/bg1.png') }}');">
            <div class="container ">
                <div class="title text-center ">
                    <h3 class="primary-text mb-3">Envie de visiter la Côte d’Ivoire</h3>
                    <p class="text-leger">Envie de decouvrir la côte d’Ivoire nous vous montrons les villes qui font de lui un pays de renom</p>
                </div>

                <div class="row gx-4 gy-4 m-t50">

                    {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="decouverte d-flex justify-content-center align-items-center" style="background-image: url('{{ url('assets/front/images/un-havre-de-paix.jpg')}} ');">
                            <div class="content">
                                <p class="text-center m-lr10">
                                    L’immanquable Assinie est une destination paradisiaque lovée entre lagunes, lacs & océan. 
                                    Profitez d’un calme et d‘une quiétude sans pareils. Cette cité verte est bordée par ses 
                                    multiples atouts balnéaires et écologiques, où vous évader de la vie quotidienne pour 
                                    des moments plus relaxants.
                                </p>
                                <div class="text-center m-t30">
                                    <a href="cityDescribe.html" class="secondary-btn ">Decouvrez la ville</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="decouverte d-flex justify-content-center align-items-center" style="background-image: url('{{ url('assets/front/images/waska-village-restaurant.jpg') }}');">
                            <div class="content">
                                <p class="text-center m-lr10">
                                    L’immanquable Assinie est une destination paradisiaque lovée entre lagunes, lacs & océan. 
                                    Profitez d’un calme et d‘une quiétude sans pareils. Cette cité verte est bordée par ses 
                                    multiples atouts balnéaires et écologiques, où vous évader de la vie quotidienne pour 
                                    des moments plus relaxants.
                                </p>
                                <div class="text-center m-t30">
                                    <a href="cityDescribe.html" class="secondary-btn ">Decouvrez la ville</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    @foreach ($decouverteRecents as $decouverteRecent)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="decouverte d-flex justify-content-center align-items-center" style="background-image: url('{{ url($decouverteRecent->imageprincipale) }}'); background-size: cover; background-position: center;">
                                <div class="content">
                                    <p class="text-center m-lr10">
                                        {!! Str::limit(strip_tags($decouverteRecent->description), 200) !!}
                                    </p>
                                    <div class="text-center m-t30">
                                        <a href="{{ route('decouverteshow', $decouverteRecent->slug) }}" class="secondary-btn ">Decouvrez la ville</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>

                <div class="text-center m-a30 m-t80 more" >
                    <a href="{{ route('decouverte') }}" class="primary-btn-large">En savoir plus</a>
                </div>
            </div>
=======


@section('meta-title')

Voyage Édifiant | Voyages, excursions & location de voiture en Côte d’Ivoire

@endsection



@section('meta-description')

Découvrez la Côte d'Ivoire avec Voyage Édifiant : excursions privées, voyages sur mesure, location de voiture avec chauffeur à Abidjan et dans tout le pays.

@endsection



@section('meta-keywords')

voyage Côte d'Ivoire, excursions Abidjan, location voiture Abidjan, chauffeur privé, tourisme Côte d'Ivoire, Voyage Édifiant

@endsection



@section('meta-image')

{{ asset('assets/front/images/bg-travel.png') }}

@endsection





@section("content")



    <main>

        <div id="monCarrousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">

                    <img src="{{ url('assets/front/images/bg-describe.png') }}" class="d-block w-100" alt="Slide 1">

                    <div class="carousel-caption">

                        <h2 class="mb-4">Louez une voiture en toute confiance.</h2>

                        <p class="mb-4 text-leger-white">Besoin d’un véhicule pour une course rapide, un déplacement pro, un mariage ou un séjour à l’intérieur du pays ?<br>   

                        Nous mettons à votre disposition des voitures propres, bien entretenues et prêtes à rouler, à des prix abordables. 

                        <p>

                        <a href="{{ route('locationvehicule') }}" class="primary-btn">Louez votre voiture maintenant </a>

                    </div>

                </div>

                <div class="carousel-item">

                    <img src="{{ url('assets/front/images/bg-travel.png') }}" class="d-block w-100" alt="Slide 2">

                    <div class="carousel-caption">

                        <h2 class="mb-4">Voyagez sans stress, on s’occupe de tout. </h2>

                        <p class="mb-4 text-leger-white">Que ce soit pour les vacances, un voyage d’affaires ou un départ à l’étranger, on vous accompagne à chaque étape : billets d’avion, obtention de visa, hébergement, conseils pratiques, tout est géré pour vous.

                        </p>

                        <a href="{{ route('agence') }}" class="primary-btn">Préparez votre voyage </a>

                    </div>

                </div>

                <div class="carousel-item">

                    <img src="{{ url('assets/front/images/bg-locat.png')}}" class="d-block w-100" alt="Slide 3">

                    <div class="carousel-caption">

                        <h2 class="mb-3">Des équipes plus soudées, des résultats plus forts.</h2>

                        <p class="mb-4 text-leger-white">Offrez à vos collaborateurs une expérience mémorable !

                        <br>Des activités sur mesure, fun et motivantes, pour renforcer les liens et booster la performance. 

                        </p>

                        <a href="{{ route('teambuilding') }}" class="primary-btn">Organisez votre team building  </a>

                    </div>

                </div>

            </div>

            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#monCarrousel" data-bs-slide="prev">

            <span class="carousel-control-prev-icon"></span>

            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#monCarrousel" data-bs-slide="next">

            <span class="carousel-control-next-icon"></span>

            </button> -->

        </div>



        <section class="py-5">

            <div class="container">

            <div class="title text-center">

                <h3 class="primary-text mb-3">Trouvez la voiture parfaite pour tous vos déplacements.</h3>

                <p class="text-leger">Des voitures confortables, sécurisé et adapté pour tous vos déplacements.</p>

            </div>

            </div>

        </section>



        <section class="">

            <div class="container">

                <div class="row gx-5">

                <div class="col-lg-6 col-md-12 contenus mb-md-5">

                        <div class="cadImages">

                            <img src="{{ url('assets/front/images/2.jpg') }}" alt="">

                        </div>

                        <div class="cadImage mb-md-5">

                            <img src="{{ url('assets/front/images/3.jpg') }}" alt="">

                        </div>

                </div>

                <div class="col-lg-6 col-md-12 ">

                    <div class="title-trait d-flex align-items-center">

                    <div class="d-flex flex-column">

                        <div class="trait1  me-2 mb-1"></div>

                        <div class="trait2 ms-2"></div>

                    </div>

                    <h4 class="secondary-text ms-2">Pourquoi louer avec nous ?</h4>

                    </div>

                    <p class="p-t30 why">

                    Parce que  nous nous engageons à vous offrir une expérience 

                    de location de véhicule exceptionnelle.

                    Grâce à notre large gamme de véhicules, 

                    vous aurez la possibilité de choisir le modèle qui correspond 

                    parfaitement à vos besoins spécifiques.

                    </p>

                    <h4 class="secondary-text p-a30">Nous avons une catégorie de voiture.</h4>

                    <div class="row p-lr30 p-t10">

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="car p-b10  d-flex align-items-center">

                        <div class="car-image">

                            <img src="{{ url('assets/front/images/car5.png') }}" alt="">

                        </div>

                        <p class="normal-text">Citadine</p>

                        </div>

                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="car p-b10  d-flex align-items-center">

                        <div class="car-image">

                            <img src="{{ url('assets/front/images/mini_car3.png') }}" alt="">

                        </div>

                        <p class="normal-text" style="white-space: nowrap;">4 X 4</p>

                        </div>

                    </div>

                    </div>

                    <div class="row p-lr30 m-b30 p-t20">

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="car p-b10 d-flex align-items-center">

                        <div class="car-image">

                            <img src="{{ url('assets/front/images/mini_car2.png') }}" alt="">

                        </div>

                        <p class="normal-text" style="white-space: nowrap;">SUV</p>

                        </div>

                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="car p-b10 d-flex align-items-center">

                        <div class="car-image">

                            <img src="{{ url('assets/front/images/mini_car.png') }}" alt="">

                        </div>

                        <p class="normal-text" style="white-space: nowrap;">Mini Bus</p>

                        </div>

                    </div>

                    </div>

                    <div class="m-a30 m-t50">

                        <a href="{{ route('locationvehicule') }}" class="primary-btn">Réservez maintenant</a>

                    </div>

                    

                </div>

                </div>

                

            </div>

        </section>



        <section class="py-5">

            <div class="container ">

                <div class="title text-center ">

                    <h3 class="primary-text mb-3">Des équipes fatiguées, démotivées, qui manquent de cohésion ?</h3>

                    <p class="text-leger">Des jeux et des découvertes enrichissantes pour vous permettre de profiter.</p>

                </div>

            </div>

        </section>





        <section class="">

            <div class="container">

                <div class="row gx-5">

                <div class="col-lg-6 col-md-12 mb-md-5">

                    <p class="offre">

                    Dans beaucoup d’entreprises, la routine, le stress et le manque de lien humain finissent par freiner l’efficacité et la motivation. <br>

                    Les collaborateurs viennent, travaillent, repartent sans vraiment créer de lien. <br> Résultat ? Moins de communication, moins d’envie, moins de résultats. <br><br>

                    <b>Et si vous changiez ça ?</b> <br>

                    Avec Voyage Édifiant, transformez l’ambiance de travail grâce à un team building bien pensé, bien organisé et vraiment utile. <br>

                    Ce qu’on vous propose : <br>

                        <ul>

                            <li>Des activités fun et stratégiques pour renforcer les liens</li>

                            <li>Un accompagnement complet (transport, repas, animation…)</li>

                            <li>Des formats flexibles : demi-journée, journée complète ou week-end</li>

                            <li>Des lieux variés : lagune, forêt, résidence privée, ville ou intérieur du pays</li>

                        </ul>

                    </p>

                    <div class=" m-t50">

                    <a href="{{ route('teambuilding') }}" class="primary-btn">Organisez un team building</a>

                    </div>

                    

                </div>

                <div class="col-lg-6 col-md-12 contenus1  mb-md-5">

                        <div class="cadImage1">

                            <img src="{{ url('assets/front/images/2.jpg') }}" alt="">

                        </div>

                        <div class="cadImage2 mb-md-5">

                            <img src="{{ url('assets/front/images/3.jpg') }}" alt="">

                        </div>

                </div>

                </div>

                

            </div>

        </section>

        

        <section class="py-5 m-t200" style="background-image: url('{{ url('assets/front/images/bg1.png') }}');">

            <div class="container ">

                <div class="title text-center ">

                    <h3 class="primary-text mb-3">Envie de visiter la Côte d’Ivoire ?</h3>

                    <p class="text-leger">Envie de découvrir la Côte d’Ivoire, nous vous montrons les villes qui font d'elle un pays de renom.</p>

                </div>



                <div class="row gx-4 gy-4 m-t50">



                    {{-- <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="decouverte d-flex justify-content-center align-items-center" style="background-image: url('{{ url('assets/front/images/un-havre-de-paix.jpg')}} ');">

                            <div class="content">

                                <p class="text-center m-lr10">

                                    L’immanquable Assinie est une destination paradisiaque lovée entre lagunes, lacs & océan. 

                                    Profitez d’un calme et d‘une quiétude sans pareils. Cette cité verte est bordée par ses 

                                    multiples atouts balnéaires et écologiques, où vous évader de la vie quotidienne pour 

                                    des moments plus relaxants.

                                </p>

                                <div class="text-center m-t30">

                                    <a href="cityDescribe.html" class="secondary-btn ">Découvrez la ville</a>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="decouverte d-flex justify-content-center align-items-center" style="background-image: url('{{ url('assets/front/images/waska-village-restaurant.jpg') }}');">

                            <div class="content">

                                <p class="text-center m-lr10">

                                    L’immanquable Assinie est une destination paradisiaque lovée entre lagunes, lacs & océan. 

                                    Profitez d’un calme et d‘une quiétude sans pareils. Cette cité verte est bordée par ses 

                                    multiples atouts balnéaires et écologiques, où vous évader de la vie quotidienne pour 

                                    des moments plus relaxants.

                                </p>

                                <div class="text-center m-t30">

                                    <a href="cityDescribe.html" class="secondary-btn ">Découvrez la ville</a>

                                </div>

                            </div>

                        </div>

                    </div> --}}



                    @foreach ($decouverteRecents as $decouverteRecent)

                        <div class="col-lg-4 col-md-6 col-sm-6">

                            <div class="decouverte d-flex justify-content-center align-items-center" style="background-image: url('{{ url($decouverteRecent->imageprincipale) }}'); background-size: cover; background-position: center;">

                                <div class="content">

                                    <p class="text-center m-lr10">

                                        {!! Str::limit(strip_tags($decouverteRecent->description), 200) !!}

                                    </p>

                                    <div class="text-center m-t30">

                                        <a href="{{ route('decouverteshow', $decouverteRecent->slug) }}" class="secondary-btn ">Découvrez la ville</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    @endforeach

                    

                </div>



                <div class="text-center m-a30 m-t80 more" >

                    <a href="{{ route('decouverte') }}" class="primary-btn-large">En savoir plus</a>

                </div>

            </div>

>>>>>>> djuedev
        </section>




<<<<<<< HEAD
        <section class="p-b150 m-b100" style="background-image: url('{{ url('assets/front/images/bg2.png') }}');">
            <div class="container p-t80">
                <div class="title text-center ">
                    <h3 class="primary-text mb-3">Il donne leur appréciation</h3>
                    <p class="text-leger">Envie de decouvrir la côte d’Ivoire nous vous montrons les villes qui font de lui un pays de renom</p>
                </div>

                <div class="row gx-4 gy-4 m-t20">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="decouverte1 d-flex justify-content-center align-items-center">
                            <div class="content1 m-a30">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="62" viewBox="0 0 63 62">
                                    <path d="M12.9844 45.5148C10.413 42.6862 8.87012 39.6005 8.87012 34.4575C8.87012 25.4574 15.2988 17.4859 24.2988 13.3716L26.6132 16.7145C18.1274 21.3431 16.3273 27.2575 15.813 31.1146C17.0988 30.3432 18.8988 30.0861 20.6988 30.3432C25.3274 30.8575 28.9275 34.4575 28.9275 39.3433C28.9275 41.6576 27.8989 43.9719 26.356 45.7719C24.556 47.572 22.4988 48.3434 19.9274 48.3434C17.0988 48.3434 14.5273 47.0577 12.9844 45.5148ZM38.699 45.5148C36.1275 42.6862 34.5847 39.6005 34.5847 34.4575C34.5847 25.4574 41.0133 17.4859 50.0134 13.3716L52.3277 16.7145C43.8419 21.3431 42.0419 27.2575 41.5276 31.1146C42.8133 30.3432 44.6133 30.0861 46.4134 30.3432C51.042 30.8575 54.642 34.4575 54.642 39.3433C54.642 41.6576 53.6134 43.9719 52.0706 45.7719C50.5277 47.572 48.2134 48.3434 45.6419 48.3434C42.8133 48.3434 40.2419 47.0577 38.699 45.5148Z" />
                                </svg>
                                <p class="text-justify why">
                                    Je vous assure que je n’avais rien prévue pour le transport des garçons et filles d’honneur, du coup à la veille en scrollant sur Facebook , je suis tombée sur votre publicité et j’ai accroché immédiatement. Je me suis dis ah mais c’est spacieux le véhicule , au lieu de séparer mes filles et garçons , je pouvais les mettre tous dans la même voiture . Parce qu’à la fin du mariage, on a même utiliser les vans pour ramener certains invités chez eux
                                </p>
                                <p class="text-end m-t50">Christelle</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="decouverte1 d-flex justify-content-center align-items-center">
                            <div class="content1 m-a30">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="62" viewBox="0 0 63 62">
                                    <path d="M12.9844 45.5148C10.413 42.6862 8.87012 39.6005 8.87012 34.4575C8.87012 25.4574 15.2988 17.4859 24.2988 13.3716L26.6132 16.7145C18.1274 21.3431 16.3273 27.2575 15.813 31.1146C17.0988 30.3432 18.8988 30.0861 20.6988 30.3432C25.3274 30.8575 28.9275 34.4575 28.9275 39.3433C28.9275 41.6576 27.8989 43.9719 26.356 45.7719C24.556 47.572 22.4988 48.3434 19.9274 48.3434C17.0988 48.3434 14.5273 47.0577 12.9844 45.5148ZM38.699 45.5148C36.1275 42.6862 34.5847 39.6005 34.5847 34.4575C34.5847 25.4574 41.0133 17.4859 50.0134 13.3716L52.3277 16.7145C43.8419 21.3431 42.0419 27.2575 41.5276 31.1146C42.8133 30.3432 44.6133 30.0861 46.4134 30.3432C51.042 30.8575 54.642 34.4575 54.642 39.3433C54.642 41.6576 53.6134 43.9719 52.0706 45.7719C50.5277 47.572 48.2134 48.3434 45.6419 48.3434C42.8133 48.3434 40.2419 47.0577 38.699 45.5148Z" />
                                </svg>
                                <p class="text-justify why">
                                    Merci pour votre sérieux.  J’avais un rendez-vous très important avec un investisseur, et je ne voulais rien laisser au hasard , ni le timing, ni le confort, ni l’image que je renvoie. J’ai donc décidé de passer par vous pour louer une voiture avec chauffeur. Franchement, je n’ai pas été déçu. Le chauffeur était ponctuel, courtois, très professionnel. La voiture, propre et bien entretenue, m’a permis d’arriver serein et concentré.
                                </p>
                                <p class="text-end m-t50">Armel Akoto</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="decouverte1 d-flex justify-content-center align-items-center">
                            <div class="content1 m-a30">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="62" viewBox="0 0 63 62">
                                    <path d="M12.9844 45.5148C10.413 42.6862 8.87012 39.6005 8.87012 34.4575C8.87012 25.4574 15.2988 17.4859 24.2988 13.3716L26.6132 16.7145C18.1274 21.3431 16.3273 27.2575 15.813 31.1146C17.0988 30.3432 18.8988 30.0861 20.6988 30.3432C25.3274 30.8575 28.9275 34.4575 28.9275 39.3433C28.9275 41.6576 27.8989 43.9719 26.356 45.7719C24.556 47.572 22.4988 48.3434 19.9274 48.3434C17.0988 48.3434 14.5273 47.0577 12.9844 45.5148ZM38.699 45.5148C36.1275 42.6862 34.5847 39.6005 34.5847 34.4575C34.5847 25.4574 41.0133 17.4859 50.0134 13.3716L52.3277 16.7145C43.8419 21.3431 42.0419 27.2575 41.5276 31.1146C42.8133 30.3432 44.6133 30.0861 46.4134 30.3432C51.042 30.8575 54.642 34.4575 54.642 39.3433C54.642 41.6576 53.6134 43.9719 52.0706 45.7719C50.5277 47.572 48.2134 48.3434 45.6419 48.3434C42.8133 48.3434 40.2419 47.0577 38.699 45.5148Z" />
                                </svg>
                                <p class="text-justify why">
                                    Lorsque je suis rentrée au pays pour les vacances et j’avais besoin d’un véhicule fiable pour me promener un peu dans Baby là , histoire de faire la fille qui gagne bien sa vie au Canada lol. Et je sur tombé sur votre service de location de voiture et là franchement, j’ai aimé. La voiture était propre, confortable, le chauffeur très respectueux. Vous avez clairement contribué à la réussite de mes vacances. <br> Merci Voyage Edifiant
                                </p>
                                <p class="text-end m-t50">Grâce Emmanuella</p>
                            </div>
                        </div>
                    </div>

                </div>
            
            </div>
        </section>

    </main>

=======





        <section class="p-b150 m-b100" style="background-image: url('{{ url('assets/front/images/bg2.png') }}');">

            <div class="container p-t80">

                <div class="title text-center ">

                    <h3 class="primary-text mb-3">Ils donnent leur appréciation.</h3>

                    <!-- <p class="text-leger">Envie de découvrir la Côte d’Ivoire, nous vous montrons les villes qui font de lui un pays de renom</p> -->

                </div>



                <div class="row gx-4 gy-4 m-t20">

                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="decouverte1 d-flex justify-content-center align-items-center">

                            <div class="content1 m-a30">

                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="62" viewBox="0 0 63 62">

                                    <path d="M12.9844 45.5148C10.413 42.6862 8.87012 39.6005 8.87012 34.4575C8.87012 25.4574 15.2988 17.4859 24.2988 13.3716L26.6132 16.7145C18.1274 21.3431 16.3273 27.2575 15.813 31.1146C17.0988 30.3432 18.8988 30.0861 20.6988 30.3432C25.3274 30.8575 28.9275 34.4575 28.9275 39.3433C28.9275 41.6576 27.8989 43.9719 26.356 45.7719C24.556 47.572 22.4988 48.3434 19.9274 48.3434C17.0988 48.3434 14.5273 47.0577 12.9844 45.5148ZM38.699 45.5148C36.1275 42.6862 34.5847 39.6005 34.5847 34.4575C34.5847 25.4574 41.0133 17.4859 50.0134 13.3716L52.3277 16.7145C43.8419 21.3431 42.0419 27.2575 41.5276 31.1146C42.8133 30.3432 44.6133 30.0861 46.4134 30.3432C51.042 30.8575 54.642 34.4575 54.642 39.3433C54.642 41.6576 53.6134 43.9719 52.0706 45.7719C50.5277 47.572 48.2134 48.3434 45.6419 48.3434C42.8133 48.3434 40.2419 47.0577 38.699 45.5148Z" />

                                </svg>

                                <p class="text-justify why">

                                    Je vous assure que je n’avais rien prévue pour le transport des garçons et filles d’honneur, du coup à la veille en scrollant sur Facebook , je suis tombée sur votre publicité et j’ai accroché immédiatement. Je me suis dis ah mais c’est spacieux le véhicule , au lieu de séparer mes filles et garçons , je pouvais les mettre tous dans la même voiture . Parce qu’à la fin du mariage, on a même utiliser les vans pour ramener certains invités chez eux

                                </p>

                                <p class="text-end m-t50">Christelle</p>

                            </div>

                        </div>

                    </div>



                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="decouverte1 d-flex justify-content-center align-items-center">

                            <div class="content1 m-a30">

                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="62" viewBox="0 0 63 62">

                                    <path d="M12.9844 45.5148C10.413 42.6862 8.87012 39.6005 8.87012 34.4575C8.87012 25.4574 15.2988 17.4859 24.2988 13.3716L26.6132 16.7145C18.1274 21.3431 16.3273 27.2575 15.813 31.1146C17.0988 30.3432 18.8988 30.0861 20.6988 30.3432C25.3274 30.8575 28.9275 34.4575 28.9275 39.3433C28.9275 41.6576 27.8989 43.9719 26.356 45.7719C24.556 47.572 22.4988 48.3434 19.9274 48.3434C17.0988 48.3434 14.5273 47.0577 12.9844 45.5148ZM38.699 45.5148C36.1275 42.6862 34.5847 39.6005 34.5847 34.4575C34.5847 25.4574 41.0133 17.4859 50.0134 13.3716L52.3277 16.7145C43.8419 21.3431 42.0419 27.2575 41.5276 31.1146C42.8133 30.3432 44.6133 30.0861 46.4134 30.3432C51.042 30.8575 54.642 34.4575 54.642 39.3433C54.642 41.6576 53.6134 43.9719 52.0706 45.7719C50.5277 47.572 48.2134 48.3434 45.6419 48.3434C42.8133 48.3434 40.2419 47.0577 38.699 45.5148Z" />

                                </svg>

                                <p class="text-justify why">

                                    Merci pour votre sérieux.  J’avais un rendez-vous très important avec un investisseur, et je ne voulais rien laisser au hasard , ni le timing, ni le confort, ni l’image que je renvoie. J’ai donc décidé de passer par vous pour louer une voiture avec chauffeur. Franchement, je n’ai pas été déçu. Le chauffeur était ponctuel, courtois, très professionnel. La voiture, propre et bien entretenue, m’a permis d’arriver serein et concentré.

                                </p>

                                <p class="text-end m-t50">Armel Akoto</p>

                            </div>

                        </div>

                    </div>



                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="decouverte1 d-flex justify-content-center align-items-center">

                            <div class="content1 m-a30">

                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="62" viewBox="0 0 63 62">

                                    <path d="M12.9844 45.5148C10.413 42.6862 8.87012 39.6005 8.87012 34.4575C8.87012 25.4574 15.2988 17.4859 24.2988 13.3716L26.6132 16.7145C18.1274 21.3431 16.3273 27.2575 15.813 31.1146C17.0988 30.3432 18.8988 30.0861 20.6988 30.3432C25.3274 30.8575 28.9275 34.4575 28.9275 39.3433C28.9275 41.6576 27.8989 43.9719 26.356 45.7719C24.556 47.572 22.4988 48.3434 19.9274 48.3434C17.0988 48.3434 14.5273 47.0577 12.9844 45.5148ZM38.699 45.5148C36.1275 42.6862 34.5847 39.6005 34.5847 34.4575C34.5847 25.4574 41.0133 17.4859 50.0134 13.3716L52.3277 16.7145C43.8419 21.3431 42.0419 27.2575 41.5276 31.1146C42.8133 30.3432 44.6133 30.0861 46.4134 30.3432C51.042 30.8575 54.642 34.4575 54.642 39.3433C54.642 41.6576 53.6134 43.9719 52.0706 45.7719C50.5277 47.572 48.2134 48.3434 45.6419 48.3434C42.8133 48.3434 40.2419 47.0577 38.699 45.5148Z" />

                                </svg>

                                <p class="text-justify why">

                                    Lorsque je suis rentrée au pays pour les vacances et j’avais besoin d’un véhicule fiable pour me promener un peu dans Baby là , histoire de faire la fille qui gagne bien sa vie au Canada lol. Et je sur tombé sur votre service de location de voiture et là franchement, j’ai aimé. La voiture était propre, confortable, le chauffeur très respectueux. Vous avez clairement contribué à la réussite de mes vacances. <br> Merci Voyage Edifiant

                                </p>

                                <p class="text-end m-t50">Grâce Emmanuella</p>

                            </div>

                        </div>

                    </div>



                </div>

            

            </div>

        </section>



    </main>



>>>>>>> djuedev
@endsection