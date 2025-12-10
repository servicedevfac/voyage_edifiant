@extends('layouts.app')

@section('meta-title')
Détails de la découverte | Voyage Édifiant Côte d’Ivoire
@endsection

@section('meta-description')
Toutes les informations sur nos circuits : itinéraires détaillés, activités, photos et conseils pour vivre une expérience inoubliable en Côte d'Ivoire.
@endsection

@section('meta-keywords')
détail excursion Côte d'Ivoire, circuits touristiques, découverte Abidjan, Voyage Édifiant
@endsection

@section('meta-image')
{{ asset($decouverte->imageprincipale) }}
@endsection


@section('content')

<main>
    <div id="monCarrousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay"></div>
                <img src="{{ url($decouverte->imageprincipale) }}" class="d-block w-100" alt="Slide 1">
                <div class="carousel-captions">
                    <h2 class="mb-4 secondary-text-white fs-1">{{ $decouverte->nom_ville }}</h2>
                </div>
            </div> 
        </div>
    </div>

    <section class="">
        <div class="container">
            <div class="title text-center m-t50">
                <h3 class="primary-text mb-3">{{ $decouverte->titre }}</h3>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">

            <div class="row gx-4 gy-5 m-b100">
                <div class="col-md-8 col-lg-8">
                    <p>
                        {!! $decouverte->description !!}
                    </p>
                    <button type="button" class="btn m-t30" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        On vous y emmène
                    </button>
                    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header position-relative justify-content-center" style="border-bottom: none;">
                                    <div class="title text-center" id="staticBackdropLabel">
                                        <h3 class="primary-text mb-3">Demander un devis</h3>
                                    </div>
                                    <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
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
                </div>

                <div class="col-md-4 col-lg-4">
                    @php
                        $images = json_decode($decouverte->imagesecondaire, true);
                    @endphp

                    @if (!empty($images))
                        @foreach ($images as $image)
                            <div class="city-image m-b20">
                                <img src="{{ url($image) }}" alt="Image secondaire" style="width: 100%;">
                            </div>
                        @endforeach
                    @else
                        <p>Aucune image secondaire disponible.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="py-5  m-b300" style="background-image: url('images/bg1.png');">
        <div class="container ">
            <div class="title text-center ">
                <h3 class="primary-text mb-3">Découvrez les endroits qui pourront vous intéresser</h3>
                <p class="text-leger">Parce que de grandes équipes se construisent ensemble, offrez vous un moment unique de partage et de cohésion</p>
            </div>
            <div class="row gx-4 gy-4 m-t50">

                @foreach ($decouverteRecents as $decouverteRecent)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="decouvertes1 p-b30 d-flex justify-content-center align-items-start" style="background-color:#fff;">
                        <div class="carousel-img">
                            <div id="monCarrousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <!-- Image principale -->
                                    <div class="carousel-item active new-image">
                                        <img src="{{ url($decouverteRecent->imageprincipale) }}" class="d-block w-100" alt="Image principale">
                                    </div>

                                    <!-- Images secondaires -->
                                    @foreach(json_decode($decouverteRecent->imagesecondaire, true) as $image)
                                        <div class="carousel-item new-image">
                                            <img src="{{ url($image) }}" class="d-block w-100" alt="Image secondaire">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <h3 class="normal-text m-a20 text-center">{{ $decouverteRecent->titre }}</h3>
                            <p class="text-leger text-justify text-center">{!! Str::limit(strip_tags($decouverteRecent->description), 100) !!}</p>
                        </div>
                        <div class="content">
                            <h3 class="secondary-text-white text-center m-a20">{{ $decouverteRecent->titre }}</h3>
                            <p class="text-leger-white .first-p">
                                {!! Str::limit(strip_tags($decouverteRecent->description), 700) !!}
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
                

                

            </div>
        </div>
    </section>
</main>
@endsection