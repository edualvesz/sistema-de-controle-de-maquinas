{!!Form::open(array('url'=>'maquina/reparo', 'method'=>'GET', 'autocomplete'=>'off', 'role'=>'search'))!!}

<div class="form-group">
    <div class="input-group">
        <input type="text" class="form-control" name="searchText" placeholder="Patrimonio ou número de série..." value="{{$searchText}}"> 
        <span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
    </div>
</div>

{{Form::close()}}