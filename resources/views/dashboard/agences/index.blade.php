@extends("layouts.back.app")

@section("content")

<!-- Start Content-->
<div class="container-fluid">
        
    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Liste des reservations de l'agence</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                <ol class="breadcrumb m-0 float-end">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item active">Agence Reservation</li>
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
                    {{-- <a href="" class="btn btn-soft-danger"> Ajouter Article</a> --}}
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
                                    <th>Prenom</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Pays residence</th>
                                    <th>destination</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($agences as $key => $agence)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $agence->nom }}</td>
                                    <td>{{ $agence->prenom }}</td>
                                    <td>{{ $agence->email }}</td>
                                    <td>{{ $agence->numero }}</td>
                                    <td>{{ $agence->presidence }}</td>
                                    <td>{{ $agence->destination }}</td>
                                    <td>
                                            
                                        <a href="{{ route('agence.show', $agence->id) }}" class="btn btn-primary btn-sm"><i class="mdi mdi-eye"></i></a>

                                        <form action="{{ route('agence.destroy', $agence->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette reservation ?')">
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