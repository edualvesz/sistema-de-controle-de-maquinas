{!!Form::open(array('url'=>'maquina/liberacao', 'method'=>'GET', 'autocomplete'=>'off', 'role'=>'search'))!!}

<div class="form-group">
    <div class="input-group">
        <input type="text" class="form-control" name="searchLiberacao" placeholder="Patrimonio..." value="{{$searchLiberacao}}"> 
        <span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
    </div>
</div>

{{Form::close()}}