<?php

namespace App\Providers;

use App\Models\CategoryGroup;
use App\Models\Product;
use App\Observers\CategoryGroupObserver;
use App\Observers\ProductObserver;
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
        CategoryGroup::observe(CategoryGroupObserver::class);
        Product::observe(ProductObserver::class);
    }
}
