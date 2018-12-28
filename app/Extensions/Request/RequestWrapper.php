<?php

namespace App\Extensions\Request;

class RequestWrapper
{

	/**
	 * Fetch a single row of request
	 * 
	 * @return string
	 */
	public static function get($index)
	{
		return $_REQUEST[$index];
	}

	/**
	 * Fetch all the request data
	 * 
	 * @return array
	 */
	public static function all()
	{
		return $_REQUEST;
	}
}