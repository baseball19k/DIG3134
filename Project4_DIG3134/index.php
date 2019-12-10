<?php
	session_start();

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <title>Home</title>
    <!-- external css -->
    <link rel="stylesheet" href="style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Arvo:700%7CKanit:300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="Styles/home.css">
    <link rel="icon" href=""/>
  </head>
<?php include('header.php');?>

<body>
	<article class="grid">
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
