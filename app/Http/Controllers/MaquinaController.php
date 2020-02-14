<?php

namespace sisManutencao\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Input;
use sisMaquina\Maquina;
use sisMaquina\Http\Requests\MaquinaFormRequest;
use DB;
use sisManutencao\Http\Requests\MaquinaFormRequest as RequestsMaquinaFormRequest;
use sisManutencao\Maquina as SisManutencaoMaquina;

class MaquinaController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){  //todos os campos serao mostrados na index

        if($request){
            $query=trim($request->get('searchText')); 
            $maquinas=DB::table('tb_maquina')
            ->where('patrimonio', 'LIKE', '%'.$query.'%')
            ->where('condicao', '=', '1')
            ->orderBy('id_maquina', 'desc')
            ->paginate(10);
            return view ('maquina.reparo.index', ["maquinas"=>$maquinas, "searchText"=>$query]);
        }

    }

    public function create(){
        $maquinas=DB::table('tb_unidade')
        ->get();
        return view("maquina.reparo.create", ["maquinas"=>$maquinas]);
    }

    public function store(RequestsMaquinaFormRequest $request){
        $maquina = new SisManutencaoMaquina;
        $maquina->regiao=$request->get('regiao');
        $maquina->unidade=$request->get('unidade');
        $maquina->marca=$request->get('marca');
        $maquina->patrimonio=$request->get('patrimonio');
        $maquina->ip=$request->get('ip');
        $maquina->mascara=$request->get('mascara');
        $maquina->gateway=$request->get('gateway');
        $maquina->data_chegada=$request->get('data_chegada');
        $maquina->situacao=$request->get('situacao');
        $maquina->problema=$request->get('problema');
        $maquina->tecnico=$request->get('tecnico');
        $maquina->liberado_em=$request->get('liberado_em');
        $maquina->enviado_em=$request->get('enviado_em');
        $maquina->condicao=1;
        $maquina->save();
        return Redirect::to('maquina/reparo');
    }

    public function show($id){
        return view("maquina.reparo.show", ["maquina"=>SisManutencaoMaquina::findOrFail($id)]);
    }

    public function edit($id){          //direciona para a pagina de edição
        $maquina = SisManutencaoMaquina::findOrFail($id);
        $maquinas = DB::table('tb_maquina')
        ->where('condicao', '=', '1')->get();
        return view("maquina.reparo.edit", ["maquina"=>$maquina, "maquinas"=>$maquinas]);
    }

    public function update(RequestsMaquinaFormRequest $request, $id){
        $maquina=SisManutencaoMaquina::findOrFail($id);
        $maquina->regiao=$request->get('regiao');
        $maquina->unidade=$request->get('unidade');
        $maquina->marca=$request->get('marca');
        $maquina->patrimonio=$request->get('patrimonio');
        $maquina->ip=$request->get('ip');
        $maquina->data_chegada=$request->get('data_chegada');
        $maquina->situacao=$request->get('situacao');
        $maquina->problema=$request->get('problema');
        $maquina->tecnico=$request->get('tecnico');
        $maquina->liberado_em=$request->get('liberado_em');
        $maquina->enviado_em=$request->get('enviado_em');
        $maquina->update();
        return Redirect::to('maquina/reparo');
    }

    public function destroy($id){
        $maquina=SisManutencaoMaquina::findOrFail($id);
        $maquina->condicao='0';
        $maquina->update();
        return Redirect::to('maquina/reparo');
    }
}
