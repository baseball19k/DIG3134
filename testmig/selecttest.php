<?php

$username = "ja213385";
$password = "Ba$eball19k";
$dbname = "ja213385";
$account = $_POST['account'];

$connection = mysqli_connect("localhost" , "$username" , "$password", "$dbname") or die(mysql_error());  //(host,username,password,DB name) Connects to mysql server. Throws error if it cannot connect.

$sql = "SELECT * FROM accounts WHERE account='".$account."' LIMIT 1"; //LIMIT 1 makes sure we only draw one row from the database
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) == 1){ 		//The number of rows contained in the result of the query that was just run.. equals 1, meaning that something was found. Remember, we limited it to 1, so it can't be above 1, but it can be 0 (not found)
		$row = mysqli_fetch_row($result);
		echo "Account ID: " . $row[2] . "<br>";
		echo "Name: " . $row[0] . "<br>";
		echo "Password: " . $row[1] . "<br>";
		exit();
	}else{
		echo "Account Does Not Exist";
		exit();
}

mysqli_close($connection);


?>
