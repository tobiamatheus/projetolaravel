<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'IDProduto','NomeProduto', 'IDFornecedor', 'IDCategoria','QuantidadePorUnidade', 'PrecoUnitario',
        'UnidadesEmEstoque', 'UnidadesEmOrdem', 'NivelDeReposicao',
    ];

    protected $primaryKey = 'IDProduto';

    public $timestamps = false;
}
