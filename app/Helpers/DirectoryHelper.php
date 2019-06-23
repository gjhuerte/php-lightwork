<?php

namespace App\Helpers;

class DirectoryHelper
{
	private $path;
	private static $instance;

	/**
	 * Append base into the current url
	 * 
	 * @return string
	 */
	public static function app($path)
	{
		$instance = self::$instance;

		if ($instance == null) {
			$instance = new self;
		}
		$instance->path = dirname(dirname(__FILE__)) . "/$path";

		return $instance;
	}

	/**
	 * Returns the path
	 * 
	 * @return string
	 */
	public function get()
	{
		return $this->path;
	}
}