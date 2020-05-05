<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function lista() {
        if (view() -> exists("produto.listagem")) {
            $produtos = DB::select("select * from produtos");
            return view('produto.listagem')->withProdutos($produtos);
        } else {
            return "Página não encontrada!";
        }
    }

    public function mostra(Request $request, String $id) {
        $produtos = Produtos::find($id);
        if (view() -> exists("produto.detalhes")) {
            $produtos = DB::select("select * from produtos where IDProduto = $id order by 1");
            return view('produto.detalhes')->withProdutos($produtos);
        } else {
            return "Página não encontrada!";
        }
    }

    public function busca(Request $request) {
        $busca = $request->busca;
        $resultado = Produtos::where('NomeProduto', 'LIKE', "%{$busca}%")->get();

        return view('produto.detalhes')->withProdutos($resultado);
    }

    public function consulta() {
        return view('produto.consulta');
    }

    public function categoria(Request $request) {
        $categorias = DB::select("select * from categorias order by 1");

        return view('produto.categorias')->withProdutos($categorias);
    }

    public function form() {
        return view("produto.cadastro");
    }

    public function cadastro(Request $request) {
        if ($request->input('id') != null) {
            $produtos = Produtos::find($request->input('id'));
        } else {
            $produtos = new Produtos();
        }

        $inc = $request->input('id') + 1;

        $produtos->fill($request->all());
        $produtos->save();

        return redirect()->action('ProdutosController@lista');

        //DB::insert("INSERT INTO PRODUTOS (nome, quantidade, valor, descricao, data_vencimento) values ('$nome', '$quantidade',  '$valor', '$descricao', '$data_vencimento')");
    }

    public function deleta(Request $request, String $IDProduto)
    {
        $produto = Produtos::find($IDProduto);
        $produto->delete();

        return redirect()->action('ProdutosController@lista');
    }
}
