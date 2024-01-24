<?php

function inverse($x)
{
  if (!$x) {
    throw new Exception('Division by zero.');
  }
  return 1 / $x;
}

echo inverse(5) . PHP_EOL;
try {
  echo inverse(5);
  echo inverse(0);
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), PHP_EOL;
} finally {
  echo 'First finally.' . PHP_EOL;
}

echo 'Hello World';
