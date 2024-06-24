<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use App\Models\Program; 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton('programs', function () {
            return Program::all(); // Mengambil data program dari model Program
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // Menggunakan view composer untuk navbar
        view()->composer('layouts.navbar', function ($view) {
            // Ambil data program dari database atau dari sumber lain
            $programs = Program::all(); // Menggunakan Eloquent untuk mengambil semua program dari model Program
    
            // Kirim data program ke view navbar
            $view->with('programs', $programs);
        });
    }
}
