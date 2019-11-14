<?php
session_start();
$error = '';

if (isset($_POST['submit'])){
  if (empty($_POST['username']) && empty($_POST['password'])) {
    $wrongin = "That is incorrect";
  }
  else{
    $username = $_POST['username'];
    $password = $_POST['password'];

$db = mysqli_connect(db_server, db_username, db_password, db_database);
$query = "SELECT username, password from car_login where username=? AND password=? LIMIT 1";
$stmt = $db -> prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute():
$stmt->bind_result($username, $password);
$stmt->store_result();

if($stmt->fetch())
  {
    $_SESSION['car_login'] = $username;
    header("location: index.php");
  }
else {
  $wrongin = "That is incorrect";
      }
mysqli_close($db);
}
}
?>
