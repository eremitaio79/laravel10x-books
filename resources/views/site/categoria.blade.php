@extends('site.layout')

@section('title', 'Produtos por Categoria Selecionada')

@section('conteudo')


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                        Produtos da categoria: <strong>{{ $categoria->nome }}</strong>
                    </button>
                    @if ($produtosDaCategoria->isEmpty())
                    <button class="list-group-item">Nenhum produto nesta categoria</button>
                    @else
                        @foreach ($produtosDaCategoria as $produto)
                            <a href="{{ route('site.show', $produto->slug) }}" type="button"
                                class="list-group-item list-group-item-action">{{ $produto->nome }}</a>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                {{ $produtosDaCategoria->links() }}
            </div>
        </div>
    </div>

@endsection
