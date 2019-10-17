<?php
$username = $email = $state = $zip = $city = $street = "";
  //for the state section
  $statewro ="State must be imputed as the two letter form";
  //for the zip code section
  $zipwro ="Zip Code must be 5 numbers";
  //for the street address
  $streetnone ="A street address is needed";
  $streetwro ="Input a valid address";
  //for the City
  $citywro ="Come on just put the city";
  //for the username section
  $usernamewro ="This Username is not valid, Must have letters and numbers with no special characters";
  //for the email section
  $emailwro ="This is not a valid email";
  $noemail ="You must input an email";
  //
  if (empty($_POST["email"])) {
     $dispemail = $noemail;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $dispemail = $emailwro;
    }
  }
  if (empty($_POST["street"])) {
     $dispstreet = $streetnone;
  } else {
    $street = test_input($_POST["street"]);
    // check if e-mail address is well-formed
    if (!preg_match(/^\d+\s[A-z]+\s[A-z]+/g,$street)) {
      $dispstreet = $streetwro;
    }
  }
?>
