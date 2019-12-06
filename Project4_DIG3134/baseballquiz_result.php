<?php
$missing = "";
if (isset($_POST['submit']))
  if (empty($_POST['which_sport']) && empty($_POST['jeter']) && empty($_POST['points']) && empty($_POST['logo']) && empty($_POST['chris']) && empty($_POST['yanks']) && empty($_POST['slam']) && empty($_POST['position']) && empty($_POST['leadoff']) && empty($_POST['innings'])){
    $missing = "You have to answer them all"
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
  $answer2 = $_POST['innings'];

  $totalBasketballCorrect = 0;
  if ($answer1 == "baseball") {
    $totalBasketballCorrect++;
  }
  if ($answer2 == "jeter"){
    $totalBasketballCorrect++;
  }
  if ($answer3 == "1"){
    $totalBasketballCorrect++;
  }
  if ($answer4 == "newYork"){
    $totalBasketballCorrect++;
  }
  if ($answer5 == "brewers"){
    $totalBasketballCorrect++;
  }
  if ($answer6 == "27"){
    $totalBasketballCorrect++;
  }
  if ($answer7 == "4"){
    $totalBasketballCorrect++;
  }
  if ($answer8 == "catcher"){
    $totalBasketballCorrect++;
  }
  if ($answer9 == "lead"){
    $totalBasketballCorrect++;
  }
  if ($answer10 == "9"){
    $totalBasketballCorrect++;
  }
  header("location: soccerquiz.php");
}
 ?>
