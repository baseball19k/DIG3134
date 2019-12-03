<?php
session_start();
$dispusername = $dispemail = $dispphonenumber = $dispstreet = $dispcity = $dispzipcode = $dispstate = $disppassword = "";
if (isset($_POST['submit'])){
  if (empty($_POST['username']) && empty($_POST['password'])) {
    $wrongin = "That is incorrect";
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
  $phone = mysqli_real_escape_string($connection,$_POST["phonenumber"]);
  $state = mysqli_real_escape_string($connection,$_POST["state"]);
  $street = mysqli_real_escape_string($connection,$_POST["street"]);
  $city = mysqli_real_escape_string($connection,$_POST["city"]);
  $zip = mysqli_real_escape_string($connection,$_POST["zip"]);
  $user = stripslashes($user);
  $user = strip_tags($user);
  $user = stripcslashes($user);
  #password cleanup and validation
  $pass = stripslashes($pass);
  $pass = strip_tags($pass);
  $pass = stripcslashes($pass);
  $pass = sha1($pass);
  #phone cleanup and validation
  if (empty($phone)) {
     $dispphonenumber = "A street address is needed";
  } else {
    $phone = test_input($phone);

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
  if (empty($state)) {
     $dispstate = "A state is needed";
  } else {
    $state = test_input($state);
    if (!preg_match("/^[A-Z]{2}/",$state)) {
      $dispstate = "State must be two capital letters";
    }else{
      $state = stripslashes($state);
      $state = strip_tags($state);
      $state = stripcslashes($state);
    }
  }
  #street address cleanup
  if (empty($street)) {
     $dispstreet = "A street address is needed";
  } else {
    $street = test_input($street);
    if (!preg_match("/^\d+\s[A-z]+\s[A-z]+/",$street)) {
      $dispstreet = "Input a valid address";
    }else{
    $street = stripslashes($street);
    $street = strip_tags($street);
    $street = stripcslashes($street);
  }
  }
  #city cleanup
  if (empty($city)) {
    $dispcity = "City is required";
  } else {
    $city = test_input($city);
    if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
      $dispcity = "Is that a city?";
    }else{
      $city = stripslashes($city);
      $city = strip_tags($city);
      $city = stripcslashes($city);
    }
  }
  #zip cleanup
  if (empty($zip)) {
     $dispzipcode = "A zipcode is needed";
  } else {
    $zip = test_input($zip);
    if (!preg_match("/^[0-9]{5}/",$zip)) {
      $dispzipcode = "Enter a valid 5 digit zip code";
    }else{
      $zipcode = $zip;
      $zipcode = stripslashes($zipcode);
      $zipcode = strip_tags($zipcode);
      $zipcode = stripcslashes($zipcode);
    }
  }
  $query = "INSERT INTO car_login (id, username, password, phonenumber, email, state, zipcode, street, city) VALUES (NULL, '$user', '$pass', '$phone', '$email', '$state', '$zipcode', '$street', '$city')";
    mysqli_query($connection,$query);
    $_SESSION['logged_in']=true;
    header("location: index.php");
    mysqli_close($connection);
}
}
  ?>
