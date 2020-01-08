<?php

namespace sisManutencao\Http\Controllers;

use Illuminate\Http\Request;
use sisManutencao\Regiao;
use sisManutencao\Http\Requests\RegiaoFormRequest;
use Illuminate\Support\Facades\Redirect;
use DB;

class RegiaoController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            $regioes=DB::table('tb_unidade')
            ->where('nome', 'LIKE', '%'.$query.'%')
            //->where('regiao', '=', '1')
            ->orderBy('id_unidade', 'desc')
            ->paginate(7);
            return view('regiao.index', ["regioes"=>$regioes, "searchText"=>$query]);
        }
    }

    public function create(){
        return view("regiao.create");
    }

    public function store(RegiaoFormRequest $request){
        $regiao = new Regiao;
        $regiao->nome=$request->get('nome');
        $regiao->regiao=$request->get('regiao');
        $regiao->condicao=1;
        $regiao->save();
        return Redirect::to('regiao');
    }

    public function show($id){
        return view("regiao.show", ["regiao"=>Regiao::findOrFail($id)]);
    }

    public function edit($id){
        return view("regiao.edit", ["regiao"=>Regiao::findOrFail($id)]);
    }

    public function update(){

    }

    public function destroy(){

    }
}
