{!!Form::open(array('url'=>'maquina/rede', 'method'=>'GET', 'autocomplete'=>'off', 'role'=>'search'))!!}

<div class="form-group">
    <div class="input-group">
        <input type="text" class="form-control" name="searchRede" placeholder="Patrimonio..." value="{{$searchRede}}"> 
        <span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
    </div>
</div>

{{Form::close()}}