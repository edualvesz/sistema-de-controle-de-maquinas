@extends('layouts.app2')
@section('conteudo')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nova Máquina</h3>
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
            {!!Form::open(array('url'=>'maquina/reparo','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

            <div class="row">

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="regiao">Região</label>
                        <!--<input type="text" name="regiao" required value="{{old('regiao')}}" class="form-control" placeholder="Região...">-->
                            <select name="regiao" id="" class="form-control">
                                <option value=""></option>
                                <option value="">CAPITAL</option>
                                <option value="">CENTRAL</option>
                                <option value="">NOROESTE</option>
                                <option value="">OESTE</option>
                                <option value="">VALE E LITORAL</option>
                            </select>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="unidade">Unidade</label>
                        <input type="text" list="uni" name="unidade" required value="{{old('unidade')}}" class="form-control" placeholder="Unidade...">
                        <datalist id="uni">
                            @foreach($maquinas as $maq)
                                <option value="{{$maq->unidade}}">
                                    {{$maq->unidade}}
                                </option>    
                            @endforeach
                        </datalist>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <!--<input type="text" list="mar" name="marca" required value="{{old('marca')}}" class="form-control" placeholder="Marca...">-->
                        <select name="marca" id="" class="form-control">
                            <option value=""></option>
                            <option value="">DATEN</option>
                            <option value="">DELL</option>
                            <option value="">HP</option>
                            <option value="">INTELLIGENCY</option>
                            <option value="">ITAUTEC</option>
                            <option value="">LENOVO</option>
                            <option value="">LG</option>
                            <option value="">MTEK</option>
                            <option value="">NÃO IDENTIFICADO</option>
                            <option value="">ORO</option>
                            <option value="">POSITIVO</option>
                            <option value="">SEM MARCA</option>
                            <option value="">SEMP TOSHIBA</option>
                            <option value="">VAIP</option>
                            <option value="">XTA</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="patrimonio">Patrimonio</label>
                        <input type="text" name="patrimonio" required value="{{old('patrimonio')}}" class="form-control" placeholder="Patrimonio...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="ip">IP</label>
                        <input type="text" name="ip" id="ip" data-mask="00.00.00.000" class="form-control" placeholder="IP...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="chegada">Chegada</label>
                        <input type="text" name="data_chegada" data-mask="00/00/0000" class="form-control" placeholder="Chegada...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="situacao">Situação</label>
                        <input type="text" name="situacao" class="form-control" placeholder="Situação...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="problema">Problema</label>
                        <input type="text" name="problema" class="form-control" placeholder="Problema...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="tecnico">Técnico</label>
                        <input type="text" name="tecnico" class="form-control" placeholder="Técnico...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="libera">Data de Liberação</label>
                        <input type="text" name="liberado_em" data-mask="00/00/0000" class="form-control" placeholder="Data de liberação...">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="envio">Data de envio</label>
                        <input type="text" name="enviado_em" data-mask="00/00/0000" class="form-control" placeholder="Data de envio...">
                    </div>
                </div>

            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                <button class="btn btn-danger btn-sm" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}

@stop