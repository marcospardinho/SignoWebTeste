
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ url('dist/css/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ url('dist/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('dist/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ url('dist/css/styleLogin.css') }}">

    <title>Redefinir Senha</title>
  </head>
  <body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3><strong>Rápido Park</strong></h3>
            <p class="mb-4">Defina uma nova senha:</p>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form  method="POST" action="{{ route('password.update') }}">
            @csrf

                <!-- Password Reset Token -->
              <input type="hidden" name="token" value="{{ $request->route('token') }}">

              <div class="form-group first">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Email" id="email" value="{{ old('email',$request->email) }}" name="email" required="true">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" placeholder="Digite sua senha" id="password" name="password" required="true">
              </div>
              <div class="form-group last mb-3">
                <label for="password_confirmation">Confirmar senha:</label>
                <input type="password" class="form-control" placeholder="Digite sua senha novamente" id="password_confirmation" name="password_confirmation" required="true">
              </div>
              <input type="submit" value="Enviar" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>


  <script src="{{ url('dist/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ url('dist/js/popper.min.js') }}"></script>
  <script src="{{ url('dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('dist/js/mainLogin.js') }}"></script>
   @include('sweetalert::alert')
  </body>
</html>

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
