<?php
$db = mysqli_connect(db_server, db_username, db_password, db_database);
session_start();
$check = $_SESSION['car_login'];
$query = "SELECT username from login where username = |'$check'";
$combo = myseqli_query($db, $query);
$row = myseqli_fetch_assoc($combo);
$login_session = $row['username'];
 ?>
