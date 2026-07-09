@extends('layouts.app')

@section('hide-global-alert', true)

@section('meta-title')

Notre agence | Voyage Édifiant Côte d’Ivoire

@endsection

@section('meta-description')

Découvrez notre agence basée en Côte d'Ivoire : expertise locale, passion du voyage et accompagnement personnalisé pour des séjours uniques.

@endsection

@section('meta-keywords')

agence voyage Abidjan, Voyage Édifiant, experts voyages Côte d'Ivoire, accompagnement personnalisé

@endsection

@section('meta-image')

{{ url('assets/front/images/hero-bg4.png')}}

@endsection





@section('content')



<main>

      <div id="monCarrousel" class="carousel slide" data-bs-ride="carousel">

          <div class="carousel-inner">

          <div class="carousel-item active">

              <div class="overlay"></div>

              <img src="{{ url('assets/front/images/hero-bg4.png')}}" class="d-block w-100" alt="Slide 1">

              <div class="carousel-caption">

              <h2 class="mb-4">Voyagez, Explorez, Vivez l'expérience</h2>

              <p class="mb-4 text-leger-white">Chez Voyage Édifiant, on transforme votre projet de voyage en une expérience fluide, simple et sans stress. <br>

                Réservation de billet, assistance visa, hébergement, conseils… <br>

                Vous rêvez de partir, nous vous aidons à y arriver.

              </p>

              <a href="#reserv" class="primary-btn">Planifiez votre aventure</a>

              </div>

          

          </div>

          </div>

      </div>



      <section class="py-5" style="padding-bottom: 0px !important;">

          <div class="container">

              <div class="title text-center">

                  <h3 class="primary-text mb-3">Découvrez notre agence de voyage</h3>

              </div>

          </div>

      </section>



      <section class="">

          <div class="container">

          <div class="row gx-5">

              <div class="col-md-12 col-lg-5 contenus mb-md-5 mt-md-5 gauche">

                  <div class="image13 text-center">

                      <div class="cadImage6 mb-3">

                          <img src="{{ url('assets/front/images/voyage.jpg')}}" alt="">

                      </div>

                  </div>

              </div>

              <div class="col-lg-7 col-md-12 ">

                  <p class="p-b30 why m-t50">

                    Voyager, c’est plus qu’un simple déplacement. C’est souvent un rêve, un besoin d’évasion, une occasion unique de retrouver ses proches, de célébrer un événement, de découvrir de nouveaux horizons, ou encore de gérer des projets importants à l’intérieur du pays ou à l’étranger. 

                    <br>Mais très vite, ce rêve se heurte à la réalité : 

                    <br>Trop de prestataires à contacter : transporteurs, chauffeurs, hôtels, guides, compagnies aériennes…

                    <br>Trop de promesses non tenues, de retards, d’imprécisions ou de mauvaises surprises.

                    <br>Aucune coordination entre les intervenants.

                    <br>Et surtout, aucune assistance réelle en cas de problème.

                    <br>

                    C’est précisément pour répondre à toutes ces frustrations que Voyage Édifiant a été créé. Nous ne sommes pas une simple agence de voyage. 

                  </p>

                  

                  <a href="#reserv" class="primary-btn">Réservez en un clic</a>

              </div>



              

          </div> 

          </div>

      </section>

        



      <section class="py-5 m-t150" style="background-image: url('{{ url('assets/front/images/bg1.png')}}'); position: relative;">

          <div class="container">

            <div class="row gx-5 p-b150">

              <div class="col-lg-4 col-md-12 contenus mb-md-5" style="position: relative;">

                   <div class="image1 text-center">

                        <div class="cadImage6 mb-3">

                            <img src="{{ url('assets/front/images/IMG_9497.jpg')}}" alt="">

                        </div>

                    </div>

                    <div class="image12 text-center">

                        <div class="cadImage6 mb-3">

                            <img src="{{ url('assets/front/images/IMG_9497.jpg')}}" alt="">

                        </div>

                    </div>

              </div>

              <div class="col-lg-8 col-md-12  m-t50">

                <div class="title-trait d-flex align-items-center">

                  <div class="d-flex flex-column">

                    <div class="trait1  me-2 mb-1"></div>

                    <div class="trait2 ms-2"></div>

                  </div>

                  <h4 class="secondary-text fs-5 ms-2">Pourquoi nous confier votre voyage ?</h4>

                </div>

                <p class="p-t30 text-leger">

                  <b class="normal-text">Conseil et assistance personnalisés </b><br><br>

                  Chez Voyage Édifiant, nous savons que chaque voyage est unique. C’est pourquoi nous prenons le temps de vous écouter pour bien comprendre vos motivations, vos besoins et votre budget. Ensuite, nous vous guidons pour choisir la destination idéale, le type de séjour qui vous correspond, ainsi que les activités à privilégier. Notre objectif est de vous aider à construire un voyage qui vous ressemble, agréable et sans mauvaise surprise. 

                </p>

                <p class="p-t30 text-leger">

                  <b class="normal-text">Réservation complète de vos services</b><br><br>

                  Pour que votre voyage se déroule sans accroc, nous gérons pour vous toutes les réservations indispensables : billets d’avion, hôtels, locations de voitures, transferts aéroport, et bien plus encore. En nous confiant cette partie, vous gagnez du temps et évitez le stress des démarches fastidieuses. Nous travaillons avec des partenaires fiables pour vous garantir qualité et sécurité tout au long de votre séjour. 

                </p>

                <p class="p-t30 text-leger">

                  <b class="normal-text">Organisation de circuits et séjours sur mesure</b><br><br>

                  Que vous souhaitiez une expérience totalement personnalisée ou un séjour clé en main, nous concevons pour vous des circuits adaptés à vos envies et contraintes. Cela inclut le transport, l’hébergement, les activités et visites, afin que chaque étape soit pensée pour votre confort et votre plaisir. Grâce à notre expertise locale et internationale, nous vous proposons des itinéraires authentiques et bien organisés pour un voyage réussi de A à Z. 

                </p>

                <p class="p-t30 text-leger">

                  <b class="normal-text">Chez Voyage Édifiant, on transforme votre projet de voyage en une expérience fluide, simple et sans stress. </b><br><br>

                    Réservation de billet, assistance visa, hébergement, conseils … <br>

                    Vous rêvez de partir, nous vous aidons à y arriver.

                </p>

                <div class="m-t30">

                    <a href="#reserv" class="primary-btn">Embarquez maintenant</a>

                </div>

                

              </div>

            </div>

             

          </div>

      </section>



      <section class=" m-t100" >

        <div class="container ">

            <div class="title text-center">

                <h3 class="primary-text mb-3">Nos partenaires</h3>

                <p class="text-leger">Ils ont décidé de nous faire confiance</p>

            </div>



            <div class="partens">

                <div class="parten">

                    <img src="{{ url('assets/front/images/P1.png')}}" alt="">

                </div>

                <div class="parten">

                    <img src="{{ url('assets/front/images/P2.png')}}" alt="">

                </div>

                <div class="parten">

                    <img src="{{ url('assets/front/images/P3.png')}}" alt="">

                </div>

                <div class="parten">

                    <img src="{{ url('assets/front/images/P4.png')}}" alt="">

                </div>

                <div class="parten">

                    <img src="{{ url('assets/front/images/P5.png')}}" alt="">

                </div>

            </div>



        

        </div>

      </section>



      <section class="p-b150 m-b50 m-t100" style="background-image: url('{{ url('assets/front/images/bg2.png')}}');">

        <div class="container p-t80">

          <div class="title text-center ">

            <h3 class="primary-text mb-3">Ils donnent leur appréciation</h3>

            <p class="text-leger">Envie de decouvrir la côte d’Ivoire nous vous montrons les villes qui font de lui un pays de renom</p>

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

                    Merci pour votre sérieux. J’avais un rendez-vous très important avec un investisseur, et je ne voulais rien laisser au hasard , ni le timing, ni le confort, ni l’image que je renvoie. J’ai donc décidé de passer par vous pour louer une voiture avec chauffeur. Franchement, je n’ai pas été déçu. Le chauffeur était ponctuel, courtois, très professionnel. La voiture, propre et bien entretenue, m’a permis d’arriver serein et concentré.

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



       <section class=" m-t50" >

        <div class="container" id="reserv">

            <div class="title text-center m-b50">

                <h3 class="primary-text mb-3">Faire une réservation</h3>

                <p class="text-leger">Confier nous vos voyages puis dormez tranquille</p>

            </div>

            @include('partials.form-alert')

            <form class="row g-3 m-b300" method="POST" action="{{ route('agence.store') }}">

                @csrf

                

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

                    <input type="tel" class="form-control" name="numero" id="numero"  placeholder="Entrer votre numéro de téléphone">

                </div>

                <div class="col-md-4">

                    <input type="text" class="form-control" name="presidence" id="presidence" placeholder="Entrer votre pays de residence">

                </div>

                <div class="col-md-4">

                    <input type="text" class="form-control" name="destination" id="destination" placeholder="Entrer votre destination">

                </div>

                <div class="col-md-4">

                    <input type="text" class="form-control" name="apartirdu" id="dateDebut" placeholder="A partir du 12/11/2025">

                </div>

                <div class="col-md-4">

                    <input type="text" class="form-control" name="jusquau" id="dateFin" placeholder="jusqu'au 13/11/2025">

                </div>

                <div class="col-md-4">

                    <input type="number" name="nbrejour" id="nbrejour" class="form-control" placeholder="Nombre de jour">

                </div>

                <div class="col-md-4">

                    <input type="number" class="form-control" name="nbreadulte" id="nbreadulte" placeholder="Nombre d'adulte">

                </div>

                <div class="col-md-4">

                    <input type="number" class="form-control" name="nbrenft" id="nbrenft" placeholder="Nombre d'enfant">

                </div>

                <div class="col-md-4">

                    <input type="number" class="form-control" name="nbrebebe" id="nbrebebe" placeholder="Nombre de bébé">

                </div>

                <div class="col-12">

                    <textarea name="message" id="message" class="form-control" placeholder="Entrez votre message"></textarea>

                </div>

                <div class="col-12 mx-auto" style="width: fit-content;">

                    <button type="submit" class="btn">Envoyer</button>

                </div>

            </form>             

        </div>

      </section>



    </main>



@endsection