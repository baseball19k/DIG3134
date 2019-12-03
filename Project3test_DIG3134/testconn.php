<?php
$username = "ja213385";
$password = "Baseball19k!";
$dbname = "ja213385";
$connection = mysqli_connect("localhost" , "$username" , "$password", "$dbname");
if(!$connection){
  echo "negative";
  die(mysql_error());
} else{
  echo "success";
  mysqli_close($connection);
}

$fa = "dig3134pass";
echo sha1($fa);
?>
