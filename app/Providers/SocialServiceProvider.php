<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Twitter;

class SocialServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         /**
         * register is a method where we bind things into the service container and
         * that is going to fire for every service provider defined in app.php 
         * service providers array. Every register method for every service provider
         * will be fire for every single request. 
         * 
         * For every request, we are going to register 'Twitter' key into the laravel
         * service container. When we resolve it out of the container, we are going
         * to return a new instance of twitter class with the apiKey and sercet as a 
         * properties of the instance. (Auto Resolving)
         * 
         * 
         * Tip: 
         * 
         * For facebook, instagram, youtube & other social networks configurations,
         * register a new service provider called SocialServiceProvider and regitser
         * all social related configurations here instead of configuaring all of them 
         * in AppServiceProvider.
         */

        app()->singleton(Twitter::class, function() {
            $apiKey = config('app.twitter.api_key');
            $apiSecret = config('app.twitter.api_secret');
            return new Twitter($apiKey, $apiSecret);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Laravel loop through on service providers array and calls register() method for
         * every service provider. After this proccess, Laravel again loop through on
         * service providers array and calls boot() method. In boot method, we can ref-
         * rence anything that uses the laravel framework. Because at the point when boot
         * method is called, the whole framework is loaded up.
         */
    }
}
