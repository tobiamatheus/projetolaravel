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


    /*CONSULTAS*/

    public function consulta() {
        return view('produto.consulta.consulta');
    }

    public function categoria() {
        if (view() -> exists("produto.consulta.categoria.categorias")) {
            $produtos = DB::select("select * from categorias");
            return view('produto.consulta.categoria.categorias')->withProdutos($produtos);
        } else {
            return "Página não encontrada!";
        }
    }

    public function fornecedor() {
        if (view() -> exists("produto.consulta.fornecedor.fornecedores")) {
            $produtos = DB::select("select * from fornecedores");
            return view('produto.consulta.fornecedor.fornecedores')->withProdutos($produtos);
        } else {
            return "Página não encontrada!";
        }
    }

    public function ordem() {
        if (view() -> exists("produto.consulta.ordem.ordens")) {
            $produtos = DB::select("select * from ordens");
            return view('produto.consulta.ordem.ordens')->withProdutos($produtos);
        } else {
            return "Página não encontrada!";
        }
    }

    public function odetalha(Request $request, String $id) {
        $produtos = Produtos::find($id);
        if (view() -> exists("produto.consulta.ordem.odetalhe")) {
            $produtos = DB::select("select * from ordens where IDOrdem = $id order by 1");
            return view('produto.consulta.ordem.odetalhe')->withProdutos($produtos);
        } else {
            return "Página não encontrada!";
        }
    }

    public function fdetalha(Request $request, String $id) {
        $produtos = Produtos::find($id);
        if (view() -> exists("produto.consulta.fornecedor.fdetalhe")) {
            $produtos = DB::select("select * from fornecedores where IDFornecedor = $id order by 1");
            return view('produto.consulta.fornecedor.fdetalhe')->withProdutos($produtos);
        } else {
            return "Página não encontrada!";
        }
    }

    /*CONSULTAS FIM*/

    public function form() {
        return view("produto.cadastro");
    }

    public function cadastro(Request $request) {
        if ($request->input('id') != null) {
            $produtos = Produtos::find($request->input('id'));
        } else {
            $produtos = new Produtos();
        }

        $produtos->fill($request->all());
        $produtos->save();

        return redirect()->action('ProdutosController@lista');

        //DB::insert("INSERT INTO PRODUTOS (nome, quantidade, valor, descricao, data_vencimento) values ('$nome', '$quantidade',  '$valor', '$descricao', '$data_vencimento')");
    }

    public function create()
    {
        $produto = DB::table('produtos')->select('IDProduto')->orderBy('IDProduto','DESC')->limit(1)->get();
        //$fornecedor = DB::select('SELECT IDFornecedor from fornecedores ORDER BY 1 DESC LIMIT 1');

        return view('produto.cadastro', compact('produto'));
    }

    public function deleta(Request $request, String $IDProduto)
    {
        $produto = Produtos::find($IDProduto);
        $produto->delete();

        return redirect()->action('ProdutosController@lista');
    }
}
