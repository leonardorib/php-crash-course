<?php
/* --------- PHP Data Types --------- */
/*
  - String
  - Integer
  - Float (floating point numbers - also called double)
  - Boolean
  - Array
  - Object
  - NULL
  - Resource
*/

/* --------- Variable Rules --------- */
/*
  - Prefix $
  - Start with a letter or an underscore
  - Only letters, numbers and underscores
  - Case sensitive
*/

$name = 'Leo';
$age = 28;
$has_kids = false;
$cash_on_hand = 20.75;

// echo $name, PHP_EOL;
// var_dump($has_kids); PHP_EOL;
// var_dump($cash_on_hand); PHP_EOL;

// echo $name . ' is ' . $age . ' years old.', PHP_EOL;
// echo "$name is $age years old.", PHP_EOL;

// $x = '5' + '5';
// var_dump($x);

// echo 10 - 5;
// echo 10 % 3;

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
echo HOST;
