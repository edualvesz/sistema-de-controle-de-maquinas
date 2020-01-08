@extends('layouts.app')
@section('conteudo')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Cadastrar Máquinas <a href="regiao/create"><button class="btn btn-success">Nova máquina</button></a></h3>
            @include('regiao.search')
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
                    @foreach ($regioes as $regiao)
                        <tr>
                            <td>{{ $regiao->id_unidade}}</td>
                            <td>{{ $regiao->nome}}</td>
                            <td>{{ $regiao->regiao}}</td>
                            <td>{{ $regiao->id_regiao}}</td>
                            <td>
                                <a href="{{URL::action('RegiaoController@edit',$regiao->id_unidade)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$regiao->id_unidade}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
                            </td>
                        </tr>
                        @include('regiao.modal')
                    @endforeach
                </table>
            </div>
            {{$regioes->render()}}
        </div>
    </div>
@stop