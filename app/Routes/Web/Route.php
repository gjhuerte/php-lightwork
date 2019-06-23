<?php

namespace App\Routes\Web;

use App\Helpers\DirectoryHelper as Directory;
use App\Core\Protocols\Routing\RoutingProtocol;

class Route extends RoutingProtocol
{

	/**
	 * Compile list of routes for web application 
	 * 
	 * @return
	 */
	public static function compile() 
	{
		self::load([
			Directory::app('Routes/Web/base.php')->get(),
		]);
	}
}