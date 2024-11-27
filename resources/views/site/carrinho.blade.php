@extends('site.layout')

@section('title', 'Carrinho de Compras')

@section('conteudo')


    <div class="container">

        {{-- Mensagem de alerta para a inserção no carrinho de compras. --}}
        @if ($msg = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert-box">
                {{ $msg }}<br />
                <span id="countdown" style="font-size: 12px;" class="ms-2">Esta mensagem vai fechar em 5s</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        @if ($msg = Session::get('aviso'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert-box">
                {{ $msg }}<br />
                <span id="countdown" style="font-size: 12px;" class="ms-2">Esta mensagem vai fechar em 5s</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const alertBox = document.getElementById('alert-box');
                const countdown = document.getElementById('countdown');
                let timeLeft = 5;

                if (alertBox && countdown) {
                    const timer = setInterval(() => {
                        timeLeft--;
                        countdown.textContent = `Esta mensagem vai fechar em ${timeLeft}s`;

                        if (timeLeft <= 0) {
                            clearInterval(timer);
                            alertBox.style.transition = 'opacity 0.5s';
                            alertBox.style.opacity = '0';
                            setTimeout(() => alertBox.remove(), 500);
                        }
                    }, 1000);
                }
            });
        </script>
        {{-- Mensagem de alerta para a inserção no carrinho de compras. --}}


        <div class="row">
            <div class="col-12">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                        <strong>Carrinho (Quantidade de itens: {{ $itens->count() }})</strong>
                    </button>

                    @if ($itens->count() != 0)
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

                                        <form action="{{ route('site.atualizacarrinho') }}" target="_self" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" id="id" name="id"
                                                value="{{ $item->id }}" />
                                            <td><input type="number" id="quantity" name="quantity"
                                                   min="1" value="{{ $item->quantity }}" class="form-control" /></td>
                                            <td>
                                                <button type="submit" class="btn btn-warning">Refresh</button>
                                        </form>
                                        <form action="{{ route('site.removecarrinho') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" id="id" name="id"
                                                value="{{ $item->id }}" />
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                        <strong>Valor total do carrinho: R$ {{ number_format(\Cart::getTotal(), 2, ',', '.') }}</strong>
                    </button>

                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <a href="{{ route('site.index') }}" target="_self" type="button" class="btn btn-primary">Continuar comprando</a>

                            @if ($itens->count() != 0)
                                <a href="{{ route('site.limpacarrinho') }}" target="_self" type="button"
                                    class="btn btn-secondary">Limpar carrinho</a>
                                <button type="button" class="btn btn-success">Finalizar compra</button>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
