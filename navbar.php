<?php
require_once('./init.php');
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/inline-list.css" rel="stylesheet">
  </head>

<body>
  <nav id="navbar">
    <div id="logo">RENT a<img src="./images/logo.png"></div>
    <ul class="nav-content">
      <li><a href="./index.php" href="#">Strona główna</a></li>
      <li><a href="./contact.php">Kontakt</a></li>
      <li><a href="./calc.php">Kalkulator cen</a></li>
      <?php
      if(isLoggedIn()){
      ?>
       <li><a href="./dashboard.php">Panel</a></li>
      <?php } ?>
      </li>
      <li>
      <?php
      if(!isLoggedIn()){
      ?>
      <a id="button">Zaloguj się</a>
      <?php } else { ?>
        <a href="./logout.php" id="button">Wyloguj się</a>
      <?php }?>
      </li>

      <div class="mobile-nav" value="Reset form">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>


    </ul>
  </nav>

  <?php
require './db.php';

if(!$db) {
  echo "err";
} else {
  $sql = "SELECT email, Haslo FROM pracownicy";
  $query = mysqli_query($db, $sql);
  while( $row = mysqli_fetch_array($query) ) {
    if (isset($_POST['login']) && isset($_POST['password'])) {
      $login = mysqli_real_escape_string($db,$_POST['login']);
      $password = mysqli_real_escape_string($db, $_POST['password']);
      if ($login === $row['email'] && password_verify($password,$row['Haslo'])){
        $_SESSION['login'] = $_POST['login'];
        header('Location: dashboard.php');

      } else {
        echo "<script>alert('Wrong login or password');</script>";
        echo "<noscript>Wrong login or password</noscript>";
      }
    }
  }

  mysqli_close($db);
}
?>
 <div class="bg-modal">
    <div class="modal-contents">
        <div class="close">+</div>
        <form class="form-container" method="POST">
            <h2>Zaloguj się</h2>
            <label for="email">
                <strong>Email</strong>
            </label>
            <input name="login" required>
            <br>
            <label for="psw">
                <strong>Hasło</strong>
            </label>
            <input type="password" name="password" required>
            <br>
            <button type="submit" class="btn">Zaloguj się</button>
        </form>

    </div>
</div>
<script src="./js/mobilenav.js"></script>
</body>
</html>