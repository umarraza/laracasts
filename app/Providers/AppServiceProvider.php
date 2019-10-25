<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Twitter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton(Twitter::class, function() {
            $apiKey = config('app.twitter.api_key');
            $apiSecret = config('app.twitter.api_secret');
            return new Twitter($apiKey, $apiSecret);
        });

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
