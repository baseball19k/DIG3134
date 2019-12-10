<?php include('server.php') ?>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <title>Login</title>
    <!-- external css -->
    <link rel="stylesheet" href="style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Arvo:700%7CKanit:300&display=swap" rel="stylesheet">
    <link rel="icon" href=""/>
  </head>

	<body>

	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>
