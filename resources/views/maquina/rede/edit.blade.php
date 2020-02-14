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
            {!!Form::model($rede, ['method'=>'PATCH', 'route'=>['rede.update', $rede->id_maquina]])!!}
            {{Form::token()}}

            <div class="row">

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="patrimonio">Patrimonio</label>
                        <input type="text" name="patrimonio" required value="{{$rede->patrimonio}}" class="form-control" placeholder="Patrimonio..." readonly>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">   <!-- verificar isso depois de truncar as tabelas e refazer as relações-->
                    <div class="form-group">
                        <label for="unidade">Unidade</label>
                        <input type="text" list="uni" name="unidade" required value="{{old('unidade')}}" class="form-control" placeholder="Unidade..." readonly>
                        <datalist id="uni">
                            @foreach($redes as $rede)
                                <option value="{{$rede->unidade}}">
                                    {{$rede->unidade}}
                                </option>    
                            @endforeach
                        </datalist>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input type="text" name="marca" required value="{{$rede->marca}}" class="form-control" placeholder="Marca..." readonly>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="ip">IP</label>
                        <input type="text" name="ip" required value="{{$rede->ip}}" data-mask="00.00.00.000" class="form-control" placeholder="IP...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="mascara">Mascara</label>
                        <input type="text" name="mascara" required value="{{$rede->mascara}}" data-mask="000.000.000.000" class="form-control" placeholder="Mascara...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="gateway">Gateway</label>
                        <input type="text" name="gateway" required value="{{$rede->gateway}}" data-mask="00.00.00.000" class="form-control" placeholder="Gateway...">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                <button class="btn btn-danger btn-sm" onclick='history.go(-1)'>Cancelar</button>
            </div>

            {!!Form::close()!!}

@stop