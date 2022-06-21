<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produto = new Produto();

        $produto->nome = "produto exemplo 1";
        $produto->quantidade = 10;
        $produto->descricao = "exemplo de criação de produto com Mutators";

        $produto->save();
    }

    public function getProdutos()
    {
        $produtos = Produto::get();

        foreach ($produtos as $produto) {
            
            echo $produto->nome . "<br/>";
        }
    }
}
