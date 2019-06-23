<?php

namespace App\Routes\Api;

use App\Helpers\DirectoryHelper as Directory;
use App\Core\Protocols\Routing\RoutingProtocol;

class Route extends RoutingProtocol
{

	/**
	 * Compile list of routes for api 
	 * 
	 * @return
	 */
	public static function compile() 
	{ 
		self::load([
			Directory::app('Routes/Api/base.php')->get(),
		]);
	}
}