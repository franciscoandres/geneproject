<?php 

/**
* Input
*/

class Input 
{
	public static function get($item) {
		if (isset($_GET[$item])) {
			return $_GET[$item];
		}else if(isset($_POST[$item])) {
			return $_POST[$item];
		}
	}
}