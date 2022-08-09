<!doctype html>
<html lang="en">
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

    <title>Login</title>
  </head>
  <body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3><strong>Teste Signo Web</strong></h3>
            <p class="mb-4">Faça login o para acessar as enquetes.</p>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
              @csrf

              <input type="hidden" name="email" value="{{$email}}">
              <div class="form-group last mb-3">
                <label for="password">Agora, informe sua senha:</label>
                <input type="password" class="form-control" placeholder="Digite sua senha" id="password" name="password" required="true">
              </div>
              <div class="d-flex mb-5 align-items-center">
              <p class="mb-4">Senha Teste: <b>12345678</b></p>
              </div>

              <input type="submit" value="Entrar" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>

  @include('sweetalert::alert')
  <script src="{{ url('dist/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ url('dist/js/popper.min.js') }}"></script>
  <script src="{{ url('dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('dist/js/mainLogin.js') }}"></script>
  </body>
</html>
