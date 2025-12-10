<!DOCTYPE html>
<html lang="fr" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Login | Firme Attou Co</title>
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

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group mb-3">
                                <label class="form-label" for="emailaddress">Adresse Email </label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Entrer votre email" value="{{ old('email') }}" required autofocus autocomplete="username">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary w-100" type="submit"> Lien de réinitialisation du mot de passe par e-mail </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

        
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
















{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
