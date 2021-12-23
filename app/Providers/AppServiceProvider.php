<?php

namespace App\Providers;

use App\Models\Product;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();


        view()->composer('*', function ($view) {
            $products = Product::select(
                'id',
                'title',
                'trashed',
            )->where('trashed', false)->get();

            return $view->with('route', \Route::currentRouteName())
                ->with('products', $products);
        });
    }
}
