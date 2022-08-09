<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title"></h3>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                    <p class="text-success text-xl">
                        <i class="ion ion-ios-refresh-empty"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                        <span class="font-weight-bold">
                            <i class="ion ion-android-arrow-up text-success"></i> {{$votos->count()}}
                        </span>
                        <span class="text-muted">TOTAL DE VOTOS</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        @foreach ($enquete->opcoes as $opcao)
        @php if($votos->where('id_opcao', $opcao->id_opcao)->count() != 0){ $percent = $votos->where('id_opcao', $opcao->id_opcao)->count() / $votos->count() * 100; } else{ $percent = 0; }@endphp
        <div class="progress-group">
            {{ $opcao->descricao }}
            <span class="float-right"><b>{{$percent}}%</b></span>
            <div class="progress progress-sm">
                <div class="progress-bar bg-primary" style="width: {{$percent}}%"></div>
            </div>
        </div>

        @endforeach
    </div>
</div>