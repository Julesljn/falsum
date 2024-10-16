<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\LlmService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('Llm-service', function ($app) {
            return new LlmService();
        });
    }

    public function boot()
    {
        //
    }
}
