<?php
  session_start();
  $username = $password = "";

  if(isset($_POST["submit"]))
    {
      if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
        {
          header("Location: index.php");
        }
      if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password)
        {
          $_SESSION['logged_in'] = true;
          header("Refresh: 5; Location: index.php");
          //echo "You have successfully created an account," .$_POST["username"]. "You will be redirected to the homepage in 5 seconds.";
        }
      }
      //header("refresh:5; Location: ./index1.php");

    }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Creating an Account</title>
    <link rel="stylesheet" href="Styles/cars.css">
    <style>
      .error {color: #FF0000;}
    </style>
  </head>
  <body>
    <?php
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
    <article class="grid">
    <div class="homelog">
      <h1>Create an Account!</h1>
    </div>
    <div class= "emailforming">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for "userin">Username:</label><br/>
      <input type="text" id="userin" name="username"><span class="error"><?php echo $dispusername?></span><br/>
      <label for "emailin">Email Address:<br/>
      <input type="text" id="emailin" name="email"><span class="error"><?php echo $dispemail?></span><br/>
      <label for "phonein">Phone Number:<br/>
      <input type="text" id="phonein" name="phonenumber"><span class="error"><?php echo $dispphonenumber?></span><br/>
      <label for "streetin">Street:<br/>
      <input type="text" id="streetin" name="street"><span class="error"><?php echo $dispstreet?></span><br/>
      <label for "cityin">City:<br/>
      <input type="text" id="cityin" name="city"><span class="error"><?php echo $dispcity?></span><br/>
      <label for "zipin">Zip Code:<br/>
      <input type="text" id="zipin" name="zip" maxlength="5"><span class="error"><?php echo $dispzipcode?></span><br/>
      <label for "statein">State:<br/>
      <input type="text" id="statein" name="state" maxlength="2"><span class="error"><?php echo $dispstate?></span><br/>
      <label for "passin">Password<br/>
      <input type="text" id="passin" name="password"><span class="error"><?php echo $disppassword?></span><br/>
      <input type="checkbox" onclick="myFunction()">Make it private<br>
      <input type="submit" name="submit" value="Login">
      <script>
      function myFunction() {
        var x = document.getElementById("passin");
        if (x.type === "text") {
          x.type = "password";
        } else {
          x.type = "text";
        }
      }
      </script>
    </form>
    <a href="login.php">You have an account?</a>
    <div class= "emailforming">
    </article>
  </body>
</html>
