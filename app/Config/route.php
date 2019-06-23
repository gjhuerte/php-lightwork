<?php

namespace App\Config;

use App\Core\Loader\Registry;
use App\Routes\Web\Route as WebRoutes;
use App\Routes\Api\Route as ApiRoutes;
use App\Core\Protocols\Routing\RoutingProtocol;

class Route implements Registry
{
    /**
     * Triggers the required methods
     *
     * @return void
     */
    public static function register() 
    { 
    	WebRoutes::compile();
    	ApiRoutes::compile();
    }
}
