<header>
  <nav class="nav">
    <div class ="home">
      <a href="index.php">
      <h1>Home</h1>
    </div></a>
    <div class ="quiz">
      <a href="quiz.php">
      <h1>Quiz</h1>
    </div></a>
    <div class ="profile">
      <a href="profile.php">
      <h1>Profile</h1>
    </div></a>

<?php
if (isset($_SESSION['username'])) {
    echo "
          <script>

         var audio = new Audio('Fizzle-SoundBible.com-1439537520.mp3');
         audio.play();
         alert('You have logged out successfully and see you next time.');
         window.location='login.php';

        </script>
        <a href='index.php?logout='1''>
            <div class ='profile'>
                <h3>Logout</h3>
            </div>
        </a>
    ";
} else {
    echo "
        <a href='login.php'>
            <div class ='profile'>
                <h3>Login</h3>
            </div>
        </a>
    ";
}
?>

  </nav>
</header><br>
