@extends("layouts.back.app")

@section('content')

<!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Liste des Decouvertes</h4>
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
                        <a href="{{ route('decouverte.create') }}" class="btn btn-soft-danger"> Ajouter Decouverte</a>
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
                                        <th>Image</th>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($decouvertes as $key => $decouverte)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td><img src="{{ url( $decouverte->imageprincipale ) }}" width="50" height="50"></td>
                                            <td>{{ $decouverte->titre }}</td>
                                            <td><p>{!! Str::limit(strip_tags($decouverte->description), 150) !!}</p></td>
                                            <td>
                                                <a href="{{ route('decouverte.show', $decouverte->id) }}" class="btn btn-primary btn-sm"><i class="mdi mdi-eye"></i></a>
                                                <a href="{{ route('decouverte.edit', $decouverte->id) }}" class="btn btn-success btn-sm"><i class="mdi mdi-file-edit"></i></a>

                                                <form action="{{ route('decouverte.destroy', $decouverte->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette decouverte ?')">
                                                        <i class="mdi mdi-delete"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
    
    <!-- End Page content -->

@endsection