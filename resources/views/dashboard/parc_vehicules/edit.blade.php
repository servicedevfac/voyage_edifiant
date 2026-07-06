@extends("layouts.back.app")

@section("content")

<div class="container-fluid">
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Modifier le Véhicule</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                <ol class="breadcrumb m-0 float-end">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('parc_vehicules.index') }}">Parc Automobile</a></li>
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
                    <form action="{{ route('parc_vehicules.update', $parc_vehicule->slug) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nom" class="form-label">Nom du véhicule (ex: Suzuki Dzire) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $parc_vehicule->nom) }}" required>
                                @error('nom') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="categorie_vehicule_id" class="form-label">Catégorie <span class="text-danger">*</span></label>
                                <select class="form-select" id="categorie_vehicule_id" name="categorie_vehicule_id" required>
                                    <option value="" disabled>Choisir une catégorie</option>
                                    @foreach($categories as $categorie)
                                        <option value="{{ $categorie->id }}" {{ old('categorie_vehicule_id', $parc_vehicule->categorie_vehicule_id) == $categorie->id ? 'selected' : '' }}>{{ $categorie->nom }}</option>
                                    @endforeach
                                </select>
                                @error('categorie_vehicule_id') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="portes" class="form-label">Nombre de portes</label>
                                <input type="number" class="form-control" id="portes" name="portes" value="{{ old('portes', $parc_vehicule->portes) }}" min="1">
                                @error('portes') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="valises" class="form-label">Nombre de valises</label>
                                <input type="number" class="form-control" id="valises" name="valises" value="{{ old('valises', $parc_vehicule->valises) }}" min="0">
                                @error('valises') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="sieges" class="form-label">Nombre de sièges</label>
                                <input type="number" class="form-control" id="sieges" name="sieges" value="{{ old('sieges', $parc_vehicule->sieges) }}" min="1">
                                @error('sieges') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="boite_vitesse" class="form-label">Boîte de vitesse</label>
                                <select class="form-select" id="boite_vitesse" name="boite_vitesse">
                                    <option value="Manuelle" {{ old('boite_vitesse', $parc_vehicule->boite_vitesse) == 'Manuelle' ? 'selected' : '' }}>Manuelle</option>
                                    <option value="Automatique" {{ old('boite_vitesse', $parc_vehicule->boite_vitesse) == 'Automatique' ? 'selected' : '' }}>Automatique</option>
                                </select>
                                @error('boite_vitesse') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="energie" class="form-label">Énergie</label>
                                <select class="form-select" id="energie" name="energie">
                                    <option value="Essence" {{ old('energie', $parc_vehicule->energie) == 'Essence' ? 'selected' : '' }}>Essence</option>
                                    <option value="Diesel" {{ old('energie', $parc_vehicule->energie) == 'Diesel' ? 'selected' : '' }}>Diesel</option>
                                    <option value="Hybride" {{ old('energie', $parc_vehicule->energie) == 'Hybride' ? 'selected' : '' }}>Hybride</option>
                                    <option value="Electrique" {{ old('energie', $parc_vehicule->energie) == 'Electrique' ? 'selected' : '' }}>Électrique</option>
                                </select>
                                @error('energie') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="prix_jour" class="form-label">Prix par jour (FCFA) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="prix_jour" name="prix_jour" value="{{ old('prix_jour', $parc_vehicule->prix_jour) }}" min="0" required>
                                @error('prix_jour') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="image" class="form-label">Image du véhicule (Laisser vide pour conserver l'actuelle)</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                @error('image') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        @if($parc_vehicule->image)
                            <div class="mb-3">
                                <label class="form-label">Image actuelle :</label><br>
                                <img src="{{ url($parc_vehicule->image) }}" alt="Image" style="max-height: 100px;">
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="climatisation" name="climatisation" value="1" {{ old('climatisation', $parc_vehicule->climatisation) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="climatisation">Climatisation incluse</label>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="statut" name="statut" value="1" {{ old('statut', $parc_vehicule->statut) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statut">Véhicule Actif (Visible sur le site)</label>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Mettre à jour</button>
                        <a href="{{ route('parc_vehicules.index') }}" class="btn btn-secondary mt-3">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
