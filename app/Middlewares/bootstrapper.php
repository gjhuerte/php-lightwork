<?php

namespace App\Middlewares;

use App\Core\Loader\Registry;

class Bootstrapper implements Registry
{

    private static $middlewares = [];

    /**
     * Registers all the middleware on site startup
     * Merge the argument middleware with the middleware
     * set on the middleware variables
     *
     * @return void
     */
    public static function register(array $middlewares = [])
    {
        $middlewares = array_merge(self::$middlewares, $middlewares);
        foreach($middlewares as $middleware) {
            $middlewares::verify();
        }
    }
}
