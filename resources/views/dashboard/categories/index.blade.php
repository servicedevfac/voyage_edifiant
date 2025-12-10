@extends("layouts.back.app")

@section("content")

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Liste Categories</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                    <ol class="breadcrumb m-0 float-end">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li>
                        <li class="breadcrumb-item active">Categories</li>
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
                        
                        <a href="{{ route('categories.create') }}" class="btn btn-soft-danger"> Ajouter une categorie</a>
                        
                        <p class="sub-header"></p>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($categories->isEmpty())
                                        <tr>
                                            <td colspan="4" class="text-center">Aucune categorie disponible</td>
                                        </tr>
                                    @else
                                        @foreach ($categories as $key => $categorie)
                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td>{{ $categorie->titre }}</td>
                                                <td>
                                                    @if(empty($categorie->description))
                                                        <b>Aucune description disponible</b>
                                                    @else
                                                        {{ $categorie->description }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="{{ route('categories.show', $categorie->id) }}"><i class="mdi mdi-eye"></i></a>
                                                    <a class="btn btn-success btn-sm" href="{{ route('categories.edit', $categorie->id) }}"><i class="mdi mdi-file-edit"></i></a>
                                                    <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?');">
                                                            <i class="mdi mdi-delete"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->

@endsection