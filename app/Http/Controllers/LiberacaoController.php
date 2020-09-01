<?php

namespace sisManutencao\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Input;
use sisMaquina\Liberacao;
use sisMaquina\Http\Requests\LiberacaoFormRequest;
use DB;
use sisManutencao\Http\Requests\LiberacaoFormRequest as RequestsLiberacaoFormRequest;
use sisManutencao\Liberacao as SisManutencaoLiberacao;

class LiberacaoController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){  //todos os campos serao mostrados na index

        if($request) {
            $query=trim($request->get('searchLiberacao'));
            $liberacoes=DB::table('tb_maquina')
            ->where('patrimonio', 'LIKE', '%'.$query.'%')
            ->where('condicao', '=', '1')
            ->where('situacao', '=', 'OK')
            ->orderBy('id_maquina', 'desc')
            ->paginate(14);
            return view('maquina.liberacao.index', ["liberacoes"=>$liberacoes, "searchLiberacao"=>$query]);
        }

    }

    public function create(){
        
    }

    public function store(RequestsLiberacaoFormRequest $request){
        $liberacao = new RequestsLiberacaoFormRequest;
        $liberacao->ip=$request->get('ip');
        $liberacao->mascara=$request->get('mascara');
        $liberacao->gateway=$request->get('gateway');
        $liberacao->save();
        return Redirect::to('maquina/liberacao');
    }

    public function show($id){
        return view('maquina.liberacao.show', ["liberacao"=>RequestsLiberacaoFormRequest::findOrFail($id)]);
    }

    public function edit($id){          //direciona para a pagina de edição
        $liberaçao = RequestsLiberacaoFormRequest::findOrFail($id);
        $liberacoes = DB::table('tb_maquina')
        ->where('condicao', '=', '1')->get();
        return view("maquina.liberacao.edit", ["liberacao"=>$liberaçao, "liberacoes"=>$liberacoes]);
    }

    public function update(RequestsLiberacaoFormRequest $request, $id){
        
    }

    public function destroy($id){
       
    }
}
