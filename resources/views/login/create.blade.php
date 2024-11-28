@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif

<form action="{{ route('users.store') }}" target="_self" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row mb-3">
        <div class="col-12">
            <label for="firstName">Nome</label>
            <input type="text" id="firstName" name="firstName" class="form-control" />
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <label for="lastName">Sobrenome</label>
            <input type="text" id="lastName" name="lastName" class="form-control" />
        </div>
    </div>

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
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
</form>
