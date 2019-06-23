<?php

namespace App\Core\Protocols\Routing;

class RoutingProtocol 
{
	/**
	 * Load the paths presented as array
	 * 
	 * @param  array  $paths
	 * @return        
	 */
	public static function load(array $paths)
	{
		foreach($paths as $path) {
			require $path;
		}
	}
}