<?php

require 'database/Mysql.php';
require 'database/Oracle.php';
require 'model/User.php';

$user = new User(new Mysql());

$user->info();