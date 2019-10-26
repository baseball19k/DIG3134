<?php
  session_start();
  if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){
      header("Location: login.php");
    }
?>
<html>
  <head>
    <title>Win it all</title>
    <link rel="stylesheet" href="Styles/cars.css"
  </head>
  <body>
    <article class="grid">
      <nav class="grid nav">
      <div class = "home">
        <a href = "index.php">
          <h1>Home</h1>
        </a>
      </div>
      <div class = "contact">
        <a href = "carpagecontact.php">
          <h1>Contact</h1>
        </a>
      </div>
      <div class = "game">
        <a href = "carracegame.php">
          <h1>Game</h1>
        </a>
      </div>
      <div class = "logoutbutton">
        <a href="logout.php">
          <h2>Logout</h2>
        </a>
      </div>
      </nav>
    <div class="hometitle">
      <h1>Can you win?</h1>
    </div>
    <div class="sellit">
      <h3>The objective of the game is to see if you are able to bet which car will win. Do you have what it takes?</h3>
    </div>
    <div class="pichome">
      <img src="Pictures/focusgenepainting.jpg" alt="litty picture">
    </div>
    <div class="homeopenner">
    <form action="carrace.php" method="get">
    <label for="firnam">Enter your first name:</label><br>
    <input type="text" id="firnam" name="name" placeholder="First Name"><br>
    <label for="carcho">Which car do you choose? (1 - 4 numbers only):</label><br>
    <input type="text" id="carcho" name="number" placeholder="Choose a Car"><br>
    <input type="submit">
    </form>
  </div>
  </article>
  </body>
</html>
