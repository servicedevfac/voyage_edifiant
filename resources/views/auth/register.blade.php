<!DOCTYPE html>
<html lang="fr" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>S'Inscrire | Voyage Edifiant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="icon" type="image/png" sizes="48x48" href="{{ url('assets/front/image/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ url('assets/back/css/style.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/back/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{ url('assets/back/assets/js/config.js')}}"></script>
</head>

<body class="bg-primary d-flex justify-content-center align-items-center min-vh-100 p-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-5">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a href="{{ url('/') }}" class="logo-dark">
                                <span><img src="{{ url('assets/front/image/favicon.ico') }}" alt="" height="22"></span>
                            </a>

                            <a href="{{ url('/') }}" class="logo-light">
                                <span><img src="{{ url('assets/front/image/favicon.ico')}}" alt="" height="22"></span>
                            </a>
                        </div>

                        <form method="POST" action="{{ route('login') }}">

                            @csrf

                            <div class="form-group mb-3">
                                <label class="form-label" for="name">Nom Utilisateur </label>
                                <input class="form-control" type="name" id="name" name="name" placeholder="Entrer votre nom utilisateur" value="{{ old('name') }}" required autofocus autocomplete="name">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="emailaddress">Adresse Email </label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Entrer votre email" value="{{ old('email') }}" required autofocus autocomplete="username">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="password">Mot de passe </label>
                                <input class="form-control" type="password" id="password" name="password" required autocomplete="new-password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="password_confirmation">Confirmer mot de passe </label>
                                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                                @error('password_confirmation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary w-100" type="submit"> S'inscrire </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-white-50"> <a href="{{ route('login') }}" class="text-white-50 ms-1">Déjà enregistré ?</a></p>
            
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>

    <!-- App js -->
    <script src="{{ url('assets/back/js/vendor.min.js')}}"></script>
    <script src="{{ url('assets/back/assets/js/app.js')}}"></script>

</body>

</html>