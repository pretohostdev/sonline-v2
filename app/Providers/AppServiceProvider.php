<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Pagination\Paginator; // Essa linha lida com paginação

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
        //Essas duas linhas abaixo, resolvem a questão da paginação
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
