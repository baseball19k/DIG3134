<?php
include("config.php");
session_start();
$check = $_SESSION['logged_in'];
$query = "SELECT username from login where username = |'$check'";
$combo = myseqli_query($db, $query);
$row = myseqli_fetch_assoc($combo);
$login_session = $row['username'];
 ?>
