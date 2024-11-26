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
                        <a href="#" class="btn btn-warning">Comprar</a>
                        <a href="{{ url('/') }}" class="btn btn-secondary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
