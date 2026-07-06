@extends("layouts.back.app")

@section("content")

<!-- Start Content-->
<div class="container-fluid">
        
    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">Liste des devis Team Building</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                <ol class="breadcrumb m-0 float-end">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item active">devis Team Building</li>
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
                                    <th>Profil</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($devisteams as $key => $devisteam)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $devisteam->nom }}</td>
                                    <td>{{ $devisteam->prenom }}</td>
                                    <td>{{ $devisteam->email }}</td>
                                    <td>{{ $devisteam->telephone }}</td>
                                    <td>{{ $devisteam->profil }}</td>
                                    <td>
                                            
                                        <a href="{{ route('devisteam.show', $devisteam->id) }}" class="btn btn-primary btn-sm"><i class="mdi mdi-eye"></i></a>

                                        <form action="{{ route('devisteam.destroy', $devisteam->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce devis?')">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </form>

                                        
                                    </td>
                                </tr>
                                @endforeach

                                {{-- @foreach ($articles as $key => $article)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td><img src="{{ url('/uploads/articles/', $article->image ) }}" width="50" height="50"></td>
                                        <td>{{ $article->titre }}</td>
                                        <td><p>{!! Str::limit(strip_tags($article->contenu), 150) !!}</p></td>
                                        <td>{{ $article->category ? $article->category->titre : 'Aucune catégorie' }}</td>                                        </td>
                                        <td>{{ $article->likes }}</td>
                                        <td>
                                            
                                            <form action="{{ route('articles.toggle', $article->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="activeSwitch{{ $article->id }}" name="active" {{ $article->statut ? 'checked' : '' }} onchange="this.form.submit()">
                                                    <label class="form-check-label" for="activeSwitch{{ $article->id }}">
                                                        {{ $article->statut ? 'Oui' : 'Non' }}
                                                    </label>
                                                </div>
                                            </form>
            
                                              
                                        </td>
                                        <td>
                                            
                                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary btn-sm"><i class="mdi mdi-eye"></i></a>
                                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-success btn-sm"><i class="mdi mdi-file-edit"></i></a>

                                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </form>

                                            
                                        </td>
                                    </tr>
                                @endforeach --}}

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