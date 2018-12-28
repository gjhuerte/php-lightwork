<?php

namespace App\Extensions\Session;

use App\Extensions\Session\Traits\Removable;
use App\Extensions\Session\Traits\Appendable;
use App\Extensions\Session\Interfaces\SessionInterface;

class SessionWrapper
{

	private $_instance;

	/**
	 * Starts the session
	 * 
	 * @return object
	 */
	public static function start()
	{
		if(self::$_instance !== null) {
			self::$_instance = new self;
		}

		session_start();
		return self::$_instance;
	}

	/**
	 * Adds a key value pair to the session variable
	 * 
	 * @param string $key
	 * @param string $value
	 * @return object
	 */
	public static function add($key, $value)
	{
		if(self::$_instance !== null) {
			self::$_instance = new self;
		}

		$_SESSION[ $key ] = $value;
		return self::$_instance;
	}

	public static function temporary($key, $value)
	{
		if(self::$_instance !== null) {
			self::$_instance = new self;
		}

		$_SESSION[ $key ] = $value;
		return self::$_instance;
	}

	/**
	 * Fetch the content of a session by the key
	 * 
	 * @param  string $key
	 * @return string 
	 */
	public static function fetch($key)
	{
		return $_SESSION[ $key ];
	}

	/**
	 * Removes a key from the session variable
	 * 
	 * @param  string $key
	 * @return object
	 */
	public static function release($key)
	{
		if(self::$_instance !== null) {
			self::$_instance = new self;
		}

		unset( $_SESSION[ $key ] );
		return self::$_instance;
	}

	/**
	 * Checks if the session key exists
	 * 
	 * @param  string $key
	 * @return boolena
	 */
	public static function exists($key)
	{
		return isset($_SESSION[ $key ]);
	}

	/**
	 * Checks if the session key has value
	 * present
	 * 
	 * @param  string $key
	 * @return boolena
	 */
	public static function hasValue($key)
	{
		return isset($_SESSION[ $key ]) && count($_SESSION[ $key ]) > 0;
	}
}