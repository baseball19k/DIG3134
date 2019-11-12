<?php
$username = "ja213385";
$password = "Ba$eball19k";
$dbname = "ja213385";
$user = $_POST['auser'];
$pass = $_POST['apass'];
$first = $_POST['first'];
$last = $_POST['last'];

$connection = mysqli_connect("localhost" , "$username" , "$password", "$dbname") or die(mysql_error());
$sql = "
INSERT INTO users2 (Username,Password,FirstName,LastName) VALUES('$user','$pass','$first','$last')";
mysqli_query($connection, $sql);
mysqli_close($connection);
?>
