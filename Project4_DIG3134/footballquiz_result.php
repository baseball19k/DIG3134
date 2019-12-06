<?php
$missing = "";
if (isset($_POST['submit']))
  if (empty($_POST['which_sport']) && empty($_POST['tb']) && empty($_POST['points']) && empty($_POST['logo']) && empty($_POST['ap']) && empty($_POST['tom']) && empty($_POST['penalties']) && empty($_POST['positions']) && empty($_POST['kickoff']) && empty($_POST['quarters'])){
    $missing = "You have to answer them all"
  } else{
  $answer1 = $_POST['which_sport'];
  $answer2 = $_POST['tb'];
  $answer3 = $_POST['points'];
  $answer4 = $_POST['logo'];
  $answer5 = $_POST['ap'];
  $answer6 = $_POST['tom'];
  $answer7 = $_POST['penalties'];
  $answer8 = $_POST['positions'];
  $answer9 = $_POST['kickoff'];
  $answer2 = $_POST['quarters'];

  $totalFootballCorrect = 0;
  if ($answer1 == "football") {
    $totalFootballCorrect++;
  }
  if ($answer2 == "brady"){
    $totalFootballCorrect++;
  }
  if ($answer3 == "6"){
    $totalFootballCorrect++;
  }
  if ($answer4 == "ne"){
    $totalFootballCorrect++;
  }
  if ($answer5 == "redskins"){
    $totalFootballCorrect++;
  }
  if ($answer6 == "6"){
    $totalFootballCorrect++;
  }
  if ($answer7 == "pass"){
    $totalFootballCorrect++;
  }
  if ($answer8 == "qb"){
    $totalFootballCorrect++;
  }
  if ($answer9 == "kick"){
    $totalFootballCorrect++;
  }
  if ($answer10 == "4"){
    $totalFootballCorrect++;
  }
  header("location: basketquiz.php");
}
 ?>
