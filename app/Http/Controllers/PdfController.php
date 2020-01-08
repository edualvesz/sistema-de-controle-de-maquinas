<?php

namespace sisManutencao\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
//use sisManutencao\resources\arquivo_pdf;

class PdfController extends Controller
{
    function index(){
        $maquina = $this->pega_maquina();
        return view('arquivo_pdf')->with('maquina', $maquina);
    }

    function pega_maquina(){
        $maquina = DB::table('tb_maquina')
        ->orderBy('id_maquina', 'desc')
        ->get();
        return $maquina;
    }

    function pdf(){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->converte_pega_maquina());
        return $pdf->stream();
    }

    function converte_pega_maquina(){
        $maquina = $this->pega_maquina();
        $saida = '
        
        
        <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        
                    <div class="container>"
                        <h4 align="center" ><strong>SECRETARIA DE ESTADO DA ADMINISTRAÇÃO PENITENCIÁRIA<br>
                        COORDENADORIA DE REINTEGRAÇÃO SOCIAL E CIDADANIA<br>
                        DEPARTAMENTO DE INFRAESTRUTURA - DTI</strong></h4><br>
                        <h5 align="center">Relação geral de máquinas</h5><br>
                        </br>
                    </div>
        </head>
            <table width="94%" style="border-collapse: collapse; border: 10px;" span="4"; class="columns";>
            <tr>
                <th style="border: 1px solid; padding:12px;" width="20%"; align="center">Região</th>
                <th style="border: 1px solid; padding:12px;" width="30%"; align="center">Unidade</th>
                <th style="border: 1px solid; padding:12px;" width="15%"; align="center">Marca</th>
                <th style="border: 1px solid; padding:12px;" width="15%"; align="center">Patrimonio</th>
                <th style="border: 1px solid; padding:12px;" width="20%"; align="center">IP</th>
                <th style="border: 1px solid; padding:12px;" width="20%"; align="center">Responsável</th>
            </tr>
        ';  
        foreach($maquina as $maq){
         $saida .= '
         <tr>
          <td style="border: 1px solid; padding:12px;" align="center">'.$maq->regiao.'</td>
          <td style="border: 1px solid; padding:12px;" align="center">'.$maq->unidade.'</td>
          <td style="border: 1px solid; padding:12px;" align="center">'.$maq->marca.'</td>
          <td style="border: 1px solid; padding:12px;" align="center">'.$maq->patrimonio.'</td>
          <td style="border: 1px solid; padding:12px;" align="center">'.$maq->ip.'</td>
          <td style="border: 1px solid; padding:12px;" align="center">'.$maq->tecnico.'</td>
         </tr>
        ';
    }
        $saida .= '</table>';
        return $saida;
    }
}
