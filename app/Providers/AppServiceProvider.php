<?php

namespace App\Providers;

use App\Core\Contracts\ServiceInterfaces\AbstractServiceRepositoryInterface;
use App\Core\Services\AbstractService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AbstractServiceRepositoryInterface::class,AbstractService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
