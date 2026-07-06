@extends("layouts.back.app")

@section("content")

<div class="container-fluid">
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Catégories de Véhicules</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                <ol class="breadcrumb m-0 float-end">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item active">Catégories Véhicules</li>
                </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('categories_vehicules.create') }}" class="btn btn-primary mb-3"> Ajouter une catégorie</a>

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Image / Icône</th>
                                    <th>Nom</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $key => $categorie)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>
                                        @if($categorie->image)
                                            <img src="{{ url($categorie->image) }}" alt="{{ $categorie->nom }}" style="max-height: 40px;">
                                        @else
                                            <span class="badge bg-secondary">Aucune image</span>
                                        @endif
                                    </td>
                                    <td>{{ $categorie->nom }}</td>
                                    <td>
                                        <a href="{{ route('categories_vehicules.edit', $categorie->id) }}" class="btn btn-warning btn-sm"><i class="mdi mdi-pencil"></i></a>

                                        <form action="{{ route('categories_vehicules.destroy', $categorie->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ? Tous les véhicules de cette catégorie seront également supprimés.')">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
