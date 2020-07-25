<?php

require_once 'Interface/Database.php';

class Mysql implements Database
{
	public function __construct()
	{
		$this->connect();
	}

	public function connect()
	{
		echo "You are connecting to mysql database driver" . PHP_EOL;
	}

	public function table($table)
	{
		echo "You are using {$table} table for this model" . PHP_EOL;
	}

	public function disconnect()
	{
		echo "You are disconnect from mysql driver" . PHP_EOL;
	}
}