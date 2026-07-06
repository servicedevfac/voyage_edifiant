@extends("layouts.back.app")

@section("content")

<!-- Start Content-->
<div class="container-fluid">
        
    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Voir Contact</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <ol class="breadcrumb m-0 float-end">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item active">Contacts</li>
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
                    <a href="{{ route('contact.index') }}" class="btn btn-soft-danger"> Retourner à la liste</a>
                    <p class="sub-header"></p>

                    <div class="row">
                        <div class="col-md-6">
                            <h5>Nom :</h5> <p>{{ $contact->nom }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Prenom :</h5> <p>{{ $contact->prenom }}</p>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Email :</h5> <p>{{ $contact->email }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Telephone :</h5> <p>{{ $contact->telephone }}</p>
                        </div>
                    </div>
                    
                    <h5>Profil :</h5> <p>{{ $contact->profil }}</p>
                    <h5>Objet :</h5> <p>{{ $contact->objet }}</p>
                    <h5>Message: </h5> <p>{!! $contact->message !!}</p>
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- container -->

@endsection