@extends('layouts.app2')
@section('conteudo')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Informe o patrimônio para obter as informações de rede</h3> 
            @include('maquina.rede.search')<br>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                    <h4>Últimos cadastros</h4>
                        <th>Patrimônio</th>
                        <th>Unidade</th>
                        <th>Marca</th>
                        <th>IP</th>
                        <th>Mascara</th>
                        <th>Gateway</th>
                    </thead>
                    @foreach ($redes as $rede)
                        <tr>
                            <td>{{$rede->patrimonio}}</td>
                            <td>{{$rede->unidade}}</td>
                            <td>{{$rede->marca}}</td>
                            <td>{{$rede->ip}}</td>
                            <td>{{$rede->mascara}}</td>
                            <td>{{$rede->gateway}}</td>
                            <td>
                                <a href="{{URL::action('RedeController@edit',$rede->id_maquina)}}"><button class="btn btn-primary btn-sm">Editar</button></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            {{$redes->render()}} <!-- isso monta a paginação -->
        </div>
    </div>
@stop