<header>
  <nav class="nav">
    <a href="index.php"><div class ="home">
      <h1>Home</h1>
    </div></a>
    <a href="footballquiz.php"><div class ="quiz">
      <h1>Quiz</h1>
    </div></a>
    <a href="profile.php"><div class ="profile">
      <h1>Profile</h1>
    </div></a>

<?php
if (isset($_SESSION['username'])) {
    echo "
        <a href='index.php?logout='1''>
            <div class ='nav-item'>
                <h1>Logout</h1>
            </div>
        </a>
    ";
} else {
    echo "
        <a href='login.php'>
            <div class ='nav-item'>
                <h1>Login</h1>
            </div>
        </a>
    ";
}
?>

  </nav>
</header><br>
