<?php

namespace App\Providers;

use App\Contract\MyCustomerContract;
use App\Services\MyCustomerService;
use Illuminate\Support\ServiceProvider;
use function Symfony\Component\Translation\t;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //$this->app->bind(MyCustomerContract::class,MyCustomerService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
