<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Greeting\Hello;

$hello = new Hello();

$hello->sayHello("salman");
$hello->greeting("afternoon");