<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];

if(isset($_POST["submit"]))
  {
    $username = print_r($_POST['username'], true);
    $password = print_r($_POST['password'], true);

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
      {
        header("Location: index.php");
      }
    if (isset($_POST['username']) && isset($_POST['password'])) {
      if ($_POST['username'] == $username && $_POST['password'] == $password)
      {

        $_SESSION['logged_in'] = true;

        header("Location: index.php");
        sleep(5);
        $alert = "You have successfully created an account, " .$username. "You will be redirected to the homepage in 5 seconds.";


      }
      else{
        header("Location: makeacc.php");
      }
    }
  }
  $dispusername = $dispemail = $dispphonenumber = $dispstreet = $dispcity = $dispzipcode = $dispstate = $disppassword = "";
  $phonenumber = $state = $zip = $city = $street = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["street"])) {
       $dispstreet = "A street address is needed";
    } else {
      $street = test_input($_POST["street"]);
      if (!preg_match("/^\d+\s[A-z]+\s[A-z]+/",$street)) {
        $dispstreet = "Input a valid address";
      }
    }
    if (empty($_POST["city"])) {
      $dispcity = "City is required";
    } else {
      $city = test_input($_POST["city"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
        $dispcity = "Is that a city?";
      }
    }
    if (empty($_POST["state"])) {
       $dispstate = "A state is needed";
    } else {
      $state = test_input($_POST["state"]);
      if (!preg_match("/^[A-Z]{2}/",$state)) {
        $dispstate = "State must be two capital letters";
      }
    }
    if (empty($_POST["zip"])) {
       $dispzipcode = "A zipcode is needed";
    } else {
      $zip = test_input($_POST["zip"]);
      if (!preg_match("/^[0-9]{5}/",$zip)) {
        $dispzipcode = "Enter a valid 5 digit zip code";
      }
    }
    if (empty($_POST["phonenumber"])) {
       $dispphonenumber = "A street address is needed";
    } else {
      $phonenumber = test_input($_POST["phonenumber"]);

      if (!preg_match("/^[0-9]{10}/",$phonenumber)) {
        $dispphonenumber = "Input a valid phone number";
      }
    }

  }
  $phonenumber = preg_replace('/(\d*)/', '', $phonenumber);
  function test_input($data)
    {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

?>
