<?php

namespace sisManutencao;

use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    protected $table = 'tb_maquina';
    protected $primaryKey = 'id_maquina';

    public $timestamps = false;
    protected $fillable = [
        'regiao',
        'unidade',
        'marca',
        'patrimonio', 
        'ip', 
        'data_chegada,', 
        'situacao',
        'problema', 
        'tecnico',
        'liberado_em', 
        'enviado_em'
    ];

    protected $guarded = [];
}
