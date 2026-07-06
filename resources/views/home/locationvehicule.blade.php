@extends('layouts.app')



@section('meta-title')

Location de voiture avec chauffeur | Voyage Édifiant Côte d’Ivoire

@endsection

@section('meta-description')

Louez une voiture avec chauffeur en toute sécurité pour vos déplacements à Abidjan et partout en Côte d'Ivoire. Service premium, confort et flexibilité.

@endsection

@section('meta-keywords')

location voiture Abidjan, chauffeur privé, transport VIP Côte d'Ivoire, Voyage Édifiant

@endsection

@section('meta-image')

{{ asset('assets/front/images/bg.jpg') }}

@endsection



@section('content')



<main>

    <div id="monCarrousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active">

                <img src="{{ url('assets/front/images/bg.jpg')}}" class="d-block w-100" alt="Slide 1">

                <div class="carousel-caption">

                    <img src="{{ url('assets/front/images/patern-ve-2.png')}}" alt="" style="height: 50px;">

                    <h2 class="mb-4">Louez sans stress, où vous voulez, quand vous voulez</h2>

                    <p class="mb-4 text-leger-white titrelocat">Pour vos cérémonies, déplacements familiaux, voyages d’affaires ou week-ends détente, nous mettons à votre disposition des voitures confortables et des chauffeurs professionnels, pour que vous puissiez voyager en toute sécurité. </p>

                    <a href="#" class="primary-btn">Louez maintenant </a>

                </div>

                <div class="container">

                    <img src="{{ url('assets/front/images/hero-car.png')}}" alt="Voiture" class="car1">

                </div>

            </div>

        </div>

    </div>



    <section class="py-5">

        <div class="container">

            <div class="title text-center">

                <h3 class="primary-text mb-3">Trouvez la voiture parfaite pour tous vos déplacements. </h3>

                <p class="text-leger">Des voitures confortables , sécurisé et adapté pour tous vos déplacements.</p>

            </div>

        </div>

    </section>



    <section class="">

        <div class="container">

            <div class="row gx-5 gy-4">
                @foreach($categories as $categorie)
                <div class="col-6 col-sm-6 col-md-3 col-lg-3" id="bouton{{ $loop->iteration }}">
                    <div class="car2 {{ $loop->first ? 'car-active' : '' }} p-b10 d-flex align-items-center">
                        <div class="car-image">
                            <img src="{{ url($categorie->image) }}" alt="">
                        </div>
                        <p class="normal-text" style="white-space: nowrap;">{{ $categorie->nom }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            @foreach($categories as $categorie)
            <div id="contenu{{ $loop->iteration }}" class="voircontenu" {!! $loop->first ? 'style="display: block;"' : 'style="display: none;"' !!}>
                <div class="row gx-4 gy-4 m-t50">
                    @foreach($categorie->vehicules as $vehicule)
                    <div class=" col-sm-6 col-md-6 col-lg-4" >
                        <div class="first" style="background-color: #f5f5f5; position: relative; width: 100%">
                            <div class="car3 mx-auto d-block">
                                <img src="{{ url($vehicule->image) }}" alt="voiture">
                            </div>
                            <p class="normal-text text-center m-b50 fs-3">{{ $vehicule->nom }}</p>
                            <div class="bass " style="background-color: #F2F2F9; padding: 20px 25px;">
                                <div class="bas d-flex m-t20" style="justify-content: space-between;">
                                    <div class="d-flex option" style="align-items: center;">
                                        <img src="{{ url('assets/front/images/porte.png')}}" class="" alt="" style="height: 30px;">
                                        <p class="text-leger">{{ sprintf('%02d', $vehicule->portes) }} Portes</p>
                                    </div>
                                    <div class="d-flex option" style="align-items: center;">
                                        <img src="{{ url('assets/front/images/valise.png')}}" class="" alt="" style="height: 30px;">
                                        <p class="text-leger">{{ sprintf('%02d', $vehicule->valises) }} Valises</p>
                                    </div>
                                    <div class="d-flex option" style="align-items: center;">
                                        <img src="{{ url('assets/front/images/siege.png')}}" class="" alt="" style="height: 30px;">
                                        <p class="text-leger">{{ sprintf('%02d', $vehicule->sieges) }} Sièges</p>
                                    </div>
                                </div>
                                <div class="bas d-flex m-t30" style="justify-content: space-between;">
                                    <div class="d-flex option" style="align-items: center;">
                                        <img src="{{ url('assets/front/images/gearbox.png')}}" class="" alt="" style="height: 30px;">
                                        <p class="text-leger">{{ $vehicule->boite_vitesse }}</p>
                                    </div>
                                    <div class="d-flex option" style="align-items: center;">
                                        <img src="{{ url('assets/front/images/malfunction-indicador.png')}}" class="" alt="" style="height: 30px;">
                                        <p class="text-leger">{{ $vehicule->energie }}</p>
                                    </div>
                                    <div class="d-flex option" style="align-items: center;">
                                        <img src="{{ url('assets/front/images/clim.png')}}" class="" alt="" style="height: 30px;">
                                        <p class="text-leger">{{ $vehicule->climatisation ? 'Climatisé' : 'Non Climatisé' }}</p>
                                    </div>
                                </div>
                                <div class="mx-auto" style="width: fit-content; white-space: nowrap;">
                                    <a href="{{ route('reservation.vehicule', $vehicule->slug) }}" class="btn m-t30 center">
                                    Réservez maintenant
                                    </a>
                                </div>
                            </div>
                            <div class="price">
                                <p class="normal-text-white fs-5" >À partir de {{ number_format($vehicule->prix_jour, 0, ',', ' ') }} Fcfa</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

      </section>



      <section class="py-5 m-t100">

        <div class="container ">

          <div class="title text-center ">

            <h3 class="primary-text mb-3">Découvrez notre équipe de chauffeurs.</h3>

            <p class="text-leger">Nos chauffeurs sont qualifiés, expérimentés prêts à tout pour vous satisfaire.</p>

          </div>

        </div>

      </section>



      <section class="">

        <div class="container px-4">

            <div class="row gx-5 gy-4">

                <div class="col-md-6 col-lg-4">

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



                <div class="col-md-6 col-lg-4">

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



                <div class="col-md-6 col-lg-4">

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



   

     

      <section class="py-5 m-t100" style="background-image: url('{{ url('assets/front/images/bg1.png')}}');">

        <div class="container ">

          <div class="title text-center ">

            <h3 class="primary-text mb-3">Pourquoi nous faire confiance ?</h3>

            <!-- <p class="text-leger">Envie de découvrir la côte d’Ivoire nous vous montrons les villes qui font de lui un pays de renom</p> -->

          </div>



          <div class="contentCo m-t50">

            <h4 class="primary-text1 m-b20">Nous avons des véhicules propres et bien entretenus</h4>

            <p>

                Nous savons que vous n’aimez pas les mauvaises surprises (véhicules sales, vieux sièges...), c’est pourquoi chaque voiture est soigneusement nettoyée et révisée avant de vous être remise. Vous montez dans une voiture propre et confortable.

            </p>

            <h4 class="primary-text1 m-t30 m-b20">Nos tarifs sont clairs, sans frais cachés</h4>

            <p>
                Chez nous, ce qu’on vous dit, c’est ce que vous payez. Pas de “dépassement imprévu”, pas de frais qu’on découvre à la dernière minute. Vous avez un budget ? On respecte. Et si quelque chose change, on vous prévient d’abord. 
            </p>

            <h4 class="primary-text1 m-t30 m-b20">Ce qui nous caractérise</h4>

            <div class="d-flex m-t30" style=" justify-content: space-around; flex-wrap: wrap; align-items: start;">

                <div class="carac d-flex flex-column align-items-center">

                    <img src="{{ url('assets/front/images/pro.png')}}" alt="profesionnelle" style="height: 40px; width: 40px; margin-bottom: 5px;">

                    <p class="primary-text1" style="text-transform: uppercase; font-size: 16px ;">profesionnalisme</p>

                </div>

                <div class="carac d-flex flex-column align-items-center">

                    <img src="{{ url('assets/front/images/qua.png')}}" alt="profesionnelle" style="height: 40px; width: 40px; margin-bottom: 5px;">

                    <p class="primary-text1" style="text-transform: uppercase; font-size: 16px ;">qualité</p>

                </div>

                <div class="carac d-flex flex-column align-items-center">

                    <img src="{{ url('assets/front/images/effica.png')}}" alt="profesionnelle" style="height: 40px; width: 40px; margin-bottom: 5px;">

                    <p class="primary-text1" style="text-transform: uppercase; font-size: 16px ;">efficacité</p>

                </div>

                <div class="carac d-flex flex-column align-items-center">

                    <img src="{{ url('assets/front/images/fiabil.png')}}" alt="profesionnelle" style="height: 40px; width: 40px; margin-bottom: 5px;">

                    <p class="primary-text1" style="text-transform: uppercase; font-size: 16px ;">fiabilité</p>

                </div>

            </div>

          </div>

        </div>

      </section>



      <section class="p-b150 m-b150 m-t100" style="background-image: url('{{ url('assets/front/images/bg2.png')}}');">

        <div class="container p-t80">

          <div class="title text-center ">

            <h3 class="primary-text mb-3">Ils donnent leur appréciation.</h3>

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



@endsection