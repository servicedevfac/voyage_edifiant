@extends("layouts.back.app")

@section("content")
    
    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Modifier Decouverte</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                    <ol class="breadcrumb m-0 float-end">
                        <li class="breadcrumb-item"><a href="">Tableau de bord</a></li>
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
                        <a href="" class="btn btn-soft-danger"> Liste Decouvertes</a>
                        <p class="sub-header"></p>

                        <form action="{{ route('decouverte.update', $decouverte->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf 
                            @method('PUT')

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Titre decouverte</label>
                                    <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" id="titre" value="{{ old('titre', $decouverte->titre) }}"  required>
                                    @error('titre')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="imgdecouverte" class="form-label">Image Principale</label>
                                    <input type="file" name="imgdecouverte" class="form-control @error('imgdecouverte') is-invalid @enderror" id="imgdecouverte">
                                    @error('imgdecouverte')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    @if ($decouverte->imageprincipale)
                                        <div>
                                            <img src="{{ asset($decouverte->imageprincipale) }}" alt="Image actuelle" width="100">
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Nom de la ville</label>
                                    <input type="text" name="nom_ville" class="form-control @error('nom_ville') is-invalid @enderror" id="nom_ville" value="{{ old('nom_ville', $decouverte->nom_ville) }}"required>
                                    @error('nom_ville')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="imgsecondaire" class="form-label">Image Secondaire</label>
                                    <input type="file" name="imgsecondaire[]" class="form-control @error('imgsecondaire') is-invalid @enderror" id="imgsecondaire" multiple>
                                    @error('imgsecondaire')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                            </div>
                            
                            <div class="mb-3">
                                <label for="content" class="form-label">Description</label>
                                <div id="editor" style="height: 300px;">{!! old('content', $decouverte->description) !!}</div>
                                <input type="hidden" name="content" id="content" value="{{ old('content', $decouverte->description) }}">
                                @error('content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-secondary">Soumettre</button>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

    </div> <!-- container -->

@endsection