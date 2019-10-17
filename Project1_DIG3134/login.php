<!DOCTYPE html>
<?php
  session_start();

  $username = "dig3134user";
  $password = "dig3134pass";

  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
    header("Location: index.html");
  }
  if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
      $_SESSION['logged_in'] = true;
      header("Location: index.html");
    }
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" action="index.php">
      Username:<br/>
      <input type="text" name="username"><br/>
      Password<br/>
      <input type="password" name="password"><br/>
      <input type="submit" value="Login">
    </form>
  </body>
</html>
