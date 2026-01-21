<?php

namespace App\Providers;

use App\Models\profil;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Midtrans\Config;

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
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = config('services.midtrans.production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        View::composer('components.layouts.app', function ($view) {
            $profil = profil::where('is_active', 1)->latest()->first();
            $view->with('profil',$profil) ;
        });
    }
}
