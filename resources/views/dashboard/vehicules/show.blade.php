@extends("layouts.back.app")

@section("content")

<!-- Start Content-->
<div class="container-fluid">
        
    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Devis N°{{ $devisvehicule->id }}</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <ol class="breadcrumb m-0 float-end">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item active">Reservation vehicule</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('vehicule.index') }}" class="btn btn-soft-danger"> Liste des reservations vehicule</a>
                    <p class="sub-header"></p>

<<<<<<< HEAD
                    <p><strong>Nom & Prenoms:</strong> {{ $devisvehicule->nom }} {{ $devisvehicule->prenom }}</p>
                    <p><strong>Email:</strong> {{ $devisvehicule->email }}</p>
                    <p><strong>Telephone: </strong>{{ $devisvehicule->numerotel }}</p>
                    <p><strong>N° Piece:</strong> {{ $devisvehicule->numeropiece }}</p>
                    <p><strong>Marque: </strong>{{ $devisvehicule->marque }}</p>
                    <p><strong>Nom du vehicule: </strong>{{ $devisvehicule->nomvehicule }}</p>
                    <p><strong>Date :</strong> {{ $devisvehicule->datedebut }} au {{ $devisvehicule->datefin }}</p>
                    <p><strong>Message: </strong>{{ $devisvehicule->message }}</p>
=======
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="mt-4">Informations Client</h5>
                            <p><strong>Nom & Prenoms:</strong> {{ $devisvehicule->nom }} {{ $devisvehicule->prenom }}</p>
                            <p><strong>Email:</strong> {{ $devisvehicule->email }}</p>
                            <p><strong>Telephone: </strong>{{ $devisvehicule->numerotel }}</p>
                            <p><strong>N° Piece:</strong> {{ $devisvehicule->numeropiece }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="mt-4">Informations Réservation</h5>
                            <p><strong>Véhicule lié: </strong>{{ $devisvehicule->vehicule ? $devisvehicule->vehicule->nom : ($devisvehicule->nomvehicule ?? 'N/A') }}</p>
                            <p><strong>Statut: </strong>
                                @if($devisvehicule->statut == 'en_attente')
                                    <span class="badge bg-warning">En attente</span>
                                @elseif($devisvehicule->statut == 'confirme')
                                    <span class="badge bg-success">Confirmé</span>
                                @elseif($devisvehicule->statut == 'annule')
                                    <span class="badge bg-danger">Annulé</span>
                                @else
                                    <span class="badge bg-secondary">{{ $devisvehicule->statut }}</span>
                                @endif
                            </p>
                            <p><strong>Prix Total: </strong>{{ $devisvehicule->prix_total ? number_format($devisvehicule->prix_total, 0, ',', ' ') . ' Fcfa' : 'N/A' }}</p>
                            <p><strong>Date:</strong> Du {{ $devisvehicule->datedebut }} au {{ $devisvehicule->datefin }}</p>
                            <p><strong>Heure de prise en charge: </strong>{{ $devisvehicule->heure_prise_en_charge ?? 'Non précisé' }}</p>
                            <p><strong>Lieu de prise en charge: </strong>{{ $devisvehicule->lieu_prise_en_charge ?? 'Non précisé' }}</p>
                            <p><strong>Lieu de restitution: </strong>{{ $devisvehicule->lieu_restitution ?? 'Non précisé' }}</p>
                            <p><strong>Option chauffeur: </strong>{{ $devisvehicule->avec_chauffeur ? 'Oui' : 'Non' }}</p>
                        </div>
                    </div>
                    
                    <h5 class="mt-4">Message / Remarques</h5>
                    <div class="p-3 bg-light rounded">
                        <p class="mb-0">{{ $devisvehicule->message ?: 'Aucun message.' }}</p>
                    </div>
>>>>>>> djuedev
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- container -->

@endsection