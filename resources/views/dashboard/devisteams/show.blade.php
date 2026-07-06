@extends("layouts.back.app")

@section("content")

<!-- Start Content-->
<div class="container-fluid">
        
    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Voir Devis Team Builduing</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <ol class="breadcrumb m-0 float-end">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item active">Devis Team Builduing</li>
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
                    <a href="{{ route('devisteam.index') }}" class="btn btn-soft-danger"> Retourner à la liste</a>
                    <p class="sub-header"></p>

                    <div class="row">
                        <div class="col-md-6">
                            <h5>Nom :</h5> <p>{{ $devisteam->nom }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Prenom :</h5> <p>{{ $devisteam->prenom }}</p>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Email :</h5> <p>{{ $devisteam->email }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Telephone :</h5> <p>{{ $devisteam->telephone }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h5>Profil :</h5> <p>{{ $devisteam->profil }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Type d'activité :</h5> <p>{{ $devisteam->typedactivite }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <h5>Nombre de personne :</h5> <p>{{ $devisteam->nbrepers }}</p>
                        </div>
                        <div class="col-md-4">
                            <h5>A Partir du :</h5> <p>{{ $devisteam->apartir }}</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Jusqu'au :</h5> <p>{{ $devisteam->jusquau }}</p>
                        </div>
                    </div>
                    
                    <h5>Message: </h5> <p>{!! $devisteam->message !!}</p>
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- container -->

@endsection