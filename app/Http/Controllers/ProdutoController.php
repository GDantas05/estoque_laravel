<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use estoque\Http\Requests;
use Illuminate\Support\Facades\DB;
use estoque\Produto;
use estoque\Categoria;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{

    public function lista()
    {
        $produtos = Produto::all();

        return view('produto.listagem', compact('produtos'));
    }

    public function mostra($id)
    {
        $produto = Produto::find($id);

        return view('produto.detalhes', compact('produto'));
    }

    public function novo()
    {
        $categorias = Categoria::all();
        return view('produto.cadastro', compact('categorias'));
    }

    public function adiciona(ProdutoRequest $request)
    {
        //$params  = $request->all();
        //$produto = new Produto($params);

        //$produto->save();

        //AS TRÊS LINHAS ACIMA PODEM SER SUBSTITUIDAS POR ESSA ABAIXO
        Produto::create($request->all());

        return redirect()->action('ProdutoController@lista')->withInput($request->only('nome'));
    }

    public function remove($id)
    {
        $produto = Produto::find($id);

        $produto->delete();

        return redirect()->action('ProdutoController@lista');
    }
}
