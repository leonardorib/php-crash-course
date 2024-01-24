<?php

// $y = 2;
// function someFn()
// {
//   global $y;
//   echo $y;
//   echo 'Function called';
// }
// global $x;
// echo $x;
// someFn();

// function registerUser($email)
// {
//   echo "$email registered";
// }
// registerUser("test_user@email.com");

function sum($num1 = 0, $num2 = 0)
{
  return $num1 + $num2;
}
$number = sum(4, 5);
echo sum(4, 5), PHP_EOL;
echo sum(), PHP_EOL;

$subtract = function ($num1, $num2) {
  return $num1 - $num2;
};
echo $subtract(5, 4), PHP_EOL;

$multiply = fn ($num1, $num2) => $num1 * $num2;
echo $multiply(5, 4), PHP_EOL;
