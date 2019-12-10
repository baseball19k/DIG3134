<?php include('server.php')
?>
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Arvo:700%7CKanit:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Styles/quiz.css"/>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="footballquiz">

          <!--question1-->
          <div class="quizImage">
            <img src="Pictures/football.jpg" alt="Football">
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
            <img src="Pictures/tom.jfif" alt="Tom Brady">
          </div>
          <div class="question">
            <h2>Who is this?</h2>
          </div>
            <div class="answerleft">
              <input type="radio" name="tb" value="brady"><h4>Tom Brady</h4>
            </div>
            <div class="answerright">
              <input type="radio" name="tb" value="james"><h4>Lebron James</h4>
            </div>
            <div class="answerleft">
              <input type="radio" name="tb" value="jordan"><h4>Michael Jordan</h4>
            </div>
            <div class="answerright">
              <input type="radio" name="tb" value="jeter"><h4>Derek Jeter</h4>
            </div>

            <!--question3-->
            <div class="question">
              <p>If you get a touchdown how many points do you get?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="points" value="7"><h4>7</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="points" value="6"><h4>6</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="points" value="5"><h4>5</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="points" value="8"><h4>8</h4>
              </div>

            <!--question4-->
            <div class="quizImage">
              <img src="Pictures/patriots.jfif" alt="patriots">
            </div>
            <div class="question">
              <p>What is the name of this team?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="logo" value="miami"><h4>Miami Dolphins</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="logo" value="ne"><h4>New England Patriots</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="logo" value="la"><h4>LA Rams</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="logo" value="dallas"><h4>Dallas Cowboys</h4>
              </div>

            <!--question5-->
            <div class="quizImage">
              <img src="Pictures/ap.jfif" alt="Adrian Peterson">
            </div>
            <div class="question">
              <p>What team does he play for?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="ap" value="vikings"><h4>Minnesota Vikings</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="ap" value="saints"><h4>New Orleans Saints</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="ap" value="cardinals"><h4>Arizona Cardinals</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="ap" value="redskins"><h4>Washington Redskins</h4>
              </div>

            <!--question6-->
            <div class="question">
              <p>How many championships has Tom Brady won?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="tom" value="3"><h4>3</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="tom" value="2"><h4>2</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="tom" value="5"><h4>5</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="tom" value="6"><h4>6</h4>
              </div>

            <!--question7-->
            <div class="question">
              <p>If you interfere with someone trying to catch the ball and you weren't going for the ball what is this called?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="penalties" value="helmet"><h4>Helmet-to-Helmet</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="penalties" value="pass"><h4>Pass Interference</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="penalties" value="targetting"><h4>Targetting</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="penalties" value="holding"><h4>Holding</h4>
              </div>


              <!--question8-->
              <div class="question">
                <p>What position typically throws the ball?</p>
              </div>
              <div class="answerleft">
                <input type="radio" name="positions" value="qb"><h4>Quarterback</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="positions" value="rb"><h4>Running back</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="positions" value="wr"><h4>Wide Receiver</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="positions" value="cb"><h4>Cornerback</h4>
              </div>

            <!--question9-->
            <div class="question">
              <p>How does the team receive the ball on a kickoff?</p>
            </div>
              <div class="answerleft">
                <input type="radio" name="kickoff" value="ask"><h4>The kicking team asks the ball to go to the other side of the field.</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="kickoff" value="kick"><h4>The kicking team kicks the ball.</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="kickoff" value="roll"><h4>The kicking team rolls the ball to the other team.</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="kickoff" value="throw"><h4>The kicking team throws the ball.</h4>
              </div>

          <!--question10-->
          <div class="question">
            <p>How many quarters are in a football game?</p>
          </div>
            <div class="answerleft">
              <input type="radio" name="quarters" value="3"><h4>3</h4>
            </div>
            <div class="answerright">
              <input type="radio" name="quarters" value="4"><h4>4</h4>
            </div>
            <div class="answerleft">
              <input type="radio" name="quarters" value="5"><h4>5</h4>
            </div>
            <div class="answerright">
              <input type="radio" name="quarters" value="2"><h4>2</h4>
            </div>
            <input type="submit" name="submit" value="Next">
    </form>
  </body>
</html>
