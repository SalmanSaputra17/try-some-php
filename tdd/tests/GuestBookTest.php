<?php

use SalmanSaputra\Guest;
use PHPUnit\Framework\TestCase;

class GuestBookTest extends TestCase
{
	public function testGuestMustHaveName()
	{
		$guest = new Guest("salman saputra");
		$result = $guest->getName();

		$this->assertEquals('salman saputra', $result);
	}
}