<?php

namespace App\Config;

use App\Core\Loader\Loader;

class Bootstrap implements Loader 
{

	/**
	 * Start the configuration for the 
	 * application to use
	 *
	 * @return object
	 */
	public static function load(array $classes)
	{
		
		// trigger the register method on each class
		// to load the needed resources on start up
		foreach($classes as $class) {
			$class::register();
		}
	}
}
