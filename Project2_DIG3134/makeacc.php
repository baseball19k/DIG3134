<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" action="makeaccount.php">
      Username:<br/>
      <input type="text" name="username"><br/>
      E=mail Address:<br/>
      <input type="text" name="email"><br/><?php echo $dispemail?>
      Street:<br/>
      <input type="text" name="street"><br/><?php echo $dispstreet?>
      City:<br/>
      <input type="text" name="city"><br/>
      Zip Code:<br/>
      <input type="text" name="zip" maxlength="5"><br/>
      State:<br/>
      <input type="text" name="state" maxlength="2"><br/><?php echo $dispstate?>
      Password<br/>
      <input type="password" name="password"><br/>
      <input type="submit" value="Login">
    </form>
  </body>
</html>
