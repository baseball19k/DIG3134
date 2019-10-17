<?php
  session_start();
  if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){
      header("Location: login.php");
    }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Car Home</title>
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
      <div class = "hometitle">
        <h1>Follow the Florida Stormtrooper!</h1>
      </div>
      <div class = "homeopenner">
        <h3>You love Genesis Coupes but you don't know where to follow a build of one in progress? Well look no further you have found the Florida Stromtrooper. A white 2011 2.0T RSPEC Genesis Coupe is the perfect car to watch come to life. Follow for future upgrades to the car!</h3>
      </div>
      <div class = "premods">
        <p>Previous Modifications
          <ul>
            <li>Blowoff Valve</li>
            <li>Yellow fog lights</li>
            <li>Mishimoto Performance Radiator</li>
            <li>Exhaust</li>
            <li>Pioneer Radio</li>
            <li>2 10" Kicker Competition Subwoofers</li>
            <li>HID Headlights</li>
            <li>Rebadged to the new Genesis logo</li>
            <li>Wrapped the roof carbon fiber</li>
            <li>20" NICHE rims</li>
            <li>Bilstien Racing Suspension</li>
          </ul>
      </div>
      <div class="pichome">
        <img src="Pictures/bannerfocusgene.jpg" alt="dope picture">
      </div>
      <div class = "futmods">
        <p>Future Modifications</p>
          <ul>
            <li>New Headliner</li>
            <li>Fuel Injectors</li>
            <li>Evo Turbo</li>
            <li>Downpipe</li>
            <li>Stage 2 Clutch</li>
            <li>Performance Tune</li>
            <li>New Door Speakers and Tweeters</li>
            <li>Underglow</li>
          </ul>
      </div>
      <div class = "sellit">
        <p>The goal is to make it the nicest and fastest 2.0t Genesis in Central Florida and we will not stop till it has been complete. So stay tuned!</p>
      </div>
    </article>
  </body>
</html>
