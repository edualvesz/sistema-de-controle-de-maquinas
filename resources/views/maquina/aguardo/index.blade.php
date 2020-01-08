@extends('layouts.app')
@section('conteudo')
<h5 class="box-title">Relação de máquinas liberadas</h5>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <!--<h3>Cadastrar Máquinas <a href="reparo/create"><button class="btn btn-success">Nova máquina</button></a></h3>
                @include('maquina.reparo.search')-->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                    <th>Regiao</th>
                    <th>Unidade</th>
                    <th>Marca</th>
                    <th>Patrimônio</th>
                    <th>IP</th>
                    <th>Chegada</th>
                    <th>Situação</th>
                    <th>Problema</th>
                    <th>Técnico</th>
                    <th>Data Liberação</th>
                    <th>Data Envio</th>
                    </thead>
                    @foreach ($maquinas as $maquina)
                        <tr>
                            <td>{{ $maquina->regiao}}</td>
                            <td>{{ $maquina->unidade}}</td>
                            <td>{{ $maquina->marca}}</td>
                            <td>{{ $maquina->patrimonio}}</td>
                            <td>{{ $maquina->ip}}</td>
                            <td>{{ $maquina->data_chegada}}</td>
                            <td>{{ $maquina->situacao}}</td>
                            <td>{{ $maquina->problema}}</td>
                            <td>{{ $maquina->tecnico}}</td>
                            <td>{{ $maquina->liberado_em}}</td>
                            <td>{{ $maquina->enviado_em}}</td>
                            <td>
                                <a href="{{URL::action('MaquinaController@edit',$maquina->id_maquina)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$maquina->id_maquina}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
                            </td>
                        </tr>
                        @include('maquina.reparo.modal')
                    @endforeach
                </table>
            </div>
            {{$maquinas->render()}}
        </div>
    </div>
@stop