@extends('site.layout')

@section('title', 'Título da Home')


@section('conteudo')

    <div class="container">
        <div class="row">
            @foreach ($produtos as $produto)
                <div class="col-3 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $produto->imagem }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ Str::limit($produto->nome, 20) }}</h5>
                            <p class="card-text">
                                {{ Str::limit($produto->descricao, 50) }}
                            </p>
                            <p class="card-text"><strong>R$ {{ number_format($produto->preco, 2, ',', '.') }}</strong></p>

                            {{-- @can('verProduto', $produto) --}}
                                <a href="{{ route('site.show', $produto->slug) }}" class="btn btn-primary"><i
                                        class="fa-solid fa-user"></i>&nbsp;&nbsp;Detalhes do Produto...</a>
                            {{-- @endcan --}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="row text-center">
            <div class="col-12">
                {{ $produtos->links() }}
            </div>
        </div>
    </div>

@endsection
