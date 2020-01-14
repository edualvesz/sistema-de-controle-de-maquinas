<?php

namespace sisManutencao\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use sisMaquina\Rede;
use sisManutencao\Http\Requests\RedeFormRequest;
use DB;
use sisManutencao\Rede as SisManutencaoRede;

class RedeController extends Controller
{
    public function construct(){

    }

    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchRede'));
            $redes=DB::table('tb_maquina')
            ->where('patrimonio', 'LIKE', '%'.$query.'%')
            ->where('condicao', '=', '1')
            ->orderBy('id_maquina', 'desc');
            $redes = $redes->get(); //foi necessario por isso pq ele nao estava encontrando a variavel da view
            return view ('maquina.rede.index', ["redes"=>$redes, "searchRede"=>$query]);
        }
    }

    public function create(){
        
    }

    public function store(){
        
    }

    public function show(){

    }

    public function edit(){
        
    }

    public function update(){

    }

    public function destroy(){

    }
}
