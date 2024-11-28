@if ($msg = Session::get('erro'))
    {{ $msg }}
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif

<form action="{{ route('login.auth') }}" target="_self" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row mb-3">
        <div class="col-12">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" />
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" class="form-control" />
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <input type="checkbox" id="remember" name="remember" class="form-control" />Lembrar-me
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
    </div>
</form>
