<?php

require_once 'Interface/Database.php';

class Oracle implements Database
{
	public function __construct()
	{
		$this->connect();
	}

	public function connect()
	{
		echo "You are connecting to oracle database driver" . PHP_EOL;
	}

	public function table($table)
	{
		echo "You are using {$table} table for this model" . PHP_EOL;
	}

	public function disconnect()
	{
		echo "You are disconnect from oracle driver" . PHP_EOL;
	}
}