<?php

namespace Recruitment\Products;

use Illuminate\Support\ServiceProvider;

class ProductsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->make('Recruitment\Products\Controllers\ProductsController');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/views', 'products');

        $this->app['router']->namespace('Recruitment\\Products\\Controllers')
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });

    }

    public function provides(): array
    {
        return ['products'];
    }
}
