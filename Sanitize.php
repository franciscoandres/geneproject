<?php 

/**
*  Sanitize
*/

class Sanitize
{

	public static function html($string) {
		return htmlspecialchars($string);
	}

	public static function trim($string) {
		return trim($string);
	}

}