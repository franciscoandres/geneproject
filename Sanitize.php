<?php 

/**
*  Sanitize
*/

class Sanitize
{

	public static function html($string) {
		return htmlspecialchars($string);
	}

}