<?php

session_start();

if (isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if ($username === 'leo' && $password === 'password') {
    $_SESSION['username'] = $username;
    header('Location: /php-crash-course/extras/dashboard.php');
  } else {
    echo 'Incorrect login';
  }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div>
    <label for="username">Username: </label>
    <input type="text" name="username">
  </div>
  <div>
    <label for="password">Password: </label>
    <input type="password" name="password">
  </div>
  <button type="submit" name="submit">Submit</button>
</form>