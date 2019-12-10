<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <title>Profile</title>
    <!-- external css -->
    <link rel="stylesheet" href=""/>
    <link rel="icon" href=""/>
    <link rel="stylesheet" href="Styles/home.css">
  </head>
  <?php include('header.php');?>

<?php if (!isset($_SESSION['username'])) {
  echo "<div class='main'>You must log in to use this feature</div>";
}
?>

<!-- logged in user information -->
<?php  if (isset($_SESSION['username'])) : ?>

  <body>
    <article class="grid">
      <div class = "mainTextHead">
         <h2>Do you have what it takes?</h2>
       </div>
          <img class="mySlides" src="Pictures/slidePic1.jpg">
          <img class="mySlides" src="Pictures/slidePic2.jpg">
          <img class="mySlides" src="Pictures/slidePic3.jpg">
          <img class="mySlides" src="Pictures/slidePic4.jpg">
          <img class="mySlides" src="Pictures/slidePic5.jpg">
          <img class="mySlides" src="Pictures/slidePic6.jpg">
          <img class="mySlides" src="Pictures/slidePic7.jpg">
          <img class="mySlides" src="Pictures/slidePic8.jpg">
          <script>
          var myIndex = 0;
          carousel();

          function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
          }
          </script>


       <div class = "mainTextPar">
         <p>Take the test to see if you have lived under a rock your entire life.</p>
       </div>
       <div class = "Quiztab">
         <a href ="footballquiz.php">
           <h1>Take the Quiz</h1>
         </a>
       </div>
    </article>
  </body>
</html>

<?php endif ?>
