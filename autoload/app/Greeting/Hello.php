<?php

namespace App\Greeting;

class Hello
{
	public function sayHello($name)
	{
		echo "Hello {$name} !" . PHP_EOL;
	}

	public function greeting($time)
	{
		echo  "good {$time}" . PHP_EOL;
	}
}