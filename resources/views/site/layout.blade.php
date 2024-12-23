<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/all.css') }}">

</head>


<body>

    {{-- NAVBAR INI --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">APP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Menu principal -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}"
                            target="_self">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('site.carrinho') }}" target="_self">
                            Carrinho
                            @if (\Cart::getContent()->count() != 0)
                                <span
                                    class="position-absolute top-10 start-90 translate-middle badge rounded-pill bg-danger"
                                    style="font-size: 0.6rem; padding: 0.15rem 0.35rem;">
                                    {{ \Cart::getContent()->count() }}
                                    <span class="visually-hidden">Cart</span>
                                </span>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Categorias</a>
                        <ul class="dropdown-menu">
                            @foreach ($menuCategoriasKey as $itemCategoria)
                                <li>
                                    <a class="dropdown-item" href="{{ route('site.categoria', $itemCategoria->id) }}">
                                        {{ $itemCategoria->nome }}
                                    </a>
                                </li>
                            @endforeach
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Todas as Categorias</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Links alinhados à direita -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link position-relative">
                                <strong>[Logado como: {{ auth()->user()->firstName }}
                                    {{ auth()->user()->lastName }}]</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link position-relative" href="{{ '/admin/dashboard' }}" target="_self">
                                Dashboard
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link position-relative" href="{{ route('login.form') }}">
                                Login
                            </a>
                        </li>
                    @endauth

                    @auth
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('login.logout') }}">
                            Logout
                        </a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    {{-- NAVBAR END --}}

    {{-- CONTENT --}}
    @yield('conteudo')
    {{-- CONTENT --}}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/fontawesome/all.js') }}"></script>
</body>

</html>
