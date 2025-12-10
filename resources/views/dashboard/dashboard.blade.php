@extends('layouts.back.app')

@section('content')

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Tableau de bord</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                    <ol class="breadcrumb m-0 float-end">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Administration</a></li>
                        <li class="breadcrumb-item active">Tableau de bord</li>
                    </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Reservation Agence</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $NbreReservAgence }}
                                </h2>
                            </div>
                            
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div><!-- end card-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Location de vehicule</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $NbreReservationVehicule }}
                                </h2>
                            </div>
                            
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Reservation Team Building</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $NbreTeambuilding }}
                                </h2>
                            </div>
                            
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Demande de contact</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $totalContact }}
                                </h2>
                            </div>
                            
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 57%;"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Liste Contact</h4>
                        <p class="card-subtitle mb-4 font-size-13">La liste des cinq (5) derniers contact reçus</p>

                        <div class="table-responsive">
                            <table class="table table-centered table-striped table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Profil</th>
                                        <th>Envoyé</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dernierscontact as $key => $contact)
                                    <tr>
                                        <td>{{ $contact->nom }}</td>
                                        <td>{{ $contact->prenom }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->telephone }}</td>
                                        <td>{{ $contact->profil }}</td>
                                        <td>{{ $contact->created_at->locale('fr')->diffForHumans() }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!--end card body-->

                </div>
                <!--end card-->
            </div>
            <!--end col-->

        </div>
        <!--end row-->

    </div> <!-- container -->
    
@endsection  