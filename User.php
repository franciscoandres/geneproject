<?php

/**
* User Model
*/

class User
{
	
	private $name;
	private $email;
	private $hash;

	public function setName($name) {
		$this->name = Sanitize::html($name);
	}

	public function getName(): string {
		return $this->name;
	}

	public function setEmail($email) {
		$this->email = Sanitize::html($email);
	}

	public function getEmail(): string {
		return $this->email;
	}

	public function setPassword($password) {
		$this->hash = password_hash($password, PASSWORD_DEFAULT);
	}

	public function save() {
		$obj = new Connection();
		$obj->execute("INSERT INTO users(name, email, hash) VALUES('$this->name', '$this->email', '$this->hash')");
		$obj->close();
	}

}
