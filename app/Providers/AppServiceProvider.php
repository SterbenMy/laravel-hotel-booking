<?php

namespace App\Providers;

use App\Services\DebugResponseLogger;
use App\Services\LongRequestLogger;
use App\Services\ResponseLoggerInterface;
use App\Services\ShortRequestLogger;
use App\Services\RequestLoggerInterface;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Psr\Log\LoggerInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RequestLoggerInterface::class, function () {

            if (App::environment('local')) {
                $logger = new LongRequestLogger($this->app->make(LoggerInterface::class));
            } else {
                $logger = new ShortRequestLogger($this->app->make(LoggerInterface::class));
            }
            return $logger;
        });

        $this->app->bind(ResponseLoggerInterface::class, function () {
            return new DebugResponseLogger($this->app->make(LoggerInterface::class), $this->app->make(Dispatcher::class));
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
