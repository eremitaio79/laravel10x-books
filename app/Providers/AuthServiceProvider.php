<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Produto;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        // 'App\Models\Produto' => 'App\Policies\ProdutoPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Gate::define('ver-produto', function(User $user, Produto $produto) {
        //     return $user->id == $produto->id_user;
        // });
    }
}
