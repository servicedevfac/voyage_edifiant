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

                    <p><strong>Nom & Prenoms:</strong> {{ $devisvehicule->nom }} {{ $devisvehicule->prenom }}</p>
                    <p><strong>Email:</strong> {{ $devisvehicule->email }}</p>
                    <p><strong>Telephone: </strong>{{ $devisvehicule->numerotel }}</p>
                    <p><strong>N° Piece:</strong> {{ $devisvehicule->numeropiece }}</p>
                    <p><strong>Marque: </strong>{{ $devisvehicule->marque }}</p>
                    <p><strong>Nom du vehicule: </strong>{{ $devisvehicule->nomvehicule }}</p>
                    <p><strong>Date :</strong> {{ $devisvehicule->datedebut }} au {{ $devisvehicule->datefin }}</p>
                    <p><strong>Message: </strong>{{ $devisvehicule->message }}</p>
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- container -->

@endsection