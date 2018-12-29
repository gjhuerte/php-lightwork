<?php

namespace App\Config;

use App\Extensions\Token\TokenGenerator;

class Application
{
	const CHARSET = 'utf-8';

	protected $_instance;

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

	/**
	 * Returns the charset value
	 * 
	 * @return string
	 */
	public function charset()
	{
		return self::CHARSET;
	}

	/**
	 * Returns the generated token
	 * 
	 * @return
	 */
	public function token()
	{
		return TokenGenerator::make();
	}

	public function favicon() { }

	/**
	 * Fetch the title to be used for the 
	 * application 
	 * 
	 * @return string
	 */
	public function title() { }
	
}
