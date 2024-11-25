@extends('site.layout')

@section('title', 'Título da Home')

@section('conteudo')
    <h1>Teste de conteúdo na Home</h1>
    <p>Teste de <strong>conteúdo</strong></p>


    {{-- A blade comment. This type of comment is not rendered in the source code. --}}


    {{-- Ternary operator. --}}
    <p>{{ isset($nome) ? 'Exists' : 'Does not exist' }}</p>


    {{-- Setting a default value for a varible. --}}
    <p>{{ $teste ?? null }}</p>


    {{-- IF --}}
    <p>
        {{ $nome = 'Pedro' }}<br />
        @if ($nome == 'Paulo')
            Nome é Paulo.
        @elseif ($nome == 'Pedro')
            Nome é Pedro
        @else
            Nome não é Paulo.
        @endif
    </p>


    {{-- Switch --}}
    <p>
        {{ $idade = 36 }}
        @switch($idade)
            @case(28)
                Idade é 28
            @break

            @case(35)
                Idade é 35
            @break

            @default
                Nenhuma idade
        @endswitch
    </p>


    <p>
        @isset($nome)
            Existe!
        @endisset
    </p>


    <p>
        @empty($nome)
            Está vazia!
        @endempty
    </p>


    <p>
        {{-- Informa se o usuário está autenticado. --}}
        @auth
            Está autenticado.
        @endauth
    </p>


    <p>
        {{-- Informa se o usuário não está autenticado. --}}
        @guest
            Não está autenticado.
        @endguest
    </p>


    <p>
        {{-- Laço for --}}
        @for ($i = 0; $i <= 10; $i++)
            Imprime i: {{ $i }}<br />
        @endfor
    </p>


    <p>
        {{-- Laço While --}}
        @php
            $x = 0;
        @endphp

        @while ($x <= 10)
            Imprime {{ $x }}<br />

            @php
                $x++;
            @endphp
        @endwhile
    </p>


    <p>
        {{-- Laço foreach --}}
        @php
            $frutas = ['Banana', 'Uva', 'Pêra', 'Abacate'];
        @endphp

        @foreach ($frutas as $fruta)
            Fruta: {{ $fruta }}<br />
        @endforeach
    </p>

    @include('includes.mensagem', ['titulo_dinamico' => 'Mensagem de sucesso'])

    @component('components.sidebar')
    @endcomponent

    @endsection
