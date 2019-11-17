<html>
  <head>
    <link rel="stylesheet" href="Styles/cars.css">
  </head>
  <body>
    <?php
      $name = $_GET["name"];
      $u = $_GET["number"];
      $c =  rand(1,4);
      $usernum = $c;
      switch ($usernum) {
          case "$usernum = 1":
              echo "You chose car 1! ";
              break;
          case "$usernum = 2":
              echo "You chose car 2! ";
              break;
          case "$usernum = 3":
              echo "You chose car 3! ";
              break;
          case "$usernum = 4":
              echo "You chose car 4! ";
              break;
          default:
              echo "You have to choose a number between 1-4! ";
      }
      if ($c == $u){
        echo 'You won!';
        } else {
        echo $name. ', the car that won was ' .$c. '.';
        }
    ?>
    <article class= "grid">
      <div class = back><a href = "carrace.html">
        <h1>Back</h1>
      </a></div>
    </article>
  </body>
</html>
