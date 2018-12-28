<?php

namespace App\Extensions\Token;

use App\Config\Session;
use App\Config\Request;
use App\Config\Encrypt;

class TokenGenerator
{
	const TOKEN_NAME = 'csrf_token';

	private $token;
	private $_instance;

	public function register()
	{
		$this->generate();
		$this->appendToSession();

		return $this;
	}

	/**
	 * Generate a new token variable
	 * 
	 * @return instance
	 */
	public static function make()
	{

		if(self::$_instance !== null) {
			self::$_instance = new self;
		}

		self::$_instance->register();
		return self::$_instance;
	}

	/**
	 * generate a new token value
	 * 
	 * @return string
	 */
	public function generate()
	{
		if(Session::exists(self::TOKEN_NAME) && Session::hasValue(self::TOKEN_NAME)) {
			return $this->token = Session::fetch(self::TOKEN_NAME);
		}

		return $this->token = Encrypt::make();
	}

	/**
	 * Append the generated token to session
	 * variable
	 * 
	 * @return object
	 */
	public function appendToSession()
	{
		Session::add($this->token);
		return $this;
	}

	/**
	 * Compares the current session token
	 * with the token from the request
	 * 
	 * @return boolena
	 */
	public function compareWithSession()
	{
		return Session::fetch(self::TOKEN_NAME) == Request::get(self::TOKEN_NAME);
	}
}