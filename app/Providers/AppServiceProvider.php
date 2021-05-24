<?php

namespace App\Providers;

use App\Services\FirstRequestLogger;
use App\Services\RequestLoggerInterface;
use Illuminate\Support\ServiceProvider;
use Psr\Log\LoggerInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return FirstRequestLogger
     */
    public function register()
    {
        $this->app->bind(RequestLoggerInterface::class, function () {
                return new FirstRequestLogger($this->app->make(LoggerInterface::class));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public
    function boot()
    {

    }
}
