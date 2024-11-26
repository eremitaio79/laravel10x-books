@extends('site.layout')

@section('title', 'Carrinho de Compras')

@section('conteudo')


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                        <strong>Carrinho (Quantidade de itens: {{ $itens->count() }})</strong>
                    </button>

                    <table class="table .table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Img</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Preço</th>
                                <th scope="col" width="120">Quantidade</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($itens as $item)
                                <tr>
                                    <th scope="row"><img src="{{ $item->attributes->image }}" width="70px" /></th>
                                    <td>{{ $item->name }}</td>
                                    <td>R$ {{ number_format($item->price, 2, ',', '.') }}</td>
                                    <td><input type="number" id="quantity" name="quantity" value="{{ $item->quantity }}" class="form-control" /></td>
                                    <td>
                                        <button type="button" class="btn btn-warning">Refresh</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-primary">Continuar comprando</button>
                            <button type="button" class="btn btn-secondary">Limpar carrinho</button>
                            <button type="button" class="btn btn-success">Finalizar compra</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
