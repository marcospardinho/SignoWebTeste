<x-app-layout>
    <x-slot name="header">
    <script src="{{ url("../../dist/js/questionScript.js") }}"></script>
    </x-slot>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content-header sessTit">
            <div class="container-fluid">
                <div class="row mb-2">
                    <!-- Título -->
                    <div class="col-sm-6">
                        <h1 style="font-size: 25px;">Editar Enquete </h1>
                    </div>
                    <!-- Lado Direito -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{ url()->previous() }}" style="min-width: 95px; margin-right:  5px"
                                type="button" class="btn btn-default btn-sm" title="Voltar"><i
                                    class="fas fa-times"></i>
                                Cancelar</a>
                            <button style="min-width: 95px; margin-right: -7px" type='submit' form="formQuestion"
                                class='btn bg-primary btn-sm btn-tam'><i class="fas fa-check"></i> Salvar</button>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Conteudo da Pagina -->
        <section class="content sessMargin">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('question.update',$question->id_enquete)}}" id="formQuestion" enctype="multipart/form-data" method="post">
                        @method('PUT')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        

                        <div class="sub-doc">
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="ndoc">Título da Enquete</label>
                                    <input type="text" class="form-control" id="inputName" name="titulo_enquete" value="{{$question->titulo}}" required='true' placeholder="Digite o título da enquete" />
                                </div>
                                
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="ndoc">Descrição da Enquete</label>
                                <textarea id="inputDescription" name="descricao"  value="{{$question->descricao}}" class="form-control" rows="4">{{$question->descricao}}</textarea>

                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Data de início</label>
                                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                    <input type="text" id="dtinicio" name="dtinicio" value="{{ $question->inicio }}" class="form-control datetimepicker-input" data-target="#reservationdatetime" />
                                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Data do término</label>
                                <div class="input-group date" id="reservationdatetime2" data-target-input="nearest">
                                    <input type="text" id="dttermino" name="dttermino" value="{{ $question->fim }}" class="form-control datetimepicker-input" data-target="#reservationdatetime2" />
                                    <div class="input-group-append" data-target="#reservationdatetime2" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="inputPassword3">Quantidade de opções para resposta?</label>
                            <select name="quantidade_respostas" class="form-control custom-select"
                                id="quantidade-respostas" required="true">
                                <option value="">Selecione..</option>
                                <option @if ($question->opcoes->count() == 2) selected  @endif>2</option>
                                <option @if ($question->opcoes->count() == 3) selected  @endif>3</option>
                                <option @if ($question->opcoes->count() == 4) selected  @endif>4</option>
                                <option @if ($question->opcoes->count() == 5) selected  @endif>5</option>
                                <option @if ($question->opcoes->count() == 6) selected  @endif>6</option>
                            </select>
                        </div>
                        <div id="conteudo-respostas">
                            @if ($question->opcoes->count() > 0)
                            @foreach ($question->opcoes as $item)
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="resposta[]" value="{{$item->descricao}}" required="true" placeholder="Escreva qual vai ser a resposta da enquete Ps: Máximo de 50 caracteres" maxlength="50">
                                </div>
                            </div>

                            @endforeach

                            @endif

                        </div>



                        <!-- /.card-body -->
                    </form>

                </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->





</x-app-layout>
