<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookis</title>
</head>
<body>
    <?php
    echo "<h1>modificar una cookie</h1><br>";

  $cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
  } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
  }

  echo "<h1>Eliminar una cookie</h1><br>";

  // set the expiration date to one hour ago
setcookie("user", "", time() - 3600);

echo "Cookie 'user' is deleted.";

setcookie("test_cookie", "test", time() + 3600, '/');

if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
  } else {
    echo "Cookies are disabled.";
  }
  echo "<h1>habilitar una cookie</h1><br>";

  setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}


  
    ?>
</body>
</html>