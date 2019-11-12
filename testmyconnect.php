<?php
$username = "ja213385";
$password = 'Ba$eball19k';
$dbname = "ja213385";

$connection = mysqli_connect("localhost" , "$username" , "$password", "$dbname");
$sql = "CREATE TABLE users2 (
        ID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(ID),
        Username varchar(20),
        Password varchar(20),
        FirstName varchar(20),
        LastName varchar(20)
       )";
      mysqli_query($connection, $sql); //or die(‘Could not create table:  . mysql_error());

 ?>
