@extends('layouts.app2')
@section('conteudo')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar informações</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </div>
        </div>
            {!!Form::model($maquina, ['method'=>'PATCH', 'route'=>['reparo.update', $maquina->id_maquina]])!!}
            {{Form::token()}}

            <div class="row">

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="regiao">Região</label>
                        <input type="text" name="regiao" required value="{{$maquina->regiao}}" class="form-control" placeholder="Região..." onkeyup="maiuscula(this)">
                        
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">   <!-- verificar isso depois de truncar as tabelas e refazer as relações-->
                    <div class="form-group">
                        <label for="unidade">Unidade</label>
                        <input type="text" list="uni" name="unidade" required value="{{$maquina->unidade}}" class="form-control" placeholder="Unidade..." onkeyup="maiuscula(this)">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input type="text" name="marca" required value="{{$maquina->marca}}" class="form-control" placeholder="Marca..." onkeyup="maiuscula(this)">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="patrimonio">Patrimonio</label>
                        <input type="text" name="patrimonio" required value="{{$maquina->patrimonio}}" class="form-control" placeholder="Patrimonio...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="ip">IP</label>
                        <input type="text" name="ip" value="{{$maquina->ip}}" data-mask="00.00.00.000" class="form-control" placeholder="IP...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="ip">Mascara</label>
                        <input type="text" name="ip" value="{{$maquina->mascara}}" data-mask="000.000.000.000" class="form-control" placeholder="Mascara...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="ip">Gateway</label>
                        <input type="text" name="ip" value="{{$maquina->gateway}}" data-mask="00.00.00.000" class="form-control" placeholder="Gateway...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="chegada">Chegada</label>
                        <input type="text" name="data_chegada" value="{{$maquina->data_chegada}}" data-mask="00/00/0000" class="form-control" placeholder="Chegada...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="situacao">Situação</label>
                        <input type="text" name="situacao" value="{{$maquina->situacao}}" class="form-control" placeholder="Situação..." onkeyup="maiuscula(this)">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="problema">Problema</label>
                        <input type="text" name="problema" value="{{$maquina->problema}}" class="form-control" placeholder="Problema...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="tecnico">Técnico</label>
                        <input type="text" name="tecnico" value="{{$maquina->tecnico}}" class="form-control" placeholder="Técnico..." readonly onkeyup="maiuscula(this)">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="libera">Data de Liberação</label>
                        <input type="text" name="liberado_em" value="{{$maquina->liberado_em}}" data-mask="00/00/0000" class="form-control" placeholder="Data de liberação...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="envio">Data de envio</label>
                        <input type="text" name="enviado_em" value="{{$maquina->enviado_em}}" data-mask="00/00/0000" class="form-control" placeholder="Data de envio...">
                    </div>
                </div>

            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                <button class="btn btn-danger btn-sm" onclick='history.go(-1)'>Cancelar</button>
            </div>

            {!!Form::close()!!}

@stop