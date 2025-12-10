@extends("layouts.back.app")

@section("content")

<!-- Start Content-->
<div class="container-fluid">
        
    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Voir La decouverte N°{{ $decouverte->id }}</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <ol class="breadcrumb m-0 float-end">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li>
                        <li class="breadcrumb-item active">Decouvertes</li>
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
                    <p>{{ $decouverte->nom_ville }}</p>
                    <p>{{ $decouverte->titre }}</p>
                    <p><img src="{{ url( $decouverte->imageprincipale ) }}" alt=""></p>
                    <p>{!! $decouverte->description !!}</p>
                    <p>

                        @if ($decouverte->imagesecondaire)
                            @php
                                $plusieursimgs = json_decode($decouverte->imagesecondaire);
                            @endphp
        
                            @if (count($plusieursimgs) > 0)
                                @foreach ($plusieursimgs as $image)

                                    <img src="{{ url( $decouverte->imagesecondaire ) }}" alt="">
                                
                                @endforeach
                            @else
                                <p>Aucune image disponible pour cet bien.</p>
                            @endif
                         @else
                            <p>Aucune image disponible pour cet bien.</p>
                        @endif 

                    </p>
                    {{-- <p><img src="{{ url( $decouverte->imagesecondaire ) }}" alt=""> </p> --}}
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- container -->

@endsection