<?php
	session_start();

	// variable declaration
	$dbuser = "ja213385";
	$dbpass = "Baseball19k!";
	$dbname = "ja213385";
	$errors = array();
	$total  = 0;
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect("localhost" , "$dbuser" , "$dbpass", "$dbname") or die(mysql_error());

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$email = mysqli_real_escape_string($db, $_POST['email']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($password)) { array_push($errors, "Password is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }

		// check for duplicates
		if(isset($username)){
			$mysql_get_users = "SELECT * FROM quiz where username='$username'";
			$results = mysqli_query($db, $mysql_get_users);

			if (mysqli_num_rows($results) >= 1) {
			array_push($errors, "Username already exists");
			}
		}


		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = sha1($password);//encrypt the password before saving in the database
			$query = "INSERT INTO quiz (username, password, email)
					  VALUES('$username', '$password', '$email')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ...

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = sha1($password);
			$query = "SELECT * FROM quiz WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
				
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}


	// QUIZ
	if (isset($_POST['submit'])) {
		if (empty($_POST['which_sport']) && empty($_POST['jeter']) && empty($_POST['points']) && empty($_POST['logo']) && empty($_POST['chris']) && empty($_POST['yanks']) && empty($_POST['slam']) && empty($_POST['position']) && empty($_POST['leadoff']) && empty($_POST['innings']) && empty($_POST['which_sport']) && empty($_POST['mj']) && empty($_POST['points']) && empty($_POST['logo']) && empty($_POST['pg']) && empty($_POST['kobe']) && empty($_POST['penalties']) && empty($_POST['positions']) && empty($_POST['tipoff']) && empty($_POST['quarters']) && empty($_POST['which_sport']) && empty($_POST['tb']) && empty($_POST['points']) && empty($_POST['logo']) && empty($_POST['ap']) && empty($_POST['tom']) && empty($_POST['penalties']) && empty($_POST['positions']) && empty($_POST['kickoff']) && empty($_POST['quarters']) && empty($_POST['which_sport']) && empty($_POST['messi']) && empty($_POST['points']) && empty($_POST['logo']) && empty($_POST['ronaldo']) && empty($_POST['trophies']) && empty($_POST['dribble']) && empty($_POST['card']) && empty($_POST['goal']) && empty($_POST['minutes'])){
			array_push($errors, "You have to answer them all");
		} else{
		$answer1 = $_POST['which_sport'];
		$answer2 = $_POST['jeter'];
		$answer3 = $_POST['points'];
		$answer4 = $_POST['logo'];
		$answer5 = $_POST['chris'];
		$answer6 = $_POST['yanks'];
		$answer7 = $_POST['slam'];
		$answer8 = $_POST['position'];
		$answer9 = $_POST['leadoff'];
		$answer10 = $_POST['innings'];
		$answer11 = $_POST['which_sport'];
		$answer12 = $_POST['mj'];
		$answer13 = $_POST['points'];
		$answer14 = $_POST['logo'];
		$answer15 = $_POST['pg'];
		$answer16 = $_POST['kobe'];
		$answer17 = $_POST['penalties'];
		$answer18 = $_POST['positions'];
		$answer19 = $_POST['tipoff'];
		$answer20 = $_POST['quarters'];
		$answer21 = $_POST['which_sport'];
		$answer22 = $_POST['tb'];
		$answer23 = $_POST['points'];
		$answer24 = $_POST['logo'];
		$answer25 = $_POST['ap'];
		$answer26 = $_POST['tom'];
		$answer27 = $_POST['penalties'];
		$answer28 = $_POST['positions'];
		$answer29 = $_POST['kickoff'];
		$answer30 = $_POST['quarters'];
		$answer31 = $_POST['which_sport'];
		$answer32 = $_POST['messi'];
		$answer33 = $_POST['points'];
		$answer34 = $_POST['logo'];
		$answer35 = $_POST['ronaldo'];
		$answer36 = $_POST['trophies'];
		$answer37 = $_POST['dribble'];
		$answer38 = $_POST['card'];
		$answer39 = $_POST['goal'];
		$answer40 = $_POST['minutes'];

		//..

		if ($answer1 == "baseball") {
			$total++;
		}
		if ($answer2 == "jeter"){
			$total++;
		}
		if ($answer3 == "1"){
			$total++;
		}
		if ($answer4 == "newYork"){
			$total++;
		}
		if ($answer5 == "brewers"){
			$total++;
		}
		if ($answer6 == "27"){
			$total++;
		}
		if ($answer7 == "4"){
			$total++;
		}
		if ($answer8 == "catcher"){
			$total++;
		}
		if ($answer9 == "lead"){
			$total++;
		}
		if ($answer10 == "9"){
			$total++;
		}

		//..

		if ($answer11 == "basketball") {
		$total++;
		}
		if ($answer12 == "jordan"){
		$total++;
		}
		if ($answer13 == "3"){
		$total++;
		}
		if ($answer14 == "boston"){
		$total++;
		}
		if ($answer15 == "clippers"){
		$total++;
		}
		if ($answer16 == "5"){
		$total++;
		}
		if ($answer17 == "double"){
		$total++;
		}
		if ($answer18 == "powerForward"){
		$total++;
		}
		if ($answer19 == "center"){
		$total++;
		}
		if ($answer20 == "4"){
		$total++;
		}

		//..

		if ($answer21 == "football") {
		$total++;
		}
		if ($answer22 == "brady"){
		$total++;
		}
		if ($answer23 == "6"){
		$total++;
		}
		if ($answer24 == "ne"){
		$total++;
		}
		if ($answer25 == "redskins"){
		$total++;
		}
		if ($answer26 == "6"){
		$total++;
		}
		if ($answer27 == "pass"){
		$total++;
		}
		if ($answer28 == "qb"){
		$total++;
		}
		if ($answer29 == "kick"){
		$total++;
		}
		if ($answer30 == "4"){
		$total++;
		}

		//..

		if ($answer31 == "soccer") {
			$total++;
		}
		if ($answer32 == "lionel"){
			$total++;
		}
		if ($answer33 == "1"){
			$total++;
		}
		if ($answer34 == "juventus"){
			$total++;
		}
		if ($answer35 == "jv"){
			$total++;
		}
		if ($answer36 == "34"){
			$total++;
		}
		if ($answer37 == "feet"){
			$total++;
		}
		if ($answer38 == "red"){
			$total++;
		}
		if ($answer39 == "goalie"){
			$total++;
		}
		if ($answer40 == "90"){
			$total++;
		}

		if (count($errors) == 0) {
			$_SESSION['score'] = $total;
			$_SESSION['done'] == true;

			$query = "INSERT INTO quiz (results)
					  VALUES('$total')";
			mysqli_query($db, $query);

			}else {
				array_push($errors, "You have to answer them all");
			}
		}
	}
?>
