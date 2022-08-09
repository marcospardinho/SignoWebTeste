<html lang="pt-br" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teste Signo</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url("../../plugins/fontawesome-free/css/all.min.css") }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ url("../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css") }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ url("../../plugins/toastr/toastr.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url("../../dist/css/adminlte.min.css") }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="shortcut icon" href="https://site.signoweb.com.br/assets/images/favicon/favicon-32x32.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ url("../../dist/css/adminlte.min.css?v=3.2.0") }}">
    <script src=" {{ url("../../plugins/jquery/jquery.min.js") }}"></script>
    <script src="{{ url("../../plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ url("../../dist/js/adminlte.min.js?v=3.2.0") }}"></script>
</head>

<body class="layout-top-nav" style="height: auto;">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Enquetes T</span>
                </a>
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    @if ( auth()->check() )
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('question.index') }}" class="nav-link">Enquetes</a>
                        </li>
                    </ul>
                    @endif

                </div>

                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">


                    <li class="nav-item">
                        @if ( auth()->check() )
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="../../dist/img/user2-160x160.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                            <span class="d-none d-md-inline"> {{ Auth::guard('web')->user()->name }} </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link :href="route('logout')" class="nav-link" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                {{ __('Sair ') }}
                                <i class="fas fa-sign-out-alt"></i>
                            </x-responsive-nav-link>

                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="" class="nav-link">Você é um administrador ? Faça o </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    </li>
                    @endif
                    </li>
                </ul>
            </div>
        </nav>
