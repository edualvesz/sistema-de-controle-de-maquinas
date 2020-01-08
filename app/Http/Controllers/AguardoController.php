<?php

namespace sisManutencao\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use sisMaquina\Aguardo;
use sisMaquina\Http\Requests\AguardoFormRequest;
use DB;

class AguardoController extends Controller
{
    public function __construct(){
        
    }

    public function index(Request $request){

        if($request){
            $query=trim($request->get('searchText'));
            $maquina=DB::table('tb_maquina')
            ->where('situacao', '=', 'OK')
            ->where('condicao', '=', '1')
            ->orderBy('id_maquina', 'desc')
            ->paginate(11);
            return view ('maquina.aguardo.index', ["maquinas"=>$maquina, "searchText"=>$maquina]);
        }

    }
}
