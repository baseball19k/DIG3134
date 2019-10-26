<!DOCTYPE HTML>
  <?php
    session_start();
    $wrongin = "";
    $username = "dig3134user";
    $password = "dig3134pass";

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
      {
        header("Location: index.php");
      }
    if (isset($_POST['username']) && isset($_POST['password'])) {
      if ($_POST['username'] == $username && $_POST['password'] == $password)
      {
        $_SESSION['logged_in'] = true;
        header("Location: index.php");
      }
      else{
        $wrongin = "That was incorrect";
      }
    }


?>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="Styles/cars.css">
    <meta charset="utf-8">
    <style>
      .error {color: #FF0000;}
    </style>
  </head>
  <body>
    <article class="grid">
    <div class="loginopenner">
      <h1>Welcome to The site to follow your favorite Genesis Coupe in Central Florida! Login to get access and more details!</h1>
    </div>
      <div class= "emailforming">
      <form method="post" action="login.php">
        <div class="inputs">
          <span class="error"><?php echo $wrongin?></span><br>
          <label for="userin">Username:</label><br>
          <input type="text" id="userin" name="username"><br>
          <label for="passin">Password:</label><br>
          <input type="text" id="passin" name="password"><br>
          <input type="checkbox" onclick="myFunction()">Make it private<br>
        </div>
        <div class="subbutt">
          <input type="submit" name="submit" value="Login">
        </div>
        </form>
        <script>
        function myFunction() {
          var x = document.getElementById("passin");
          if (x.type === "text") {
            x.type = "password";
          } else {
            x.type = "text";
          }
        }
        </script>
      </div>
      <div class="emailforming">
        <a href="makeacc.php">Make an Account</a>
      </div>
  </article>
  </body>
</html>
