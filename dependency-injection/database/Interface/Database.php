<?php

interface Database
{
	public function connect();

	public function table($table);

	public function disconnect();
}