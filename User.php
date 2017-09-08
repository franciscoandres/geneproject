<?php

require 'Sanitize.php';

/**
* User Model
*/

class User
{
	
	private $name;
	private $email;
	private $hash;

	public function setName(string $name) {
		$this->name = Sanitize::html($name);
	}

	public function getName(): string {
		return $this->name;
	}

	public function setEmail(string $email) {
		$this->email = Sanitize::html($email);
	}

	public function getEmail(): string {
		return $this->email;
	}

	public function setPassword(string $password) {
		$this->hash = password_hash($password, PASSWORD_DEFAULT);
	}

	public function dump() {
		var_dump($this->name, $this->email, $this->hash);
	}

}

$user = new User();
$user->setName("Frank");
$user->setEmail("frandresgo@gmail.com");
$user->setPassword("secretpassword123456789");
$user->dump();