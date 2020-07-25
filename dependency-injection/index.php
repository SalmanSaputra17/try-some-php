<?php

require 'database/Mysql.php';
require 'database/Oracle.php';
require 'model/User.php';

// $user = new User(new Mysql());
$user = new User(new Oracle());

$user->info();