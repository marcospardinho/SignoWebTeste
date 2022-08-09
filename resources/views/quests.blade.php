@include('layouts.navBar')

<div class="content-wrapper">

    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Hey ! <small>Bem vindo ao Enquetes T .</small></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        @if(!auth()->check())<p class="m-0"> Deseja fazer uma enquete ? <small><a href="{{ route('cadastro') }}"> Cadastre-se</a></small></p>@endif

                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                @if($enquetesAIniciar->count() > 0)
                    <div class="content-header">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h5 class="m-0"> Enquetes a começar:</h5>
                                </div>
                                <div class="col-sm-6">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                    @foreach($enquetesAIniciar as $enquete)
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">{{$enquete->titulo}}</h5>
                            <p class="card-text">
                                <small>A iniciar: {{\Carbon\Carbon::parse($enquete->inicio)->format('d/m/Y') }} </small>
                                <small style="float: right;"> Término: {{\Carbon\Carbon::parse($enquete->fim)->format('d/m/Y') }} </small>
                            </p>
                            <p class="card-text">
                                {{$enquete->descricao}}
                            </p>
                            <a href="{{ route('questionary', $enquete->id_enquete) }}" class="card-link">Votar</a>
                        </div>
                    </div>
                    @endforeach

                    <div class="content-header">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h5 class="m-0"> Enquetes em andamento:</h5>
                                </div>
                                <div class="col-sm-6">
                                </div>
                            </div>
                        </div>
                    </div>
                    @forelse($enquetesEmAndamento as $enquete)
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">{{$enquete->titulo}}</h5>
                            <p class="card-text">
                                <small>Iniciado: {{\Carbon\Carbon::parse($enquete->inicio)->format('d/m/Y') }} </small>
                                <small style="float: right;"> Término: {{\Carbon\Carbon::parse($enquete->fim)->format('d/m/Y') }} </small>
                            </p>
                            <p class="card-text">
                                {{$enquete->descricao}}
                            </p>
                            <a href="{{ route('questionary', $enquete->id_enquete) }}" class="card-link">Votar</a>
                        </div>
                    </div>
                    @empty
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Lista vazia!</h5>
                            <p class="card-text">
                                Seja o primeiro a criar uma enquete !! Torne-se administrador :D
                            </p>
                            <a href="{{ route('cadastro') }}" class="card-link"> Cadastre-se</a>
                        </div>
                    </div>
                    @endforelse

                    @if($enquetesFinalizadas->count() > 0)
                    <div class="content-header">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h5 class="m-0"> Enquetes finalizadas:</h5>
                                </div>
                                <div class="col-sm-6">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @foreach($enquetesFinalizadas as $enquete)
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">{{$enquete->titulo}}</h5>
                            <p class="card-text">
                                <small>Iniciou: {{\Carbon\Carbon::parse($enquete->inicio)->format('d/m/Y') }} </small>
                                <small style="float: right;"> Terminou: {{\Carbon\Carbon::parse($enquete->fim)->format('d/m/Y') }} </small>
                            </p>
                            <p class="card-text">
                                {{$enquete->descricao}}
                            </p>
                            <a href="{{ route('questionary', $enquete->id_enquete) }}" class="card-link">Votar</a>
                        </div>
                    </div>
                    @endforeach

                </div>



                <div class="col-lg-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Ultimas Enquetes</h5>
                        </div>
                        <div class="card-body">
                            @forelse($ultimasEnquetes as $enquete)
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{$enquete->titulo}}</h5>
                                    <p class="card-text">
                                        {{$enquete->descricao}}
                                    </p>
                                    <a href="{{ route('questionary', $enquete->id_enquete) }}" class="card-link">Votar</a>
                                </div>
                            </div>
                            @empty
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Lista vazia!</h5>
                                    <p class="card-text">
                                        Seja o primeiro a criar uma enquete !! Torne-se administrador :D
                                    </p>
                                    <a href="{{ route('cadastro') }}" class="card-link"> Cadastre-se</a>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@include('layouts.footerClient')