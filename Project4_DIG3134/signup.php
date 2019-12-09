<?php
  include('insertdata.php');
 ?>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Sign up</title>
   </head>
   <body>
     <article class="grid">
       <div class="heading">
         <h1>Sign Up Now!</h1>
       </div>
       <div class="signUpForm">
         <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for "userin">Username:</label><br/>
            <input type="text" id="userin" name="username"><span class="error"><?php echo $dispusername?></span><br/>
            <label for "emailin">Email Address:<br/>
            <input type="text" id="emailin" name="email"><span class="error"><?php echo $dispemail?></span><br/>
            <label for "passin">Password<br/>
            <input type="text" id="passin" name="password"><span class="error"><?php echo $disppassword?></span><br/>
            <input type="checkbox" onclick="myFunction()">Make it private<br>
            <input type="submit" name="submit" value="Sign Up">
            <script>
            function myFunction() {
              var x = document.getElementById("passin");
              if (x.type === "text") {
                x.type = "password";
              } else {
                x.type = "text";
              }
            }
            </script>
         </form>
       </div>
     </article>
   </body>
 </html>
