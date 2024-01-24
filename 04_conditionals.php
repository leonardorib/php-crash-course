<?php

/* If Statements */
// $age = 20;
// if ($age >= 18) {
//   echo 'You can drink beer.';
// } else {
//   echo 'You can drink juice.';
// }

// $t = date('H');

// if ($t < 12) {
//   echo 'Good morning!';
// } elseif ($t < 17) {
//   echo 'Good afternoon!';
// } else {
//   echo 'Goog evening!';
// }

$posts = ['First Post'];
// if (!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo 'There are no posts.';
// }
//echo !empty($posts) ? $posts[0] : 'There are no posts.';

//$firstPost = !empty($posts[0]) ? $posts[0] : null;
// $firstPost = $posts[0] ?? null;
// echo $firstPost;

$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is something else.';
}
