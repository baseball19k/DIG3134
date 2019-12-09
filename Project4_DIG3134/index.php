<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){
    header("Location: login.php");
  }
 ?>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Home</title>
   </head>
   <body>
     <article class="grid">
       <nav class="grid nav">
         <div class = "home">
           <a href ="home.php">
             <h1>Home</h1>
           </a>
         </div>
         <div class = "Quiz">
           <a href ="quiz.php">
             <h1>Quiz</h1>
           </a>
         </div>
         <div class = "profile">
          <a href ="profile.php">
            <h1>Profile</h1>
          </a>
        </div>
         <div class = "logoutbutton">
           <a href="logout.php">
             <h2>Logout</h2>
           </a>
         </div>
       </nav>
       <div class = "mainTextHead">
         <h2>This your sports knowledge!</h2>
       </div>
       <div class = "mainTextPar">
         <p>We have a unique quiz for the four main sports in the United States to see where you stand in talking about sports.</p>
       </div>
       <div class = "Quiztab">
         <a href ="quiz.php">
           <h1>Take the Quiz</h1>
         </a>
       </div>
       <div class="farleft">
         <img src="Pictures/superbowlchamp.jpg" alt="Football">
       </div>
       <div class="midleft">
         <img src="Pictures/basketballchamp.jpg" alt="Basketball">
       </div>
       <div class="midright">
         <img src="Pictures/worldserieschamp.jpg" alt="Baseball">
       </div>
       <div class="farright">
         <img src="Pictures/soccerchamp.jpg" alt="Soccer">
       </div>
     </article>
   </body>
 </html>
