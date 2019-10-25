<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Twitter;
use App\Services\Example;
use App\Services\Foo;

class ServiceContainerController extends Controller
{
    public function index() {

        app()->singleton('foo', function(){
            return new Foo;
        });

        // constructor example
        app()->singleton('f200', function(){
            $foo = app('f30');
            return new Example; // not instanciating foo class, error
        });

        // API KEY example
        app()->singleton('twitter', function() {
            $api_key = config('app.twitter.api_key');
            return new Twitter($api_key);
        });

        // dd(app('twitter'));
        /**
         *  * dd(app('example'), app('example'));
         *  Two different instances with deifferent identifier
         *  Sometimes,we want only single instance, so, we can
         *  register a singleton with a conatiner.
         *
         *  Singleton => single instance
         */
    }
}

/**
 *  Example {
 *      $foo: Foo {
 *         $name = "Umar Raza";
 *      }
 *  }
 *
 * Object/Instance of Exaple class have property whose value is also an istance of another class called Foo.
 *
 */


/*
|   Auto Resolving, Serivce Container:
|
|   Serivce Container is big block of key value pairs. To get out of the service container, we can use two methods, app() & resolve()
|
|   To Put something into the container, resolve()->bind(). What if try get something that is not register in the container? Error will be thrown like Class
|   example does not exist.
|
|   Laravel is going to do No of chekcs, Do i have in the container something called example? If It does not have anthing there. Then its gonna check outside
|   of the container. Maybe its a class name? rsolve(App\Example). In this case, It is not a class name. It is just a string. We can give a class name to the
|   conatiner and it will give us the instance of the class. In case of string, this is gonna through an exception.
|
|   In case of the absence of key 'example' in the container, we did not bind anythong in the container which is not given by the callback function, It is
|   gonna find the class which is given in the singleton callback function. e.g resolve('App\Example'). It finds the class and return and instance of this
|   class. This ia called auto resolving.
|   What if 'example' has its own cunstructor?
|
|   We can also register an singleton for API KEY for some resource provider
|
|
|   app()->singleton('twitter), function () {
|       return new Twitter('API KEY');
|   });
|
|   Registered class twitter
|
*/
