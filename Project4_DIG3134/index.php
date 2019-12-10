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
		<link rel="stylesheet" href="Styles/home.css">
    <link rel="icon" href=""/>
  </head>
<?php include('header.php');?>

<body>
	<article class="grid">
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
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
