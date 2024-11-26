<?php

namespace App\Providers;

use App\Models\Categoria;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /* PAGINAÇÃO */
        Paginator::useBootstrapFive(); // Para Bootstrap 5
        // Paginator::useBootstrap(); // For Bootstrap 5
        // Paginator::useBootstrapFour(); // For Bootstrap 4
        // Paginator::useBootstrapThree(); // For Bootstrap 3

        /* MENU DROPDOWN DE CATEGORIAS DA NAVBAR */
        // $menuCategorias = Categoria::all();
        $menuCategorias = Categoria::limit(20)->get();
        view()->share('menuCategoriasKey', $menuCategorias);
    }
}
