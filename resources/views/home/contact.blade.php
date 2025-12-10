@extends('layouts.app')

@section('meta-title')
Contactez-nous | Voyage Édifiant Côte d’Ivoire
@endsection

@section('meta-description')
Contactez Voyage Édifiant pour organiser vos voyages, réserver un chauffeur ou poser vos questions. Notre équipe est à votre écoute !
@endsection

@section('meta-keywords')
contact Voyage Édifiant, réservation voyage, chauffeur Abidjan, service client Côte d'Ivoire
@endsection

@section('meta-image')
{{ asset('assets/front/images/hero-bg5.png') }}
@endsection


@section('content')

<main>
      <div id="monCarrousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="overlay"></div>
            <img src="{{ url('assets/front/images/hero-bg5.png')}}" class="d-block w-100" alt="Slide 1">
            <div class="carousel-captions">
              <h2 class="mb-4 fs-2 secondary-text-white">Vous avez une question ? Un projet à concrétiser ?</h2>
              <p class="mb-4 text-leger-white titrelocat">Notre équipe est là pour vous écouter, vous conseiller et vous accompagner dans toutes vos démarches. Que ce soit pour une location de voiture, un team building ou l’organisation de votre voyage, nous répondons rapidement et avec plaisir.
              </p>
            </div>
          </div> 
        </div>
      </div>

      <section class="">
        <div class="container">
          <div class="title text-center m-t50">
            <h3 class="primary-text mb-3">Restons en contact ! On papote ?</h3>
            <p class="text-leger">Notre équipe est à votre disposition pour répondre à toutes vos questions et vous accompagner dans votre réservation.</p>
          </div>
          
        </div>
      </section>

      <section class="">
          <div class="container">
            <div class="tout-form">
                <div class="frame m-t20" style="position: relative;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.1209744887447!2d-3.960782!3d5.3985335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc193414d4f26bf%3A0xd9ae1dcffc2ef54b!2sVoyage%20Edifiant!5e0!3m2!1sfr!2sci!4v1749124028618!5m2!1sfr!2sci" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="cadreContact m-b300" style="background-color: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.25); border-radius:10px; padding: 10px 10px;">
                    <div class="title text-center m-t50">
                        <h3 class="primary-text mb-3">A votre écoute !</h3>
                    </div>
                    <div class="formulaire">
                        <div class="row gx-4 gy-4">
                            <div class="col-lg-6">
                                <form class="row g-3 m-b10" action="{{ route('contact.store') }}" method="post" >
                                    @csrf

                                    <div class="col-md-6">
                                        <label for="name">Nom*</label>
                                        <input type="text" class="form-control m-t10" name="nom" id="nom" placeholder="Ex: Konan" style="background-color: #F2F2F9;">
                                        @error('nom')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Prenom*</label>
                                        <input type="text" class="form-control m-t10" id="prenom"  name="prenom" placeholder="Ex: N'da" style="background-color: #F2F2F9;">
                                        @error('prenom')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Email*</label>
                                        <input type="email" class="form-control m-t10" id="email" name="email" placeholder="Ex: nda@gmail.com" style="background-color: #F2F2F9;">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Téléphone*</label>
                                        <input type="tel" class="form-control m-t10" id="telephone" name="telephone" placeholder="Ex: +225 07 14 33 33 10" style="background-color: #F2F2F9;">
                                        @error('telephone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Profil*</label>
                                        <select name="profil" id="profil" class="form-select" style="background-color: #F2F2F9;">
                                            <option selected disabled >Choisir votre profil</option>
                                            <option value="entreprise">Entreprise</option>
                                            <option value="personnel">Personnel</option>
                                        </select>
                                        @error('profil')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Objet*</label>
                                        <input type="text" class="form-control" id="objet" name="objet" placeholder="Team building" style="background-color: #F2F2F9;">
                                        @error('objet')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-12">
                                        <textarea name="message" id="message" class="form-control" placeholder="Entrez votre message" style="background-color: #F2F2F9;"></textarea>
                                        @error('message')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12 " style="width: fit-content;">
                                        <button type="submit" class="btn">Envoyer</button>
                                    </div>
                                </form> 
                            </div>
                            <div class="col-lg-6">
                                <div class="right" style="background-color: #7416C5; height: 100%;">
                                    <h4 class="normal-text-white text-center p-a30">Où nous retrouvez</h4>
                                    <p class="text-leger-white  p-lr10 m-b20">
                                        Besoin de louer un véhicule ou de discuter de votre prochain déplacement ? <br>Passez nous voir, nous sommes tout proches de vous !</p>
                                    <div class="row gx-4 gy-4">
                                        <div class="col-md-6 col-lg-6 d-flex align-items-center ">
                                            <div class="ic m-a10">
                                                <img src="{{ url('assets/front/images/icone1.png')}}" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="normal-text-white">Adresse</p>
                                                <p class="text-leger-white">Angré Nouveau CHU</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 d-flex align-items-center ">
                                            <div class="ic m-a10">
                                                <img src="{{ url('assets/front/images/icone2.png')}}" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="normal-text-white">Email</p>
                                                <p class="text-leger-white">infos@voyagedifiant.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 d-flex align-items-center ">
                                            <div class="ic m-a10">
                                                <img src="{{ url('assets/front/images/icone3.png')}}" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="normal-text-white">Téléphone</p>
                                                <p class="text-leger-white">(+225) 07 07 49 47 72</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 d-flex align-items-center ">
                                            <div class="ic m-a10">
                                                <img src="{{ url('assets/front/images/icone4.png')}}" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="normal-text-white">Horaire</p>
                                                <p class="text-leger-white">Du lundi au vendredi 08H-17H</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 d-flex align-items-center m-t50">
                                            <div class="info m-l10 m-r30">
                                                <p class="normal-text-white">Nos réseaux sociaux</p>
                                            </div>
                                            <div class="ic m-a20">
                                                <a href="https://www.facebook.com/voyageedifiant/" target="_blank" class="m-r10"><img src="{{ url('assets/front/images/facebook_1.png')}}" alt=""></a>
                                                <a href="https://www.tiktok.com/@voyage.edifiant?_t=ZM-8xJVdLmdZDU&_r=1" target="_blank" class="m-r10"><img src="{{ url('assets/front/images/tik1.png')}}" alt=""></a>
                                                <a href="https://www.instagram.com/voyage_edifiant?igsh=dTYxNmYwY2tmamVj" target="_blank" class="m-r10"><img src="{{ url('assets/front/images/insta1.png')}}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
          </div>
      </section>

 

      <section>
        <div class="container questions">
            <div class="title text-center m-b50">
                <h3 class="primary-text mb-3">Vos questions fréquentes </h3>
                <p class="text-leger">Notre équipe est à votre disposition pour répondre à toutes vos questions et vous accompagner dans votre réservation.</p>
            </div>
            <div class="row gx-4 gy-4">
                <div class="col-lg-8">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header normal-text">
                                <button class="accordion-button normal-text" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Quels sont vos horaires de réponse ?
                                    <span class="accordion-icon"></span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Nous sommes disponibles du lundi au vendredi de 8h00 à 17h30, et répondons aussi parfois après 18h en cas d’urgence.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed normal-text" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Est-ce que je peux réserver une voiture en ligne ?
                                <span class="accordion-icon"></span>
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Oui ! Vous pouvez nous contacter via le formulaire ou par téléphone pour réserver votre véhicule. Nous confirmons la disponibilité rapidement. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed normal-text" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Quels types de team building proposez-vous ?
                                <span class="accordion-icon"></span>
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Nous organisons des activités sur mesure : jeux , challenges, ateliers de cohésion, sorties nature, et bien plus selon vos objectifs et votre budget.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed normal-text" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Proposez-vous un accompagnement pour les démarches de visa ?
                                <span class="accordion-icon"></span>
                            </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Oui, notre équipe vous guide et vous accompagne dans la préparation de votre dossier visa, avec des conseils précis adaptés à votre destination. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed normal-text" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Comment obtenir un devis personnalisé ?
                                <span class="accordion-icon"></span>
                            </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Contactez-nous par téléphone ou via le formulaire avec les détails de votre projet, et nous vous envoyons un devis adapté sous 24 à 48h.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cadreImage">
                        <img src="{{ url('assets/front/images/Call-center.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
      </section>

      <section class=" m-b200 m-t150 p-b150" >
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

    </main>



@endsection