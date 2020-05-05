<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO PRODUTOS (nome, valor, descricao, quantidade, data_vencimento) values (?, ?, ?, ?, ?)");
    }
}
