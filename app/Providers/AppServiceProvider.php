<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
        View::composer("*", function ($view) {
            $query = request()->query("query", "");
            $view->with("query", $query);
        });
    }
}
