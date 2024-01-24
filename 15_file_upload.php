<?php
if (isset($_POST['submit'])) {
  if (!empty($_FILES['file']['name'])) {
    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $target_dir = "uploads/$file_name";

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    if (in_array($file_ext, $allowed_ext)) {
      if ($file_size < 2097152) {
        move_uploaded_file($file_tmp, $target_dir);
        $message = '<p style="color: green;">File uploaded successfully</p>';
      } else {
        $message = '<p style="color: red;">File size must be less than 2MB</p>';
      }
    } else {
      $message = '<p style="color: red;">File type not allowed</p>';
    }
  } else {
    $message = '<p style="color: red;">Please choose a file</p>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>

<body>
  <?php echo $message ?? null; ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <label for="file">Select image to upload: </label>
    <input type="file" name="file">
    <input type="submit" value="Submit" name="submit">
  </form>
</body>

</html>