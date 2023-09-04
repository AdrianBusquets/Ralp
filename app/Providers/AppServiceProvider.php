<?php

namespace App\Providers;
use App\Models\City;
use Illuminate\Support\Facades\View;
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
        try{
            $cities= City::all();
            View::share('cities', $cities);
        } catch (\Throwable $th) {
            dump("ALERT: Recuerda lanzar lass migrations cuando acabes el clone");
        }
    }
}
