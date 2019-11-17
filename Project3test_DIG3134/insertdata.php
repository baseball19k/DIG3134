<?php
#include('makeacc.php')
if (isset($_POST['submit'])){
  if (empty($_POST['username']) && empty($_POST['password'])) {
    $wrongin = "That is incorrect";
  }
  else{
  $username = "ja213385";
  $password = 'Ba$eball19k';
  $dbname = "ja213385";
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $email = $_POST['email'];

  $connection = mysqli_connect("localhost" , "$username" , "$password", "$dbname") or die(mysql_error());  //(host,username,password,DB name) Connects to mysql server. Throws error if it cannot connect.
  #Username cleanup
  $user = stripslashes($user);
  $user = strip_tags($user);
  $user = stripcslashes($user);
  #password cleanup and validation
  $pass = stripslashes($pass);
  $pass = strip_tags($pass);
  $pass = stripcslashes($pass);
  $pass = sha1($pass);
  #phone cleanup and validation
  if (empty($_POST["phonenumber"])) {
     $dispphonenumber = "A street address is needed";
  } else {
    $phone = test_input($_POST["phonenumber"]);

    if (!preg_match("/^[0-9]{10}/",$phone)) {
      $dispphonenumber = "Input a valid phone number";
    } else {
      $phone = preg_replace('/(\d*)/', '', $phone);
      $phone = stripslashes($phone);
      $phone = strip_tags($phone);
      $phone = stripcslashes($phone);
      $phone = htmlspecialchars($phone);
    }
  }

  #state cleanup and validation
  if (empty($_POST["state"])) {
     $dispstate = "A state is needed";
  } else {
    $state = test_input($_POST["state"]);
    if (!preg_match("/^[A-Z]{2}/",$state)) {
      $dispstate = "State must be two capital letters";
    }else{
      $state = stripslashes($state);
      $state = strip_tags($state);
      $state = stripcslashes($state);
    }
  }
  #street address cleanup
  if (empty($_POST["street"])) {
     $dispstreet = "A street address is needed";
  } else {
    $street = test_input($_POST["street"]);
    if (!preg_match("/^\d+\s[A-z]+\s[A-z]+/",$street)) {
      $dispstreet = "Input a valid address";
    }else{
    $street = stripslashes($street);
    $street = strip_tags($street);
    $street = stripcslashes($street);
  }
  }
  #city cleanup
  if (empty($_POST["city"])) {
    $dispcity = "City is required";
  } else {
    $city = test_input($_POST["city"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
      $dispcity = "Is that a city?";
    }else{
      $city = stripslashes($city);
      $city = strip_tags($city);
      $city = stripcslashes($city);
    }
  }
  #zip cleanup
  if (empty($_POST["zip"])) {
     $dispzipcode = "A zipcode is needed";
  } else {
    $zip = test_input($_POST["zip"]);
    if (!preg_match("/^[0-9]{5}/",$zip)) {
      $dispzipcode = "Enter a valid 5 digit zip code";
    }else{
      $zipcode = $zip;
      $zipcode = stripslashes($zipcode);
      $zipcode = strip_tags($zipcode);
      $zipcode = stripcslashes($zipcode);
    }
  }

  $sql = "
  INSERT INTO car_login (username,password,phonenumber,email,state,zipcode,street,city) VALUES('$user','$pass','$phone','$email','$state','$zipcode','street','city')"; //Inserts data into the db, users2 table. Values correspond to fields

  mysqli_query($connection, $sql); //(connection variable, query variable)
  $query = mysql_query("SELECT * from car_login where password='$pass' AND username='$user'", $connection);
  $rows = mysql_num_rows($query);
  if ($rows == 1){
    $_SESSION['logged_in']=$user;
    header("location: index.php");
    sleep(3);
  }
  mysqli_close($connection);
  ?>
}
