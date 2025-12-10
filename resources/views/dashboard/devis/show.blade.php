@extends("layouts.back.app")

@section("content")

<!-- Start Content-->
<div class="container-fluid">
        
    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Voir Devis N°{{ $devis->id }}</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <ol class="breadcrumb m-0 float-end">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li>
                        <li class="breadcrumb-item active">Articles</li>
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
                    <p>{{ $devis->nom }}</p>
                    <p>{{ $devis->prenom }}</p>
                    <p>{{ $devis->email }}</p>
                    <p>{{ $devis->telephone }}</p>
                    <p>{{ $devis->centreinteret }}</p>
                    <p>{{ $devis->besoin }}</p>
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- container -->

@endsection