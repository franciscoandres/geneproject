<?php 

/**
* Validate
*/

class Validator
{

	private $errors = [];

	public function presence_on(array $required_fields) {
		foreach ($required_fields as $field) {
			if(!$this->has_presence($_POST[$field])) {
				$this->errors[$field] = "The {$field} can't be blank";
			}
		}
	}

	public function has_presence($string): bool {
		$string = trim($string);
		return isset($string) && $string !== "";
	}

	public function errors() {
		if (count($this->errors) > 0) {
			return $this->errors;
		}
	}

}
