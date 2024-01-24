<?php

$file = 'extras/users.txt';

if (file_exists($file)) {
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  $contents = 'Leo' . PHP_EOL . 'John' . PHP_EOL . 'Jane';
  fwrite($handle, $contents);
  fclose($handle);
}
