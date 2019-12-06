<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){
    header("Location: landing.php");
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
       <div class = "mainText">
       </div>
       <div class = "Quiz">
         <a href ="quiz.php">
           <h1>Quiz</h1>
         </a>
       </div>
     </article>
   </body>
 </html>
