<?php

class User
{
	private $database;
	private $table = 'users';

	// inject database interface ke constructor class User
	public function __construct(Database $database)
	{
		$this->database = $database;
	}

	public function info()
	{
		return $this->database->table($this->table);
	}
}