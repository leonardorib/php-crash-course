<?php

$string = 'Hello world';

// Length
echo strlen($string), PHP_EOL;

// Find position first occurence
echo strpos($string, 'o'), PHP_EOL;

// Find position last occurence
echo strrpos($string, 'o'), PHP_EOL;

// Reverse string
echo strrev($string), PHP_EOL;

// Make all uppercase
echo strtoupper($string), PHP_EOL;

// Make all lowercase
echo strtolower($string), PHP_EOL;

// Capitalize words
echo ucwords($string), PHP_EOL;

// Starts with
if (str_starts_with($string, 'H')) {
  echo 'String starts with H', PHP_EOL;
}

// Ends with
if (str_ends_with($string, 'd')) {
  echo 'String ends with d', PHP_EOL;
}

$string2 = '<script>alert(1)</script>';
echo htmlspecialchars($string2), PHP_EOL;

printf('%s likes to %s', 'Leo', 'code');
PHP_EOL;
printf('1+1=%d', 1 + 1);
PHP_EOL;
printf('%.2f', 1.23456789);
PHP_EOL;
