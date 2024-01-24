<?php

// $fruits = ['apple', 'organge', 'pear'];

// Length
// echo count($fruits), PHP_EOL;

// Search
// var_dump(in_array('apple', $fruits));

// Add to array
// $fruits[] = 'banana';
// array_push($fruits, 'strawberry', 'blueberry');
// array_pop($fruits);
// array_unshift($fruits, 'mango');
// unset($fruits[1]);
// unset($fruits[3]);

// // Split into 2 chunks
// $chunked_array = array_chunk($fruits, 2);

// print_r($fruits);
// print_r($chunked_array);

// $arr1 = [1, 2, 3];
// $arr2 = [4, 5, 6];

// $arr3 = array_merge($arr1, $arr2);
// $arr4 = [...$arr1, ...$arr2];

// print_r($arr3);
// print_r($arr4);

// $a = ['green', 'red', 'yellow'];
// $b = ['avocado', 'apple', 'banana'];

// $combined = array_combine($a, $b);

// print_r($combined);

// $keys = array_keys($combined);
// print_r($keys);

// $flipped = array_flip($combined);
// print_r($flipped);

$numbers = range(1, 20);
// print_r($numbers);

// $newNumbers = array_map(function ($number) {
//   return "Number: $number";
// }, $numbers);

// print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn ($number) => $number < 10);
// print_r($lessThan10);

$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
// echo $sum;
