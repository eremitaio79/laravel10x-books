<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $nome = 'Paulo';
        // $idade = 23;
        // $html_teste = '<h2><strong>Teste de html</strong></h2>';

        // return view('news', [
        //     'nome' => $nome,
        //     'idade' => $idade,
        //     'html_teste' => $html_teste
        // ]);

        // Retorna todos os produtos da tabela.
        // $produtos = Produto::all();

        // Retorna uma quantidade de registros por página.
        $produtos = Produto::paginate(10);

        return view('site.home', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto, $slug)
    {
        $produto = Produto::where('slug', $slug)->first(); // first() retorna apenas um registro.

        // Usando Gate.
        // Gate::authorize('ver-produto', $produto);

        // Usando Policy.
        // $this->authorize('verProduto', $produto);

        return view('site.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        //
    }

    public function categoria($id)
    {
        $categoria = Categoria::find($id);

        // $produtosDaCategoria = Produto::where('id_categoria', $id)->get(); // get() retorna os registros selecionados.
        $produtosDaCategoria = Produto::where('id_categoria', $id)->paginate(2); // get() retorna os registros selecionados.
        return view('site.categoria', compact('produtosDaCategoria', 'categoria'));
    }
}
