<?php

namespace sisManutencao;

use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{
    protected $table = 'tb_unidade';
    protected $primaryKey = 'id_unidade';

    public $timestamps = false;
    protected $fillable = ['nome', 'regiao'];           //carrega os campos que tem na tabela

    protected $guarded = [];
}
