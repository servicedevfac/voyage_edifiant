@extends('layouts.app')

@section('hide-global-alert', true)

@section('meta-title')

Team building en Côte d’Ivoire | Voyage Édifiant

@endsection



@section('meta-description')

Renforcez la cohésion de votre équipe grâce à nos activités de team building en Côte d'Ivoire : excursions, ateliers et expériences uniques.

@endsection



@section('meta-keywords')

team building Abidjan, activités entreprise Côte d'Ivoire, cohésion d'équipe, Voyage Édifiant

@endsection



@section('meta-image')

{{ asset('assets/front/images/hero-bg1.png') }}

@endsection





@section('content')



<main>

    <div id="monCarrousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active">

                <img src="{{ url('assets/front/images/hero-bg1.png')}}" class="d-block w-100" alt="Slide 1">

                <div class="carousel-caption">

                <img src="{{ url('assets/front/images/patern-ve-2.png')}}" alt="" style="height: 50px;">

                <h2 class="mb-4">Team Building</h2>

                <p class="mb-4 text-leger-white titrelocat">

                    Fatigués des réunions qui ne motivent plus ? Offrez à vos collaborateurs un moment de détente, de cohésion et de fun avec un team building signé Voyage Édifiant. 

                    Jeux, challenges, aventures, ambiance... On s’occupe de tout pour que votre équipe ressorte plus soudée, plus motivée et plus performante. 

                </p>

                <a href="#offre" class="primary-btn">Découvrez nos offres</a>

                </div>

            

            </div>

        </div>

    </div>



        <section class="py-5" style="padding-bottom: 0px !important;">

            <div class="container">

                <div class="title text-center">

                    <h3 class="primary-text mb-3">Renforcer la cohésion de votre équipe.</h3>

                </div>

            </div>

        </section>



        <section class="">

            <div class="container">

                <div class="row gx-5">

                    <div class="col-md-12 col-lg-7 ">

                        <p class="p-b30 why">

                        Le team building est bien plus qu’une simple activité : 

                        c’est un levier puissant pour améliorer la communication, 

                        renforcer la cohésion d’équipe et stimuler la motivation 

                        au sein de votre entreprise.

                        </p>

                        <div class="title-trait d-flex align-items-center">

                        <div class="d-flex flex-column">

                            <div class="trait1  me-2 mb-1"></div>

                            <div class="trait2 ms-2"></div>

                        </div>

                        <h4 class="secondary-text ms-2">Pourquoi organiser un team building ?</h4>

                        </div>

                        <p class="p-t10 why">

                            <b>Améliorer la collaboration : </b>

                            Favorise l’esprit d’équipe et la synergie entre collègues.

                        </p>

                        <p class="p-t10 why">

                            <b>Développer la confiance : </b>

                            Permet aux employés de mieux se connaître et d’instaurer un climat de confiance.

                        </p>

                        <p class="p-t10 why">

                            <b>Stimuler la motivation :</b>

                            Apporte un moment de détente et de plaisir, augmentant l’engagement des collaborateurs.

                        </p>                

                        <p class="p-t10 why">

                            <b>Renforcer l’appartenance :</b>

                            Crée un sentiment d’appartenance à l’entreprise et une culture d’équipe solide.

                        </p>

                        <button type="button" class="btn m-t30" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

                             Faîtes une expérience

                        </button>



                    </div>



                    <div class="col-md-12 col-lg-5 contenus mb-md-5 mt-md-5 gauche">

                        <div class="image1 text-center">

                            <div class="cadImage6 mb-3">

                                <img src="{{ url('assets/front/images/IMG_9497.jpg')}}" alt="">

                            </div>

                        </div>

                    </div>

                </div> 

            </div>

        </section>

        



        <section class="py-5 m-t100 m-b150" id="offre" style="background-image: url('{{ url('assets/front/images/bg1.png')}}');">

            <div class="container ">

                <div class="title text-center ">

                    <h3 class="primary-text mb-3">Découvrez nos offres de team building.</h3>

                    <p class="text-leger">Parce que de grandes équipes se construisent ensemble, offrez vous un moment unique de partage et de cohésion.</p>

                </div>

                <div class="row gx-4 gy-4 m-t50">

                    @foreach ($tbuildings as $tb)

                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="decouvertes1 p-b30 d-flex justify-content-center align-items-start" style="background-color:#fff;">

                            <div class="carousel-img">

                                <div id="monCarrousel" class="carousel slide" data-bs-ride="carousel">

                                    <div class="carousel-inner">



                                        @php

                                            $images = json_decode($tb->images, true);

                                        @endphp



                                        @if(is_array($images) && count($images) > 0)

                                            @foreach($images as $index => $image)

                                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }} new-image">

                                                    <img src="{{ url($image) }}" class="d-block w-100" alt="Image {{ $index + 1 }}">

                                                </div>

                                            @endforeach

                                        @else

                                            <div class="carousel-item active new-image">

                                                <img src="{{ url('assets/front/images/default.jpg') }}" class="d-block w-100" alt="Image par défaut">

                                            </div>

                                        @endif

                                    </div>

                            </div>

                                <h3 class="normal-text m-a20 text-center">{{ $tb->titre }}</h3>

                                <p class="text-leger text-justify text-center">

                                    @php

                                        $activites = json_decode($tb->activite, true);

                                    @endphp



                                    @if(is_array($activites))

                                        {{ implode(', ', $activites) }}

                                    @else

                                        Aucune activité sélectionnée

                                    @endif

                                </p>

                            </div>

                            <div class="content">

                                <h3 class="secondary-text-white text-center m-a20">{{ $tb->nom_lieu }}</h3>

                                <p class="text-leger-white .first-p">

                                   {{ strip_tags($tb->courte_description) }}

                                </p>

                                <div class="mx-auto" style="width: fit-content;">

                                    <button type="button" class="btn m-t30 btns" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

                                        Je veux un devis

                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                    @endforeach

                    

                    {{-- <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="decouvertes1 p-b30 d-flex justify-content-center align-items-start" style="background-color:#fff;">

                            <div class="carousel-img">

                                <div id="monCarrousel" class="carousel slide" data-bs-ride="carousel">

                                    <div class="carousel-inner">

                                    <div class="carousel-item active new-image">

                                        <img src="{{ url('assets/front/images/La-Cabane-Verte-BAAB-3.jpeg')}}" class="d-block w-100" alt="Slide 1">

                                    </div>

                                    <div class="carousel-item new-image">

                                        <img src="{{ url('assets/front/images/La-cabane-verte_2_BAAB.jpg')}}" class="d-block w-100" alt="Slide 2">

                                    </div>

                                    <div class="carousel-item new-image">

                                        <img src="{{ url('assets/front/images/La-Cabane-Verte_4_BAAB.jpg')}}" class="d-block w-100" alt="Slide 3">

                                    </div>

                                    </div>

                                </div>

                                <h3 class="normal-text m-a20 text-center">Excursion à la cabane verte</h3>

                                <p class="text-leger text-justify text-center">Piscine, tire à la carabine , velo, maracana, trampoline, 

                                    jeux de société traditionnelle ( ludo, awalé, carte, balençoire)</p>

                            </div>

                            <div class="content">

                                <h3 class="secondary-text-white text-center m-a20">La cabane verte</h3>

                                <p class="text-leger-white .first-p">

                                    Amoureux de la nature, ce nouvel écologie est fait pour vous: à l’origine 

                                    un projet agro pastoral familial, la cabane verte est devenue il y’a deux 

                                    ans une adresse confidentielle que l’on se partageait de bouche à oreille, 

                                    avant d’officialiser son existence sur les réseaux pour le plus grand bonheur 

                                    des amateurs d’échappées belles et de retraites paisible au vert. Amoureux de 

                                    la nature, ce nouvel écologie est fait pour vous: à l’origine un projet agro 

                                    pastoral familial, la cabane verte est devenue il y’a deux ans une adresse 

                                    confidentielle que l’on se partageait de bouche à oreille, avant 

                                    d’officialiser son existence sur les réseaux pour le plus grand bonheur des 

                                    amateurs d’échappées belles et de retraites paisible au vert. venez decouvrir

                                </p>

                                <div class="mx-auto" style="width: fit-content;">

                                    <button type="button" class="btn m-t30 btns" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

                                        Je veux un devis

                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="decouvertes1 p-b30 d-flex justify-content-center align-items-start" style="background-color:#fff;">

                            <div class="carousel-img">

                                <div id="monCarrousel" class="carousel slide" data-bs-ride="carousel">

                                    <div class="carousel-inner">

                                    <div class="carousel-item active new-image">

                                        <img src="{{ url('assets/front/images/La-Cabane-Verte-BAAB-3.jpeg')}}" class="d-block w-100" alt="Slide 1">

                                    </div>

                                    <div class="carousel-item new-image">

                                        <img src="{{ url('assets/front/images/La-cabane-verte_2_BAAB.jpg')}}" class="d-block w-100" alt="Slide 2">

                                    </div>

                                    <div class="carousel-item new-image">

                                        <img src="{{ url('assets/front/images/La-Cabane-Verte_4_BAAB.jpg')}}" class="d-block w-100" alt="Slide 3">

                                    </div>

                                    </div>

                                </div>

                                <h3 class="normal-text m-a20 text-center">Excursion à la cabane verte</h3>

                                <p class="text-leger text-justify text-center">Piscine, tire à la carabine , velo, maracana, trampoline, 

                                    jeux de société traditionnelle ( ludo, awalé, carte, balençoire)</p>

                            </div>

                            <div class="content">

                                <h3 class="secondary-text-white text-center m-a20">La cabane verte</h3>

                                <p class="text-leger-white .first-p">

                                    Amoureux de la nature, ce nouvel écologie est fait pour vous: à l’origine 

                                    un projet agro pastoral familial, la cabane verte est devenue il y’a deux 

                                    ans une adresse confidentielle que l’on se partageait de bouche à oreille, 

                                    avant d’officialiser son existence sur les réseaux pour le plus grand bonheur 

                                    des amateurs d’échappées belles et de retraites paisible au vert. Amoureux de 

                                    la nature, ce nouvel écologie est fait pour vous: à l’origine un projet agro 

                                    pastoral familial, la cabane verte est devenue il y’a deux ans une adresse 

                                    confidentielle que l’on se partageait de bouche à oreille, avant 

                                    d’officialiser son existence sur les réseaux pour le plus grand bonheur des 

                                    amateurs d’échappées belles et de retraites paisible au vert. venez decouvrir

                                </p>

                                <div class="mx-auto" style="width: fit-content;">

                                    <button type="button" class="btn m-t30 btns" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

                                        Je veux un devis

                                    </button>

                                </div>

                            </div>

                        </div>

                    </div> --}}

                </div>

            </div>

        </section>



      <section class="py-5">

          <div class="container">

            <div class="row gx-5">

              <div class="col-lg-4 col-md-12 contenus mb-md-5" style="position: relative;">

                   <div class="image1 text-center">

                        <div class="cadImage6 mb-3">

                            <img src="{{ url('assets/front/images/IMG_9294.jpg')}}" alt="">

                        </div>

                    </div>

                    <div class="image12 text-center">

                        <div class="cadImage6 mb-3">

                            <img src="{{ url('assets/front/images/IMG_9244.jpg')}}" alt="">

                        </div>

                    </div>

              </div>

              <div class="col-lg-8 col-md-12">

                <div class="title-trait d-flex align-items-center">

                  <div class="d-flex flex-column">

                    <div class="trait1  me-2 mb-1"></div>

                    <div class="trait2 ms-2"></div>

                  </div>

                  <h4 class="secondary-text fs-5 ms-2">Pourquoi nous choisir pour  organiser votre  team building ?</h4>

                </div>

                <p class="p-t30 text-leger">

                  <b class="normal-text">On comprend vos objectifs</b><br><br>

                  Team building pour la motivation de l’équipe ? Pour améliorer la cohésion entre le personnel ? <br>

                On commence par vous écouter. Parce que chaque entreprise a ses propres défis, on adapte chaque programme à ce que vous voulez vraiment atteindre. 

                </p>

                <p class="p-t30 text-leger">

                  <b class="normal-text">Des idées originales, une ambiance humaine et chaleureuse</b><br><br>

                  Nous proposons des activités ludiques, créatives et engageantes, avec une vraie touche ivoirienne. Rire, challenge, esprit d’équipe, découverte et pleins de jeu. <br>

                  Nos animateurs savent mettre à l’aise, motiver sans forcer, et faire en sorte que chacun se sente bien. 

                </p>



                <p class="p-t30 text-leger">

                  <b class="normal-text">Une organisation de A à Z</b><br><br>

                  Transport, animation, restauration, encadrement, logistique... Vous ne vous occupez de rien. On gère tout dans les moindres détails pour que vous profitiez pleinement, sans stress.

                </p>

                <button type="button" class="btn m-t30" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

                    Reservez maintenant pour une expérience optimal

                </button>

                

              </div>

            </div>

             

          </div>

      </section>



      <section class="p-b150 m-b200 m-t100" style="background-image: url('{{ url('assets/front/images/bg2.png')}}');">

        <div class="container p-t80">

          <div class="title text-center ">

            <h3 class="primary-text mb-3">Ils donnent leur appréciation</h3>

            <!-- <p class="text-leger">Envie de decouvrir la côte d’Ivoire nous vous montrons les villes qui font de lui un pays de renom</p> -->

          </div>



          <div class="row gx-4 gy-4 m-t20">

            <div class=" col-sm-6 col-md-6 col-lg-4">

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

            <div class=" col-sm-6 col-md-6 col-lg-4">

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

            <div class=" col-sm-6 col-md-6 col-lg-4">

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





    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> --}}

        <div class="modal-dialog modal-xl">

            <div class="modal-content">

                <div class="modal-header position-relative justify-content-center" style="border-bottom: none;">

                    <div class="title text-center" id="staticBackdropLabel">

                        <h3 class="primary-text mb-3">Demander un devis</h3>

                    </div>

                    <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>



                <div class="modal-body">

                    @include('partials.form-alert')

                    <form class="row g-3" action="{{ route('teambuilding.store') }}" method="POST">

                        @csrf



                        <div class="col-md-4">

                            <select id="inputState" class="form-select" name="profil" id="profil">

                                <option selected disabled>Entreprise ou particulier</option>

                                <option value="entreprise">Entreprise</option>

                                <option value="particulier">Particulier</option>

                            </select>

                        </div>

                        <div class="col-md-4">

                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrer votre nom">

                        </div>

                        <div class="col-md-4">

                            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Entrer votre prenom">

                        </div>

                        <div class="col-md-4">

                            <input type="email" class="form-control" name="email" id="email" placeholder="Entrer votre email">

                        </div>

                        <div class="col-md-4">

                            <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="Entrer votre numero de téléphone">

                        </div>

                        <div class="col-md-4">

                            <input type="number" class="form-control" name="nbrepers" id="nbrepers" placeholder="Entrer le nombre de personne">

                        </div>

                        <div class="col-md-4">

                            <select class="form-select" name="typedactivite" id="typedactivite">

                                <option selected disabled>Type d'activité</option>

                                <option value="Randonnée">Randonnée</option>

                                <option value="Balade à vélo">Balade à vélo</option>

                                <option value="Autre activité">Autre activité</option>

                            </select>

                        </div>

                        <div class="col-md-4">

                            <input type="text" class="form-control" name="apartir" id="dateDebut" placeholder="A partir du 12/11/2025">

                        </div>

                        <div class="col-md-4">

                            <input type="text" class="form-control" name="jusquau" id="dateFin" placeholder="jusqu'au 13/11/2025">

                        </div>

                        <div class="col-12">

                            <textarea name="message" id="message" class="form-control" placeholder="Entrez votre message"></textarea>

                        </div>

                        <div class="col-12 mx-auto" style="width: fit-content;">

                            <button type="submit" class="btn">Envoyer</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div> 





@endsection