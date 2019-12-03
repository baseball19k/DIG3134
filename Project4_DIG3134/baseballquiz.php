<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="baseballquiz_result.php" method="post" id="baseballquiz">

          <!--question1-->
          <div class="quizImage">
            <img src="Pictures/baseball.jfif" alt="baseball">
          </div>
          <div class="question">
            <h2>What sport is this for?</h2>
          </div>
            <div class="answerleft">
              <input type="radio" name="which_sport" value="football"><h4>Football</h4>
            </div>
            <div class="answerright">
              <input type="radio" name="which_sport" value="baseball"><h4>Baseball</h4>
            </div>
            <div class="answerleft">
              <input type="radio" name="which_sport" value="soccer"><h4>Soccer</h4>
            </div>
            <div class="answerright">
              <input type="radio" name="which_sport" value="basketball"><h4>Basketball</h4>
            </div>

            <!--question2-->
          <div class="quizImage">
            <img src="Pictures/jeter.jpg" alt="Jeter">
          </div>
          <div class="question">
            <h2>Who is this?</h2>
          </div>
            <div class="answerleft">
              <input type="radio" name="jeter" value="brady"><h4>Tom Brady</h4>
            </div>
            <div class="answerright">
              <input type="radio" name="jeter" value="james"><h4>Lebron James</h4>
            </div>
            <div class="answerleft">
              <input type="radio" name="jeter" value="jordan"><h4>Michael Jordan</h4>
            </div>
            <div class="answerright">
              <input type="radio" name="jeter" value="jeter"><h4>Derek Jeter</h4>
            </div>

            <!--question3-->
            <div class="quizImage">
              <img src="Pictures/safe.jfif" alt="sliding safe">
            </div>
            <div class="question">
              <p>If someone touches homeplate how many runs do you get?</p>
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
              <img src="Pictures/yanks.jfif" alt="Yankees">
            </div>
            <div class="question">
              <p>What is the name of this team?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="logo" value="miami"><h4>Miami Marlins</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="logo" value="boston"><h4>Boston Red Sox</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="logo" value="la"><h4>LA Dodgers</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="logo" value="newYork"><h4>New York Yankees</h4>
              </div>

            <!--question5-->
            <div class="quizImage">
              <img src="Pictures/christian.jfif" alt="Christian Yelich">
            </div>
            <div class="question">
              <p>What team does he currently play for?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="chris" value="nationals"><h4>Washington Nationals</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="chris" value="dodgers"><h4>LA Dodgers</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="chris" value="brewers"><h4>Milwaukee Brewers</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="chris" value="marlins"><h4>Miami Marlins</h4>
              </div>

            <!--question6-->
            <div class="quizImage">
              <img src="Pictures/world.jfif" alt="Yankees winning">
            </div>
            <div class="question">
              <p>How many World Series have they won?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="yanks" value="10"><h4>10</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="yanks" value="12"><h4>12</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="yanks" value="25"><h4>25</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="yanks" value="27"><h4>27</h4>
              </div>

            <!--question7-->
            <div class="question">
              <p>If you hit a grand slam how many runs are scored?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="slam" value="1"><h4>1</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="slam" value="2"><h4>2</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="slam" value="3"><h4>3</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="slam" value="4"><h4>4</h4>
              </div>


              <!--question8-->
              <div class="question">
                <p>What position is typically 2 on the lineup card?</p>
              </div>
              <div class="answerleft">
                <input type="radio" name="position" value="left"><h4>Left Field</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="position" value="second"><h4>Second Base</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="position" value="catcher"><h4>Catcher</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="position" value="pitcher"><h4>Pitcher</h4>
              </div>

            <!--question9-->
            <div class="question">
              <p>What is the first batter in the lineup called?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="leadoff" value="clean"><h4>Cleanup</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="leadoff" value="deck"><h4>On deck</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="leadoff" value="lead"><h4>Leadoff</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="leadoff" value="hole"><h4>In the hole</h4>
              </div>

            <!--question10-->
            <div class="quizImage">
              <img src="Pictures/scores.jpg" alt="score board">
            </div>
            <div class="question">
              <p>How many innings are in a baseball game?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="innings" value="7"><h4>7</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="innings" value="8"><h4>8</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="innings" value="5"><h4>5</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="innings" value="9"><h4>9</h4>
              </div>

    </form>
  </body>
</html>
