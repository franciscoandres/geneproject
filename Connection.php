<?php 

/**
* Connection
*/

class Connection
{

	private $connection;
	private $results;

	public function __construct() {
		$this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
		if ($this->connection->connect_error) {
			die("Error {$this->connection->connect_errno}: {$this->connection->connect_error}");
		}
	}

	public function execute($sql) {
		$this->results = $this->connection->query($sql);
	}

	public function get() {
		return $this->results;
	}

	public function close() {
		$this->connection->close();
	}

}