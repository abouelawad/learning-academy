<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        view()->composer('guest.layouts.header',function($view){
            $view ->with('categories', Category::select('id','name')->get());
            
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
