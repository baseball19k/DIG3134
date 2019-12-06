<?php
$missing = "";
if (isset($_POST['submit']))
  if (empty($_POST['which_sport']) && empty($_POST['mj']) && empty($_POST['points']) && empty($_POST['logo']) && empty($_POST['pg']) && empty($_POST['kobe']) && empty($_POST['penalties']) && empty($_POST['positions']) && empty($_POST['tipoff']) && empty($_POST['quarters'])){
    $missing = "You have to answer them all"
  } else{
  $answer1 = $_POST['which_sport'];
  $answer2 = $_POST['mj'];
  $answer3 = $_POST['points'];
  $answer4 = $_POST['logo'];
  $answer5 = $_POST['pg'];
  $answer6 = $_POST['kobe'];
  $answer7 = $_POST['penalties'];
  $answer8 = $_POST['positions'];
  $answer9 = $_POST['tipoff'];
  $answer2 = $_POST['quarters'];

  $totalBasketballCorrect = 0;
  if ($answer1 == "basketball") {
    $totalBasketballCorrect++;
  }
  if ($answer2 == "jordan"){
    $totalBasketballCorrect++;
  }
  if ($answer3 == "3"){
    $totalBasketballCorrect++;
  }
  if ($answer4 == "boston"){
    $totalBasketballCorrect++;
  }
  if ($answer5 == "clippers"){
    $totalBasketballCorrect++;
  }
  if ($answer6 == "5"){
    $totalBasketballCorrect++;
  }
  if ($answer7 == "double"){
    $totalBasketballCorrect++;
  }
  if ($answer8 == "powerForward"){
    $totalBasketballCorrect++;
  }
  if ($answer9 == "center"){
    $totalBasketballCorrect++;
  }
  if ($answer10 == "4"){
    $totalBasketballCorrect++;
  }
  header("location: baseballquiz.php");
}
 ?>
