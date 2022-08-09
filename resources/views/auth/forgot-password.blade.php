
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
            <p class="mb-4">Esqueceu sua senha? Informe seu Email para redefinir</p>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form  method="POST" action="{{ route('password.email') }}">
            @csrf

              <div class="form-group first">
                <label for="email">Informe seu Email</label>
                <input type="email" class="form-control" placeholder="Email" id="email" value="{{ old('email') }}" name="email" required="true">
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
