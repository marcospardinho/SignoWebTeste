@include('layouts.navBar')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <!--<div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Layout</a></li>
                  <li class="breadcrumb-item active">Fixed Layout</li>
                </ol>
              </div> -->
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">



          <div class="card card-primary card-outline">
            <div class="card-body">
              <form class="needs-validation" novalidate id="formVoto" name="formVoto" action="{{ route('questionary.store', $enquete->id_enquete) }}" enctype="multipart/form-data" method="post">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="{{$enquete->id_enquete}}" id="id" name="id">
                <!-- Conteudo da Abas -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <!-- box Padrão -->
                <div class="questions">
                  <p class="card-text">
                    <small>Inicio em: {{\Carbon\Carbon::parse($enquete->inicio)->format('d/m/Y') }} </small>
                    <small style="float: right;"> Término: {{\Carbon\Carbon::parse($enquete->fim)->format('d/m/Y') }} </small>
                  </p>
                  <h5 style="font-size: 22px;">{{$enquete->titulo}}</h5>
                  <p>{{$enquete->descricao}}</p>
                  <br>
                  @foreach($enquete->opcoes as $opcao)
                  @php if(!isset($key)) $key = 0; @endphp
                  <div class="col-sm-12">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input custom-control-input-success custom-control-input-outline" type="radio" value="{{$opcao->id_opcao}}" id="{{$key}}" name="{{$enquete->id_enquete}}" @if($apuracao != null && $apuracao->id_opcao == $opcao->id_opcao) checked @endif @if((now() > $enquete->fim || $enquete->inicio > now()) || ($apuracao != null && $apuracao->count() > 0)) disabled @endif>
                      <label for="{{$key}}" class="custom-control-label">{{$opcao->descricao}}</label>
                    </div>
                  </div>
                  @php $key += 1; @endphp
                  @endforeach
                  <br>
                </div>
                <input style="float: right;" type="submit" value="Enviar Voto" id="submitButton" class="btn px-5 btn-primary" @if((now()> $enquete->fim || $enquete->inicio > now()) || ($apuracao != null && $apuracao->count() > 0)) disabled @endif>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="card-title m-0">Votação em tempo real</h5>
            </div>
            <div class="card-body" id="resultado">
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>


</div>

<script type="text/javascript" src="{{ url('dist/js/ajaxEnquete.js') }}"></script>
@include('layouts.footerClient')