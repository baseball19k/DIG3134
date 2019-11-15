<?php
  include("connection.php");
  session_start();
  if(isset($_SESSION['logged_in'])){
    header("location: index.php");
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
<article class="grid">
    <div class="emailforming">
      <h1>Create an Account!</h1>
    </div>
    <?php if(isset($_POST['username']) && isset($_POST['password'])){ ?><div class="alert alert-success" role="alert"> <?php echo $alert; ?> </div><?php } ?>
    <div class= "emailforming">
    <form method="post" action="makeaccount.php">
      <span class="error"><?php echo $alert?></span><br>
      /*username section*/
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
      /*zipcode section*/
      <label for "zipin">Zip Code:<br/>
      <input type="text" id="zipin" name="zip" maxlength="5"><span class="error"><?php echo $dispzipcode?></span><br/>
      /*state section*/
      <label for "statein">State:<br/>
      <input type="text" id="statein" name="state" maxlength="2"><span class="error"><?php echo $dispstate?></span><br/>
      /*Password section*/
      <label for "passin">Password<br/>
      <input type="text" id="passin" name="password"><span class="error"><?php echo $disppassword?></span><br/>
      <input type="checkbox" onclick="myFunction()">Make it private<br>
      /*submit button*/
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
    <a href="logout.php">You have an account?</a>
    <div class= "emailforming">
    </article>
  </body>
</html>
