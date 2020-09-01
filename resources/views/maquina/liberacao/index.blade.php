@extends('layouts.app2')
@section('conteudo')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Relação de máquinas liberadas</h3> 
            @include('maquina.liberacao.search')<br>
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
                    @foreach ($liberacoes as $liberacao)
                        <tr>
                            <td>{{$liberacao->patrimonio}}</td>
                            <td>{{$liberacao->unidade}}</td>
                            <td>{{$liberacao->marca}}</td>
                            <td>{{$liberacao->ip}}</td>
                            <td>{{$liberacao->mascara}}</td>
                            <td>{{$liberacao->gateway}}</td>
                            <td>
                                <!--<a href="{{URL::action('LiberacaoController@edit',$liberacao->id_maquina)}}"><button class="btn btn-primary btn-sm">Editar</button></a>-->
                            </td>
                        </tr>
                    @endforeach
                </table>
                <a href="#" class="btn btn-danger btn-sm">Imprimir</a>
            </div>
            {{$liberacoes->render()}} <!-- isso monta a paginação -->
        </div>
    </div>
@stop