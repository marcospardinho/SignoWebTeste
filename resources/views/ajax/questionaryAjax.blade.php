@foreach ($enquete->opcoes as $opcao)

            <div class="progress-group">
            {{ $opcao->descricao }}
                <span class="float-right"><b>{{$votos->where('id_opcao', $opcao->id_opcao)->count()}}</b>/{{$votos->count()}}</span>
                <div class="progress progress-sm">
                    @php $percent = $votos->where('id_opcao', $opcao->id_opcao)->count() / $votos->count() * 100; @endphp
                    <div class="progress-bar bg-primary" style="width: {{$percent}}%"></div>
                </div>
            </div>

@endforeach                      