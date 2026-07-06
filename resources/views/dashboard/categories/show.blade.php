@extends("layouts.back.app")

@section("content")

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Voir les Articles de la categorie "{{ $category->titre }}"</h4>
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
                        
                        <a href="{{ route('categories.index') }}" class="btn btn-soft-danger"> Liste categorie</a>
                        
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
                                        <th>Titre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @forelse ($category->articles as $key => $article)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $article->titre }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2" class="text-center">Aucun article trouvé pour cette catégorie.</td>
                                        </tr>
                                    @endforelse
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