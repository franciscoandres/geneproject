<?php 

/**
* Request
*/

class Request
{

	public static function is_get(): bool {
		return $_SERVER["REQUEST_METHOD"] === "GET";
	}

	public static function is_post(): bool {
		return $_SERVER["REQUEST_METHOD"] === "POST";
	}

	public static function redirect_to($location) {
  	header("Location: " . $location);
  	exit;
	}
	
}