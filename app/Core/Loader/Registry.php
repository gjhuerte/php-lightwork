<?php

namespace App\Core\Loader;

interface Registry
{
    /**
     * Registers the functionality from the application
     * trigger on class call
     *
     * @return void
     */
    public static function register();
}
