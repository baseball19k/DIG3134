<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <title>Profile</title>
    <!-- external css -->
    <link rel="stylesheet" href=""/>
    <link href="https://fonts.googleapis.com/css?family=Arvo:700%7CKanit:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Styles/home.css">
    <link rel="icon" href=""/>
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
      <div class = "totalresult">
        <h1>Your total score is:</h1>
      </div>
  <?php  if (isset($_SESSION['done'])) : ?>
    <div class = "score">
      <h1><?php include('totalscore.php'); ?></h1>
      </div>
  <?php endif ?>


    </article>
  </body>
</html>

<?php endif ?>
