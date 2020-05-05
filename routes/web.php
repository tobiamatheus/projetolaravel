<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//INICIO ROTAS PRODUTOS

Route::get('/', function() {
    return view('inicio');
});
Route::get('/produtos', "ProdutosController@lista");
Route::get('/produtos/mostra/{id}', 'ProdutosController@mostra')->where('id', '[0-9]+');
Route::get('/mostra', 'ProdutosController@mostra');
Route::get('/busca', 'ProdutosController@busca');
Route::get('/consulta', 'ProdutosController@consulta');
Route::get('/consulta/categorias', 'ProdutosController@categoria');
Route::get('/cadastro_form', 'ProdutosController@form');
Route::post('/cadastro_form/cadastrar', 'ProdutosController@cadastro');
Route::get('/produtos/deleta/{id}', 'ProdutosController@deleta')->where('id','[0-9]+');

//FIM ROTAS PRODUTOS
