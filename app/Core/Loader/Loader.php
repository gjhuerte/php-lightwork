<?php

namespace App\Core\Loader;

interface Loader
{
    /**
     * Include the needed resources here for
     * registration of the application
     *
     * @return object
     */
    public static function register();
}
