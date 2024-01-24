<?php
function render_server_info_list_items()
{

  foreach ($_SERVER as $key => $value) {
    echo "<li><strong>$key</strong> $value</li>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <ul>
    <?php render_server_info_list_items(); ?>
  </ul>
</body>

</html>