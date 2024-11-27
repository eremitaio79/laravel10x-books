<div>
    <h1>Dashboard</h1>
    <p>
        Usuário logado: <strong>{{ auth()->user()->firstName }} {{ auth()->user()->lastName }}</strong>
    </p>
    <p>
        <a href="{{ route('login.logout') }}">Logout</a>
    </p>
</div>
