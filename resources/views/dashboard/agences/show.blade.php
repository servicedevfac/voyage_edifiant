@extends("layouts.back.app")

@section("content")

<!-- Start Content-->
<div class="container-fluid">
        
    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Voir la reservation</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <ol class="breadcrumb m-0 float-end">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item active">Reservations</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row my-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('agence.index') }}" class="btn btn-soft-danger"> Retourner à la liste</a>
                    <p class="sub-header"></p>

                    <div class="row">
                        <div class="col-md-4">
                            <h5>Nom :</h5> <p>{{ $agence->nom }}</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Prenom :</h5> <p>{{ $agence->prenom }}</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Email :</h5> <p>{{ $agence->email }}</p>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Telephone :</h5> <p>{{ $agence->numero }}</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Pays de residence :</h5> <p>{{ $agence->presidence }}</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Destinataire :</h5> <p>{{ $agence->destination }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <h5>A Partir du :</h5> <p>{{ $agence->apartirdu }}</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Au :</h5> <p>{{ $agence->jusquau }}</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Nombre de jour :</h5> <p>{{ $agence->nbrejour }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <h5>Nombre d'adulte</h5> <p>{{ $agence->nbreadulte }}</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Nombre d'enfant :</h5> <p>{{ $agence->nbrenft }}</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Nombre de bébé :</h5> <p>{{ $agence->nbrebebe }}</p>
                        </div>
                    </div>
                    
                    <h5>Message: </h5> <p>{!! $agence->message !!}</p>
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- container -->

@endsection