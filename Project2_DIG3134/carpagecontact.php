<?php
  session_start();
  if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){
      header("Location: login.php");
    }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Car contact</title>
    <link rel="stylesheet" href="Styles/cars.css"
  </head>
  <body>
    <article class="grid">
      <div class = "home">
        <a href = "index.html">
          <h1>Home</h1>
        </a>
      </div>
      <div class = "contact">
        <a href = "carpagecontact.html">
          <h1>Contact</h1>
        </a>
      </div>
      <div class = "game">
        <a href = "carrace.html">
          <h1>Game</h1>
        </a>
      </div>
      <div class ="sellit">
        <p>We want to send you a quick reminder of the car you hope to get in the near future. We feel that if you get a reminder of it you are more likely to work hard towards getting the vehicle and by us sending you the email reminder we feel that we are doing our part to help. If you don't want a car anytime soon that is understandable then just put down your dream car or one you will eventually try to work towards.</p>
      </div>
      <div class = "emailforming">
        <form action="email.php" method="post">
          <div  class="inputs">
            <label for="emailadd">What's your Email address:</label><br>
            <input type="text" id="emailadd" name="email" placeholder="Email Address"><br>
            <label for="cartype">What car do you want soon:</label><br>
            <input type="text" id="cartype" name="car" placeholder="Type of Car"><br>
          </div>
          <div class="subbutt">
          <input type="submit">
          </div>
        </form>
        </div>
        <div class = "pichome">
          <img src="Pictures/twitterbanner.jpg" alt="litty picture">
        </div>
    </article>
  </body>
</html>
