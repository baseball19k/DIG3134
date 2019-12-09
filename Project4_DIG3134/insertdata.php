<?php
session_start();
$dispusername = $dispemail = $disppassword = "";
if (isset($_POST['submit'])){
  if (empty($_POST['username']) && empty($_POST['password'])) {
    $dispusername = "You must enter a username";
    $disppassword = "You must enter a password";
    $dispemail = "You have to put an email";
  }
  else{
  $username = "ja213385";
  $password = "Baseball19k!";
  $dbname = "ja213385";


  $connection = mysqli_connect("localhost" , "$username" , "$password", "$dbname") or die(mysql_error());  //
  #Username cleanup
  function test_input($data)
    {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
  $user = mysqli_real_escape_string($connection, $_POST['username']);
  $pass = mysqli_real_escape_string($connection,$_POST['password']);
  $email = mysqli_real_escape_string($connection,$_POST['email']);
  $user = stripslashes($user);
  $user = strip_tags($user);
  $user = stripcslashes($user);
  #password cleanup and validation
  $pass = stripslashes($pass);
  $pass = strip_tags($pass);
  $pass = stripcslashes($pass);
  $pass = sha1($pass);
  $query = "INSERT INTO quiz (id, username, password, email) VALUES (NULL, '$user', '$pass', '$email')";
    mysqli_query($connection,$query);
    $_SESSION['logged_in']=true;
    header("location: index.php");
    mysqli_close($connection);
}
}
  ?>
