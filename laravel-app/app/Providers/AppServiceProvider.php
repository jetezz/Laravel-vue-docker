<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
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
        // Cargar las rutas de la API con prefijo "api"
        Route::prefix('api')
            ->middleware('api') // Middleware de API predeterminado
            ->group(base_path('routes/api.php'));
    }
}
