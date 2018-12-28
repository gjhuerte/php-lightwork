<?php

namespace App\Config;

use App\Extensions\Token\TokenGenerator;

class Application
{

	const CHARSET = 'utf-8';

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