<?php
$missing = "";
if (isset($_POST['submit']))
  if (empty($_POST['which_sport']) && empty($_POST['messi']) && empty($_POST['points']) && empty($_POST['logo']) && empty($_POST['ronaldo']) && empty($_POST['trophies']) && empty($_POST['dribble']) && empty($_POST['card']) && empty($_POST['goal']) && empty($_POST['minutes'])){
    $missing = "You have to answer them all"
  } else{
  $answer1 = $_POST['which_sport'];
  $answer2 = $_POST['messi'];
  $answer3 = $_POST['points'];
  $answer4 = $_POST['logo'];
  $answer5 = $_POST['ronaldo'];
  $answer6 = $_POST['trophies'];
  $answer7 = $_POST['dribble'];
  $answer8 = $_POST['card'];
  $answer9 = $_POST['goal'];
  $answer2 = $_POST['minutes'];

  $totalBasketballCorrect = 0;
  if ($answer1 == "soccer") {
    $totalBasketballCorrect++;
  }
  if ($answer2 == "lionel"){
    $totalBasketballCorrect++;
  }
  if ($answer3 == "1"){
    $totalBasketballCorrect++;
  }
  if ($answer4 == "juventus"){
    $totalBasketballCorrect++;
  }
  if ($answer5 == "jv"){
    $totalBasketballCorrect++;
  }
  if ($answer6 == "34"){
    $totalBasketballCorrect++;
  }
  if ($answer7 == "feet"){
    $totalBasketballCorrect++;
  }
  if ($answer8 == "red"){
    $totalBasketballCorrect++;
  }
  if ($answer9 == "goalie"){
    $totalBasketballCorrect++;
  }
  if ($answer10 == "90"){
    $totalBasketballCorrect++;
  }
  header("location: profile.php");
}
 ?>
