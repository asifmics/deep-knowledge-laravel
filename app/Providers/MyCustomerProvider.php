<?php

namespace App\Providers;

use App\Contract\MyCustomerContract;
use App\Services\MyCustomerService;
use Illuminate\Support\ServiceProvider;

class MyCustomerProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MyCustomerContract::class,MyCustomerService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
