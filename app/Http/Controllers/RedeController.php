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
            ->orderBy('id_maquina', 'desc')
            ->paginate(10);
            //$redes = $redes->get(); foi necessario por isso pq ele nao estava encontrando a variavel da view, mais na frete quando coloquei o paginate comecou a funcionar sem
            return view ('maquina.rede.index', ["redes"=>$redes, "searchRede"=>$query]);
        }
    }

    public function create(){
        
    }

    public function store(RedeFormRequest $request){
        $rede = new RedeFormRequest;
        $rede->ip=$request->get('ip');
        $rede->mascara=$request->get('mascara');
        $rede->gateway=$request->get('gateway');
        $rede->save();
        return Redirect::to('maquina/rede');
    }

    public function show($id){
        return view("maquina.rede.show", ["rede"=>RedeFormRequest::findOrFail($id)]);
    }

    public function edit($id){                     //direciona para a pagina de edição
        $rede = SisManutencaoRede::findOrFail($id);
        $redes = DB::table('tb_maquina')
        ->where('condicao', '=', '1')->get();
        return view("maquina.rede.edit", ["rede"=>$rede, "redes"=>$redes]);
    }

    public function update(RedeFormRequest $request, $id){
        $rede=SisManutencaoRede::findOrFail($id);
        $rede->ip=$request->get('ip');
        $rede->mascara=$request->get('mascara');
        $rede->gateway=$request->get('gateway');
        $rede->update();
        return Redirect::to('maquina/rede');
    }

    public function destroy(){

    }
}
