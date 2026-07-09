@extends('layouts.app')

@section('hide-global-alert', true)

@section('meta-title')
Réservation de {{ $vehicule->nom }} | Voyage Édifiant Côte d’Ivoire
@endsection

@section('content')
<main>
    <div id="monCarrousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('assets/front/images/bg.jpg')}}" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption">
                    <img src="{{ url('assets/front/images/patern-ve-2.png')}}" alt="" style="height: 50px;">
                    <h2 class="mb-4">Réservez le véhicule {{ $vehicule->nom }}</h2>
                    <p class="mb-4 text-leger-white titrelocat">Veuillez remplir le formulaire ci-dessous pour confirmer votre réservation et voyager en toute sécurité.</p>
                </div>
                <div class="container">
                    <img src="{{ url('assets/front/images/hero-car.png')}}" alt="Voiture" class="car1">
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 m-t100 m-b200">
        <div class="container">
        <!-- Informations du Véhicule (Résumé) -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-10">
                <div class="card shadow-sm border-0 flex-row flex-wrap align-items-center">
                    <div class="col-md-4">
                        <img src="{{ url($vehicule->image) }}" class="img-fluid rounded-start" alt="{{ $vehicule->nom }}">
                    </div>
                    <div class="col-md-8 card-body">
                        <h4 class="card-title">{{ $vehicule->nom }}</h4>
                        <p class="card-text text-muted" style="font-size: 1.2rem; font-weight: bold;">À partir de {{ number_format($vehicule->prix_jour, 0, ',', ' ') }} Fcfa / jour</p>
                        <div class="d-flex flex-wrap text-center gap-3 mt-3">
                            <div><img src="{{ url('assets/front/images/porte.png')}}" style="height: 30px;"><div style="font-size: 0.9rem;">{{ sprintf('%02d', $vehicule->portes) }} Portes</div></div>
                            <div><img src="{{ url('assets/front/images/valise.png')}}" style="height: 30px;"><div style="font-size: 0.9rem;">{{ sprintf('%02d', $vehicule->valises) }} Valises</div></div>
                            <div><img src="{{ url('assets/front/images/siege.png')}}" style="height: 30px;"><div style="font-size: 0.9rem;">{{ sprintf('%02d', $vehicule->sieges) }} Sièges</div></div>
                            <div><img src="{{ url('assets/front/images/gearbox.png')}}" style="height: 30px;"><div style="font-size: 0.9rem;">{{ $vehicule->boite_vitesse }}</div></div>
                            <div><img src="{{ url('assets/front/images/malfunction-indicador.png')}}" style="height: 30px;"><div style="font-size: 0.9rem;">{{ $vehicule->energie }}</div></div>
                            <div><img src="{{ url('assets/front/images/clim.png')}}" style="height: 30px;"><div style="font-size: 0.9rem;">{{ $vehicule->climatisation ? 'Climatisé' : 'Non Climatisé' }}</div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulaire de Réservation -->
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4 p-md-5">
                        <div class="title text-center mb-5">
                            <h3 class="primary-text mb-3">Finaliser votre réservation</h3>
                            <p class="text-leger">Veuillez remplir vos informations pour confirmer la location du véhicule.</p>
                        </div>
                        
                        @include('partials.form-alert')

                        <form method="POST" action="{{ route('reservationvehicules.store') }}" id="reservationForm" class="row g-3">
                            @csrf
                            <input type="hidden" name="vehicule_id" value="{{ $vehicule->id }}">
                            <input type="hidden" name="prix_jour" id="prix_jour" value="{{ $vehicule->prix_jour }}">
                            
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="nom" placeholder="Entrer votre nom" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="prenom" placeholder="Entrer votre prenom" required>
                            </div>
                            <div class="col-md-4">
                                <input type="email" class="form-control" name="email" placeholder="Entrer votre email">
                            </div>
                            <div class="col-md-4">
                                <input type="tel" class="form-control" name="telephone" placeholder="Entrer votre numero de téléphone" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="numero_piece" placeholder="Entrer votre numero de pièce" required>
                            </div>
                            <div class="col-md-4">
                                <input type="time" class="form-control" name="heure_prise_en_charge" title="Heure de prise en charge">
                            </div>
                            <div class="col-md-4">
                                <input type="date" class="form-control" id="date_debut" name="date_debut" placeholder="A partir du 12/11/2025" required title="Date de début" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                            </div>
                            <div class="col-md-4">
                                <input type="date" class="form-control" id="date_fin" name="date_fin" placeholder="jusqu'au 13/11/2025" required title="Date de fin" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="lieu_prise_en_charge" placeholder="Lieu de prise en charge">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="lieu_restitution" placeholder="Lieu de restitution">
                            </div>
                            <div class="col-md-4 d-flex align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="avec_chauffeur" value="1" id="avec_chauffeur">
                                    <label class="form-check-label" for="avec_chauffeur">
                                        Avec chauffeur
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <textarea name="message" class="form-control" rows="3" placeholder="Entrez votre message"></textarea>
                            </div>
                            
                            <div class="col-12 bg-light p-3 rounded mt-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Prix Total Estimé :</h5>
                                    <h4 class="mb-0 text-primary"><span id="prix_total_display">0</span> Fcfa</h4>
                                </div>
                            </div>

                            <div class="col-12 mx-auto mt-4" style="width: fit-content;">
                                <button type="submit" class="btn">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dateDebutInput = document.getElementById('date_debut');
    const dateFinInput = document.getElementById('date_fin');
    const prixJour = parseInt(document.getElementById('prix_jour').value, 10);
    const prixTotalDisplay = document.getElementById('prix_total_display');

    function calculateTotal() {
        if (dateDebutInput.value && dateFinInput.value) {
            const date1 = new Date(dateDebutInput.value);
            const date2 = new Date(dateFinInput.value);
            
            const diffTime = date2 - date1;
            let diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            
            if (diffDays >= 0) {
                diffDays += 1; 
                
                const total = diffDays * prixJour;
                prixTotalDisplay.textContent = new Intl.NumberFormat('fr-FR').format(total);
            } else {
                prixTotalDisplay.textContent = "0";
            }
        } else {
            prixTotalDisplay.textContent = "0";
        }
    }

    dateDebutInput.addEventListener('change', function() {
        if (this.value) {
            dateFinInput.min = this.value;
            if (dateFinInput.value && dateFinInput.value < this.value) {
                dateFinInput.value = this.value;
            }
        }
        calculateTotal();
    });
    dateFinInput.addEventListener('change', calculateTotal);
});
</script>
@endsection
