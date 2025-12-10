@extends("layouts.back.app")

@section("content")
    
    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Ajouter Team Building</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                    <ol class="breadcrumb m-0 float-end">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li>
                        <li class="breadcrumb-item active">Team Building</li>
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
                        <a href="" class="btn btn-soft-danger"> Liste Team Building</a>
                        <p class="sub-header"></p>

                        <form action="{{ route('team_building.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf 

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Titre Team Building</label>
                                    <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" id="titre" placeholder="Ajouter un titre" required>
                                    @error('titre')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="imgs" class="form-label">Upload Images</label>
                                    <input type="file" name="imgs[]" class="form-control @error('imgs') is-invalid @enderror" id="imgs" multiple>
                                    @error('imgs')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="nom_lieu" class="form-label">Nom du lieu</label>
                                    <input type="text" name="nom_lieu" class="form-control @error('nom_lieu') is-invalid @enderror" id="nom_lieu" placeholder="Ajouter le nom du lieu" required>
                                    @error('nom_lieu')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="activites" class="form-label">Choisissez vos activités <br>
                                        <input type="checkbox" name="activites[]" value="piscine"> Piscine<br>
                                        <input type="checkbox" name="activites[]" value="Tir à la carabine"> Tir à la carabine<br>
                                        <input type="checkbox" name="activites[]" value="Velo"> Velo<br>
                                        <input type="checkbox" name="activites[]" value="Maracana"> Maracana <br>
                                        <input type="checkbox" name="activites[]" value="Trampoline"> Trampoline <br>
                                        <input type="checkbox" name="activites[]" value="Jeu de societe traditionnel "> Jeu de societe traditionnel <br>
                                        <input type="checkbox" name="activites[]" value="Autres"> Autres
                                    </label>
                                </div>
                                
                            </div>
                            
                            <div class="mb-3">
                                <label for="content" class="form-label">Courte Description</label>
                                <div id="editor" style="height: 300px;"></div>
                                <input type="hidden" name="content" id="content">
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