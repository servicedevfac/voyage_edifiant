@extends("layouts.back.app")

@section("content")

<!-- Start Content-->
<div class="container-fluid">
        
    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Reservation vehicule</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                <ol class="breadcrumb m-0 float-end">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item active">Reservation vehicule</li>
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
                    {{-- <a href="{{ route('vehicule.create') }}" class="btn btn-soft-danger"> Ajouter Vehicule</a> --}}
                    <p class="sub-header"></p>


                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Nom & Prenom</th>
                                    <th>Email</th>
                                    <th>N° Telephone</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($reservationvehicule->isEmpty())
                                    <tr>
                                        <td colspan="4" class="text-center">Aucune reservation disponible</td>
                                    </tr>
                                @else
                                    @foreach ($reservationvehicule as $key=>$rv)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $rv->nom }} {{ $rv->prenom }}</td>
                                            <td>{{ $rv->email }}</td>
                                            <td>{{ $rv->numerotel }}</td>
                                            <td>{{ $rv->datedebut }} au {{ $rv->datefin }}</td>
                                            <td>
                                                <a href="{{ route('vehicule.show', $rv->id) }}" class="btn btn-primary btn-sm"><i class="mdi mdi-eye"></i></a>

                                                <form action="{{ route('vehicule.destroy', $rv->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    
                                                    <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette reservation ?')">
                                                        <i class="mdi mdi-delete"></i>
                                                    </button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> 
        </div>
    </div>
   
    
</div> 

<!-- End Page content -->
@endsection