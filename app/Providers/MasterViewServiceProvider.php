<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\master;
use Illuminate\Support\Facades\View;
class MasterViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Share all masters with all views
        View::composer('*', function ($view) {
            $view->with('masters', Master::all());
        });
    }
}
