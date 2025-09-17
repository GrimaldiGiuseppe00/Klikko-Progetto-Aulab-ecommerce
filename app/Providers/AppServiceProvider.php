<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
        // DUE  MODI DIVERSI MA ALLO STESSO TEMPO STESSO FUNZIONAMENTO
        if(Schema::hasTable('categories')){
            View::share('categories', Category::orderBy('name')->get());
        }
        // if(Schema::hasTable('categories')){
        //     $categories = Category::orderBy('name')->get();
        //     View::share('categories', $categories);
            
        // }
    }
}
