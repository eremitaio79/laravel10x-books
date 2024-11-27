<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CarrinhoController extends Controller
{
    public function carrinhoLista()
    {
        $itens = \Cart::getContent();
        // dd($itens);
        return view('site.carrinho', compact('itens'));
    }


    public function adicionaCarrinho(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->qnt,
            'attributes' => [
                'image' => $request->img
            ],
        ]);

        return redirect()->route('site.carrinho')->with('success', 'Produto adicionado no carrinho com sucesso!');
    }

}
