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
            <!--question1-->
            <div class="quizImage">
              <img src="Pictures/basketballexam.jfif" alt="basketball">
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
              <img src="Pictures/mj.jfif" alt="Michael Jordan">
            </div>
            <div class="question">
              <h2>Who is this?</h2>
            </div>
              <div class="answerleft">
                <input type="radio" name="mj" value="brady"><h4>Tom Brady</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="mj" value="james"><h4>Lebron James</h4>
              </div>
              <div class="answerleft">
                <input type="radio" name="mj" value="jordan"><h4>Michael Jordan</h4>
              </div>
              <div class="answerright">
                <input type="radio" name="mj" value="jeter"><h4>Derek Jeter</h4>
              </div>

              <!--question3-->
              <div class="quizImage">
                <img src="Pictures/3point.jpg" alt="three pointer">
              </div>
              <div class="question">
                <p>If you make a shot from here how many points do you get?</p>
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
                <img src="Pictures/celticslogo.png" alt="Celtics">
              </div>
              <div class="question">
                <p>What is the name of this team?</p>
              </div>
                <div class="answerleft">
                  <input type="radio" name="logo" value="miami"><h4>Miami Heat</h4>
                </div>
                <div class="answerright">
                  <input type="radio" name="logo" value="boston"><h4>Boston Celtics</h4>
                </div>
                <div class="answerleft">
                  <input type="radio" name="logo" value="la"><h4>LA Lakers</h4>
                </div>
                <div class="answerright">
                  <input type="radio" name="logo" value="dallas"><h4>Dallas Mavericks</h4>
                </div>

              <!--question5-->
              <div class="quizImage">
                <img src="Pictures/pgpic.jfif" alt="PG">
              </div>
              <div class="question">
                <p>What team does he play for?</p>
              </div>
                <div class="answerleft">
                  <input type="radio" name="pg" value="thunder"><h4>OKC Thunder</h4>
                </div>
                <div class="answerright">
                  <input type="radio" name="pg" value="pacers"><h4>Indiana Pacers</h4>
                </div>
                <div class="answerleft">
                  <input type="radio" name="pg" value="lakers"><h4>LA Lakers</h4>
                </div>
                <div class="answerright">
                  <input type="radio" name="pg" value="clippers"><h4>LA Clippers</h4>
                </div>

              <!--question6-->
              <div class="quizImage">
                <img src="Pictures/kobe.jfif" alt="Kobe">
              </div>
              <div class="question">
                <p>How many championships has he won?</p>
              </div>
                <div class="answerleft">
                  <input type="radio" name="kobe" value="3"><h4>3</h4>
                </div>
                <div class="answerright">
                  <input type="radio" name="kobe" value="2"><h4>2</h4>
                </div>
                <div class="answerleft">
                  <input type="radio" name="kobe" value="5"><h4>5</h4>
                </div>
                <div class="answerright">
                  <input type="radio" name="kobe" value="1"><h4>1</h4>
                </div>

              <!--question7-->
              <div class="question">
                <p>If you stop dribbling the ball and you start dribbling again what type of violation is this?</p>
              </div>
                <div class="answerleft">
                  <input type="radio" name="penalties" value="traveling"><h4>Traveling</h4>
                </div>
                <div class="answerright">
                  <input type="radio" name="penalties" value="carrying"><h4>Carrying</h4>
                </div>
                <div class="answerleft">
                  <input type="radio" name="penalties" value="technical"><h4>Technical Foul</h4>
                </div>
                <div class="answerright">
                  <input type="radio" name="penalties" value="double"><h4>Double Dribble</h4>
                </div>


                <!--question8-->
                <div class="question">
                  <p>What position is typically called the 4 spot?</p>
                </div>
                <div class="answerleft">
                  <input type="radio" name="positions" value="smallForward"><h4>Small Forward</h4>
                </div>
                <div class="answerright">
                  <input type="radio" name="positions" value="powerForward"><h4>Power Forward</h4>
                </div>
                <div class="answerleft">
                  <input type="radio" name="positions" value="center"><h4>Center</h4>
                </div>
                <div class="answerright">
                  <input type="radio" name="positions" value="pointGuard"><h4>Point Guard</h4>
                </div>

              <!--question9-->
              <div class="question">
                <p>What position is used for tip offs?</p>
              </div>
                <div class="answerleft">
                  <input type="radio" name="tipoff" value="smallForward"><h4>Small Forward</h4>
                </div>
                <div class="answerright">
                  <input type="radio" name="tipoff" value="powerForward"><h4>Power Forward</h4>
                </div>
                <div class="answerleft">
                  <input type="radio" name="tipoff" value="center"><h4>Center</h4>
                </div>
                <div class="answerright">
                  <input type="radio" name="tipoff" value="pointGuard"><h4>Point Guard</h4>
                </div>

            <!--question10-->
            <div class="question">
              <p>How many quarters are in a basketball game?</p>
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
            <input type="submit" name="submit" value="Next">
    </form>
  </body>
</html>
