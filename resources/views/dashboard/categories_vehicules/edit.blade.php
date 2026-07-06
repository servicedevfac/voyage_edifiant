@extends("layouts.back.app")

@section("content")

<div class="container-fluid">
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Modifier la Catégorie</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                <ol class="breadcrumb m-0 float-end">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('categories_vehicules.index') }}">Catégories</a></li>
                    <li class="breadcrumb-item active">Modifier</li>
                </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('categories_vehicules.update', $categories_vehicule->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom de la catégorie <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $categories_vehicule->nom) }}" required>
                            @error('nom') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image ou icône (Laisser vide pour conserver l'actuelle)</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            @error('image') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                        </div>

                        @if($categories_vehicule->image)
                            <div class="mb-3">
                                <label class="form-label">Image actuelle :</label><br>
                                <img src="{{ url($categories_vehicule->image) }}" alt="Image" style="max-height: 100px;">
                            </div>
                        @endif

                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        <a href="{{ route('categories_vehicules.index') }}" class="btn btn-secondary">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
