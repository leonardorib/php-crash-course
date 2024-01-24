<?php
// Simply array
$numbers = [1, 33, 55, 77, 99];
$fruits = array('Apple', 'Orange', 'Banana');

//var_dump($numbers);

// var_dump($numbers);
// echo $fruits[1];

// Associative array
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];
// echo $colors[4];

$hex = [
  'red' => '#f00',
  'blue' => '#00f',
  'green' => '#0f0'
];
// echo $hex['green'];

$person = [
  'first_name' => 'Leo',
  'last_name' => 'Ribeiro',
  'age' => 28,
];
// echo $person['first_name'];

// Multi-dimensional array
$people = [
  [
    'first_name' => 'Leo',
    'last_name' => 'Ribeiro',
    'age' => 28,
  ],
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'age' => 35,
  ],
  [
    'first_name' => 'Mary',
    'last_name' => 'Smith',
    'age' => 21,
  ]
];
// var_dump($people[1]);
// echo $people[1]['first_name'];

var_dump(json_encode($people));
