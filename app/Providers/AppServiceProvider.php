<?php

namespace App\Providers;

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
        // Application/Core
        $this->app->bind(
            \Core\Product\Commands\ICreateProduct::class,
            \Core\Product\Commands\CreateProduct::class
        );
        $this->app->bind(
            \Core\Page\Commands\ICreatePage::class,
            \Core\Page\Commands\CreatePage::class
        );
        $this->app->bind(
            \Core\Page\Queries\IGetPage::class,
            \Core\Page\Queries\GetPage::class
        );
        $this->app->bind(
            \Core\Product\Queries\IGetProductPagination::class,
            \Core\Product\Queries\GetProductPagination::class
        );

        // Persistence
        $this->app->bind(
            \Core\Product\Repositories\IProductRepository::class,
            \Infrastructure\Product\ProductRepository::class
        );
        $this->app->bind(
            \Core\Page\Repositories\IPageRepository::class,
            \Infrastructure\Page\PageRepository::class
        );

        // Common
        $this->app->bind(
            \Common\Date\IDateService::class,
            \Common\Date\DateService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
