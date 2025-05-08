<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Interest;
class ViewServiceProvider extends ServiceProvider
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
        View::composer('*', function ($view) {
            $etudiant = Auth::user(); // Adjust if using default guard
    
            $interests = '';
    
            if ($etudiant) {
                $interests = Interest::where('etudiant_id', $etudiant->id)
                    ->pluck('name')
                    ->implode(', ');
            }
    
            $view->with('etudiantInterests', $interests);
        });
}
}
