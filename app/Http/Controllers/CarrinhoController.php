<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CarrinhoController extends Controller
{
    public function carrinhoLista()
    {
        $itens = \Cart::getContent()->sortByDesc('id');
        // dd($itens);
        return view('site.carrinho', compact('itens'));
    }


    public function adicionaCarrinho(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => abs($request->qnt),
            'attributes' => [
                'image' => $request->img
            ],
        ]);

        return redirect()->route('site.carrinho')->with('success', 'Produto adicionado no carrinho com sucesso!');
    }

    public function removeCarrinho(Request $request)
    {
        // dd($request);
        \Cart::remove($request->id);

        return redirect()->route('site.carrinho')->with('success', 'O produto foi removido do carrinho com sucesso!');
    }

    public function atualizaCarrinho(Request $request)
    {
        \Cart::update($request->id, [
            'quantity' => [
                'relative' => false,
                'value' => abs($request->quantity),
            ]
        ]);

        return redirect()->route('site.carrinho')->with('success', 'A quantidade do item foi atualizada com sucesso!');
    }

    public function limpaCarrinho()
    {
        \Cart::clear();

        return redirect()->route('site.carrinho')->with('aviso', 'Seu carrinho está vazio.');
    }

}
