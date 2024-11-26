@extends('site.layout')

@section('title', 'Detalhes do produto selecionado')

@section('conteudo')

    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card" style="width: 50rem;">
                    <img src="{{ $produto->imagem }}" class="card-img-top" height="250" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produto->nome }}</h5>
                        <p class="card-text">
                            {{ $produto->descricao }}<br />
                            Preço Unitário: <strong>R$ {{ number_format($produto->preco, 2, ',', '.') }}</strong><br />
                            Criado em: {{ $produto->created_at->format('d/m/Y H:i:s') }}<br />
                            Postado por: <strong>{{ $produto->user->firstName }} {{ $produto->user->lastName}}</strong><br />
                            Categoria: <strong>{{ $produto->categoria->nome }}</strong><br />
                        </p>
                        <form action="{{ route('site.addcarrinho') }}" method="post" enctype="multipart/form-data" target="_self">
                            @csrf
                            <input type="hidden" id="id" name="id" value="{{ $produto->id }}" />
                            <input type="hidden" id="name" name="name" value="{{ $produto->nome }}" />

                            <label for="price">Quantidade</label>
                            <input type="hidden" id="price" name="price" value="{{ $produto->preco }}" />
                            <input type="number" id="qnt" name="qnt" value="1" class="form-control" /><hr />
                            <input type="hidden" id="img" name="img" value="{{ $produto->imagem }}" />

                            <button type="submit" class="btn btn-warning">Comprar</button>
                            <a href="{{ url('/') }}" class="btn btn-secondary">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
