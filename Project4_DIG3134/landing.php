<!DOCTYPE HTML>
  <?php
    session_start();
    $wrongin = "";
    if (isset($_POST['submit'])){
      if (empty($_POST['username']) && empty($_POST['password'])){
        $wrongin = "You must input a username and password";
      } else{
        $username = "ja213385";
        $password = 'Baseball19k!';
        $dbname = "ja213385";
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $connection = mysqli_connect("localhost" , "$username" , "$password", "$dbname") or die(mysql_error());

        //time to clean up the inputs
        $user = stripslashes($user);
        $user = strip_tags($user);
        $user = stripcslashes($user);
        $pass = stripslashes($pass);
        $pass = strip_tags($pass);
        $pass = stripcslashes($pass);
        $pass = sha1($pass);
        $db = mysql_select_db($connection);
        $query = mysql_query("SELECT * from car_login where password='$pass' AND username='$user'", $connection);
        $rows = mysql_num_rows($query);
        if ($rows == 1){
          $_SESSION['logged_in']=$user;
          header("location: index.php");
        }else{
          $wrongin ="Username and Password do not match an existing profile";
        }
        mysql_close($connection);
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
      <!-- this is the login/landing page -->
      <h1></h1>
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
