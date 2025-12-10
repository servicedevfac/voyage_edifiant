@extends("layouts.app")

@section('meta-title')
À propos | Voyage Édifiant, votre partenaire voyage en Côte d’Ivoire
@endsection

@section('meta-description')
Découvrez l'histoire et la mission de Voyage Édifiant, votre agence locale experte des voyages authentiques et sécurisés en Côte d'Ivoire.
@endsection

@section('meta-keywords')
Voyage Édifiant, à propos, histoire, valeurs, voyages authentiques Côte d'Ivoire, agence voyage Abidjan
@endsection

@section('meta-image')
{{ asset('assets/front/images/about.png') }}
@endsection

@section("content")

    <main>
        <div id="monCarrousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active banner">
              <div class="overlay"></div>
              <img src="{{ url('assets/front/images/about.png') }}" class="d-block w-100" alt="about-img">
              <div class="carousel-captions">
                  <h2 class="mb-4 title2">A propos de nous</h2>
              </div>
            </div> 
          </div>
        </div>

      <section class="">
        <div class="container">
          <div class="title text-center m-t50">
            <h3 class="primary-text mb-3">Qui sommes nous ?</h3>
            <p class="text-leger">Une équipe, une vision, une passion</p>
          </div>
          
        </div>
      </section>

      <section class="">
          <div class="container">
            <div class="row gx-5">
              <div class="col-lg-7 col-md-12 ">
                <p class="p-b30 why m-t40">
                  Voyage Édifiant est une agence de voyage. <br>
                  Nous proposons la location de véhicules, l’organisation de team buildings et un accompagnement complet pour vos projets de voyage (réservations de billets, assistance visa, conseils...). <br>
                  Mais au-delà des services, nous sommes avant tout des humains, avec un seul objectif : vous offrir le meilleur voyage possible. <br>
                  Notre faiblesse ? On aime ce qu’on fait, et ça se voit dans notre manière de vous servir.  

                </p>
                <div class="title-trait d-flex align-items-center">
                  <div class="d-flex flex-column">
                    <div class="trait1  me-2 mb-1"></div>
                    <div class="trait2 ms-2"></div>
                  </div>
                  <h4 class="secondary-text ms-2">Pourquoi louer avec nous?</h4>
                </div>
                <p class="p-t30 m-l50 why">
                    <i class="fas fa-arrow-right me-2"></i>
                  parce que  nous nous engageons à vous offrir une expérience 
                  de location de véhicule exceptionnelle.
                  Grâce à notre large gamme de véhicules, 
                  vous aurez la possibilité de choisir le modèle qui correspond 
                  parfaitement à vos besoins spécifiques.
                </p>
                <p class="p-t10 m-l50 why">
                    <i class="fas fa-arrow-right me-2"></i>
                  parce que  nous nous engageons à vous offrir une expérience 
                  de location de véhicule exceptionnelle.
                  Grâce à notre large gamme de véhicules, 
                  vous aurez la possibilité de choisir le modèle qui correspond 
                  parfaitement à vos besoins spécifiques.
                </p>
                <div class="title-trait d-flex align-items-center p-t50 p-b40">
                  <div class="d-flex flex-column">
                    <div class="trait1  me-2 mb-1"></div>
                    <div class="trait2 ms-2"></div>
                  </div>
                  <h4 class="secondary-text ms-2">Nos services</h4>
                </div>
                <div class="row p-lr30 gy-4">
                  <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="car p-b10  d-flex align-items-center">
                      <div class="car-image1">
                         <img src="{{ url('assets/front/images/Melya-Plage-Jacqueville_1_BAAB.jpg') }}" alt="">
                      </div>
                      <a href="{{ route('teambuilding') }}" style="text-decoration: none; color: black;">
                        <p style="white-space: nowrap;  font-size: 14px; font-weight: 600;">Team Building</p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="car p-b10  d-flex align-items-center">
                      <div class="car-image1">
                         <img src="{{ url('assets/front/images/car5.png')}}" alt="">
                      </div>
                      <a href="{{ route('locationvehicule') }}" style="text-decoration: none; color: black;">
                        <p style="white-space: nowrap; font-size: 14px; font-weight: 600;">Location de vehicule</p>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="car p-b10  d-flex align-items-center">
                      <div class="car-image1">
                         <img src="{{ url('assets/front/images/agence.jpg')}}" alt="">
                      </div>
                      <a href="{{ route('agence') }}" style="text-decoration: none; color: black;">
                       <p style="white-space: nowrap;  font-size: 14px; font-weight: 600;">Agence de voyage</p>
                      </a>
                      
                    </div>
                  </div>
                </div>
                
              </div>

              <div class="col-md-12 col-lg-5 contenus mb-md-5 mt-md-5 gauche">
                    <div class="cadImages4">
                        <img src="{{ url('assets/front/images/LORAIN.jpg')}}" alt="">
                    </div>
                    <div class="cadImage5 mb-md-5">
                        <img src="{{ url('assets/front/images/voyage.jpg')}}" alt="">
                    </div>
              </div>
            </div>
             
          </div>
      </section>

      <section class="py-5">
        <div class="container ">
          <div class="title text-center ">
            <h3 class="primary-text mb-3">Decouvrez notre équipe</h3>
            <p class="text-leger">Nos chauffeurs sont qualifiés, expérimentés prêt à tout pour vous satisfaire</p>
          </div>
        </div>
      </section>


      <section class="">
        <div class="container px-4">
            <div class="row gx-5 gy-4">
                <div class=" col-sm-6 col-md-6 col-lg-4">
                    <div class="image1 text-center">
                        <div class="cadImage6 mb-3">
                            <img src="{{ url('assets/front/images/chauffeur-1.jpg')}}" alt="">
                            <div class="overlays"></div>
                            <div class="text-name">
                                <h2 class="secondary-text-white" style="white-space: nowrap;">ATTEBI STEPHANE</h2>
                                <p>Chauffeur avec +03 ans d'expériences</p>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="image1 text-center ">
                        <div class="cadImage6 mb-3">
                            <img src="{{ url('assets/front/images/chauffeur-2.jpg')}}" alt="">
                            <div class="overlays"></div>
                            <div class="text-name">
                                <h2 class="secondary-text-white" style="white-space: nowrap;">KOUAKOU MATHURIN</h2>
                                <p>Chauffeur avec +10 ans d'expériences</p>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="image1 text-center">
                        <div class="cadImage6 mb-3">
                            <img src="{{ url('assets/front/images/chauffeur-3.jpg')}}" alt="">
                            <div class="overlays"></div>
                            <div class="text-name">
                                <h2 class="secondary-text-white" style="white-space: nowrap;">KOUABLAN EVRARD</h2>
                                <p>Chauffeur avec +08 ans d'expériences</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </section>

      <section class=" m-b100 " style="background-image: url('{{ url('assets/front/images/bg2.png')  }});">
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

      <section class=" m-b200 p-b150" >
        <div class="container ">
            <div class="title text-center">
                <h3 class="primary-text mb-3">Nos partenaires</h3>
                <p class="text-leger">Ils ont décidé de nous faire confiance</p>
            </div>

            <div class="partens">
                <div class="parten">
                    <img src="{{ url('assets/front/images/P1.png') }}" alt="">
                </div>
                <div class="parten">
                    <img src="{{ url('assets/front/images/P2.png') }}" alt="">
                </div>
                <div class="parten">
                    <img src="{{ url('assets/front/images/P3.png') }}" alt="">
                </div>
                <div class="parten">
                    <img src="{{ url('assets/front/images/P4.png') }}" alt="">
                </div>
                <div class="parten">
                    <img src="{{ url('assets/front/images/P5.png') }}" alt="">
                </div>
            </div>

        
        </div>
      </section>

    </main>

@endsection