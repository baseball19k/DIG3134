<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


    define('NUM', 11);
    $a = 1;
    $b = 2;

    echo "$a $b ";

    for($i=1   ; $i<= NUM-2 ;  $a=$b, $b=$c, $i++ )
    {
      echo $c = $a+$b;
      if ($c % 2 == 0)
        {

        }

      echo " ";
    }

     ?>

  </body>
</html>
