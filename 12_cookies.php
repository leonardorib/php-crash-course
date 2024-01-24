<?php

// Set cookie
setcookie('name', 'Leo', time() + 86400); // 1 day


if (isset($_COOKIE['name'])) {
  echo 'Cookie set: ' . $_COOKIE['name'];
} else {
  echo 'Cookie not set';
}

// Unset cookie
// setcookie('name', 'Leo', time() - 86400 * 2);
unset($_COOKIE['name']);

if (isset($_COOKIE['name'])) {
  echo 'Cookie set: ' . $_COOKIE['name'];
} else {
  echo 'Cookie not set';
}
