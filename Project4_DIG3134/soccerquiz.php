<?php session_start();
  if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){
      header("Location: login.php");
    }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="soccerquiz_result.php" method="post" id="soccerquiz">

          <!--question1-->
          <div class="quizImage">
            <img src="Pictures/soccer.jfif" alt="Soccer">
          </div>
          <div class="question">
            <h2>What sport is this for?</h2>
          </div>
            <div class="answerleft">
              <input type="radio" name="which_sport" value="football"><h4>Football</h4>
            </div>
            <div class="answerright">
              <input type="radio" name="which_sport" value="cricket"><h4>Cricket</h4>
            </div>
            <div class="answerleft">
              <input type="radio" name="which_sport" value="soccer"><h4>Soccer</h4>
            </div>
            <div class="answerright">
              <input type="radio" name="which_sport" value="basketball"><h4>Basketball</h4>
            </div>

            <!--question2-->
          <div class="quizImage">
            <img src="Pictures/messi.jfif" alt="Messi">
          </div>
          <div class="question">
            <h2>Who is this?</h2>
          </div>
            <div class="answerleft">
              <input type="radio" name="messi" value="brady"><h4>Tom Brady</h4>
            </div>
            <div class="answerright">
              <input type="radio" name="messi" value="lionel"><h4>Lionel Messi</h4>
            </div>
            <div class="answerleft">
              <input type="radio" name="messi" value="jordan"><h4>Michael Jordan</h4>
            </div>
            <div class="answerright">
              <input type="radio" name="messi" value="jeter"><h4>Derek Jeter</h4>
            </div>

            <!--question3-->
            <div class="question">
              <p>If you make a goal how many points do you get?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="points" value="3"><h4>3</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="points" value="2"><h4>2</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="points" value="5"><h4>5</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="points" value="1"><h4>1</h4>
              </div>

            <!--question4-->
            <div class="quizImage">
              <img src="Pictures/juventus.jfif" alt="Juventus">
            </div>
            <div class="question">
              <p>What is the name of this team?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="logo" value="barcelona"><h4>FC Barcelona</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="logo" value="juventus"><h4>Juventus F.C.</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="logo" value="inter"><h4>Inter Milan</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="logo" value="manchester"><h4>Manchester United F.C.</h4>
              </div>

            <!--question5-->
            <div class="quizImage">
              <img src="Pictures/ronaldo.jfif" alt="Ronaldo">
            </div>
            <div class="question">
              <p>What team does he play for?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="ronaldo" value="jv"><h4>Juventus F.C</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="ronaldo" value="bm"><h4>FC Bayern Munich</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="ronaldo" value="liverpool"><h4>Liverpool F.C.</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="ronaldo" value="manchester"><h4>Manchester United F.C.</h4>
              </div>

            <!--question6-->
            <div class="quizImage">
              <img src="Pictures/trophies.jfif" alt="trophies">
            </div>
            <div class="question">
              <p>How many trophies has he won?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="trophies" value="34"><h4>34</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="trophies" value="29"><h4>29</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="trophies" value="25"><h4>25</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="trophies" value="20"><h4>20</h4>
              </div>

            <!--question7-->
            <div class="question">
              <p>How do you dribble the ball?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="dribble" value="nose"><h4>With your nose.</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="dribble" value="hands"><h4>With your hands.</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="dribble" value="feet"><h4>With your feet.</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="dribble" value="head"><h4>With your head.</h4>
              </div>


              <!--question8-->
              <div class="quizImage">
                <img src="Pictures/red.jfif" alt="red card">
              </div>
              <div class="question">
                <p>What is this card called?</p>
              </div>
              <div class="answerleft">
                <input type="radio" name="card" value="red"><h4>Red Card</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="card" value="blue"><h4>Blue Card</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="card" value="yellow"><h4>Yellow Card</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="card" value="green"><h4>Green Card</h4>
              </div>

            <!--question9-->
            <div class="question">
              <p>What position protects the goal?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="goal" value="defending"><h4>Defending Midfielder</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="goal" value="center"><h4>Center Back</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="goal" value="left"><h4>Left Fullback</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="goal" value="goalie"><h4>Goalkeeper</h4>
              </div>

          <!--question10-->
          <div class="question">
            <p>How long is a soccer game?</p>
          </div>
            <div class="answerleft">
              <input type="radio" name="minutes" value="85"><h4>85</h4>
            </div>
            <div class="answerright">
              <input type="radio" name="minutes" value="90"><h4>90</h4>
            </div>
            <div class="answerleft">
              <input type="radio" name="minutes" value="95"><h4>95</h4>
            </div>
            <div class="answerright">
              <input type="radio" name="minutes" value="100"><h4>100</h4>
            </div>
            <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
