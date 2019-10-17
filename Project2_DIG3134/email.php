<html>
<body>
  <?php
    $to = $_POST["email"];
    $subject = "Your next car!";
    $txt = $_POST["car"];
    $headers = "From: jimmyclement10@knights.ucf.edu";

    mail($to,$subject,$txt,$headers);
  ?>
</body>
</html>
