<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <style>
            .hide_row {
                padding: 0 !important;
            }
        </style>
        <!-- Main content -->
        <section class="content-header sessTit">
            <div class="container-fluid">
                <div class="row mb-2">
                    <!-- Título -->
                    <div class="col-sm-6">
                        <h1 style="font-size: 25px;">Painel Gerenciador de Enquetes </h1>
                    </div>
                    <!-- Lado Direito -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{ route('dashboard') }}" style="min-width: 95px; margin-right:  5px" type="button" class="btn btn-default btn-sm" title="Voltar"><i class="fas fa-times"></i>
                                Voltar</a>
                            <a href="{{ route('question.create') }}" style="min-width: 95px; margin-right: -7px" form="formUnidade" class='btn bg-primary btn-sm btn-tam'><i class="fas fa-plus"></i>
                                Nova Enquete</a>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Conteudo da Pagina -->
        <section class="content sessMargin">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Enquetes</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Status</th>
                                <th>Opções</th>
                                <th style="width: 40px"></th>
                            </tr>
                        </thead>
                        <tbody>


                            @forelse($enquetes as $enquete)
                            <tr data-toggle="collapse" class="accordion-button collapsed" data-target="#{{ Str::slug($enquete->titulo, '-') }}" class="accordion-toggle">

                                <td>{{$enquete->titulo}}</td>
                                <td>{{$enquete->descricao}}</td>
                                <td>
                                    @if($enquete->fim < now()) <span class="badge badge-danger">A começar/Finalizada</span>
                                        @else
                                        <span class="badge badge-success">Em andamento</span>
                                        @endif
                                </td>
                                <td><span class="badge bg-primary">{{$enquete->opcoes->count()}}</span></td>


                            </tr>
                            <tr>
                                <td class="hide_row" colspan="6">
                                    <div id="{{ Str::slug($enquete->titulo, '-') }}" class="accordian-body collapse">
                                        <table class="table table-sm">

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="{{ route('question.edit',$enquete->id_enquete) }}" style=" margin-top: 0.4cm; margin-right: 0.1cm; " class="btn btn-sm btn-info float-left"><i class="fas fa-pen"></i> Editar</a>
                                                        <a href="#" class="btn btn-sm btn-danger float-left deleteAssembly" data-id="{{$enquete->id_enquete}}" data-toggle="modal" data-target="#mdlExcluirAssembly" style="  margin-top: 0.4cm; margin-right: 0.1cm; "><i class="fas fa-trash-alt"></i> Remover</a>
                                                        <a href="" data-toggle="modal" data-target="#modal-xl" style="  margin-top: 0.4cm; margin-right: 0.1cm; " class="btn btn-sm btn-warning float-left modalEdit" onclick= "getDados(parseInt(<?=$enquete->id_enquete?>))"><i class="fas fa-list-ul"></i> Detalhar Enquete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>

                            @empty
                            <br />
                            <div style='text-align:center'>
                                <h2>Lista vazia!<h2>
                            </div>

                            @endforelse



                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                {{-- <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div> --}}
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->

        <div class="modal fade" id="modal-xl">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detalhar enquete</h4>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body" id="resultado">
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>
        </div>

        <!-- Modal Exclusao de Registro-->
        <div class="modal" id="mdlExcluirAssembly" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <form class="needs-validation" id="formID" action="{{ route('question.destroy') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            @method('DELETE')
                            <input type="hidden" name="id" id="app_id" class="recipient-name">
                            <img class="text-center" src="" width="85px">
                            <br />
                            <span style="font-size: 30px; color: #595959"><b>Exclusão de Enquete</b></span><br />
                            <b style="font-size: 20px" class="text-danger">Ao excluir essa enquete, todos os dados relacionados a ela serão deletados do banco. Você tem certeza que deseja executar essa ação ?</b><br><br>
                            <a style="min-width: 100px; margin-right: 20px" type="button" class="btn btn-default btn-tam" data-dismiss="modal"><i class="fas fa-times"></i> Cancelar</a>
                            <button name="send" id="send" style="min-width: 100px" type='submit' class='btn btn-danger btn-tam'><i class="fas fa-trash-alt"></i> Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /Modal Exclusao de Registro-->

        <script>
            $(document).on('click', '.deleteAssembly', function() {
                var userID = $(this).attr('data-id');
                $('#app_id').val(userID);
                $('#mdlExcluirAssemblyl').modal('show');
            });
        </script>

        @include('sweetalert::alert')
        <script type="text/javascript" src="{{ url('dist/js/ajaxDetalhar.js') }}" ></script>
</x-app-layout>