<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Wypożyczalnia aut</title>
  <link href="css/inline-list.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

<header>
  <nav>
    <a id="logo" href="#">FAST CARS</a>
    <ul class="nav-content">
      <li><a class="current" href="#">Home</a></li>
      <li><a href="./contact.html">Kontakt</a></li>
      <li><a href="./calc.html">Kalkulator cen</a></li>
      <li><a href="./login.php">Login</a></li>
    </ul>
  </nav>
  <section class="hero-content">
    <h1>Wypożycz swoje wymarzone auto.</h1>
  </section>
</header>
<div class="hero-about">
  <h1>O firme</h1>
  <p>Wieloletnie doświadczenie w motoryzacji pozwoliło nam stworzyć firmę, której brakowało na Polskim rynku. Wynajem aut luksusowych, sportowych oraz użytkowych, w cenach przystępnych dla każdego.
    Brak limitu kilometrów, uproszczone procedury, dostawa i odbiór spod domu, a przede wszystkim niskie ceny, to nasze główne cechy.
    W naszej ofercie odnajdą Państwo samochody typu kabriolet, coupe, SUV, limuzyny, a przede wszystkim auta sportowe o mocy nawet 650KM !
    Wynajmujemy samochody osobom prywatnym, firmom, na targi, na przyjęcia, wesela, śluby, koncerty, przewozy VIP z kierowcą.
  </p>
</div>

</body>
</html>
<?php

session_start(); //gets session id from cookies, or prepa

if (session_id() == '' || !isset($_SESSION['login'])) { //if sid exists and login for sid exists
?>
<a href="">Login</a>
<?php
} else {
  echo "Hi, " . $_SESSION['login'];
?>
<a href="./logout.php">Logout</a>
<?php
}
?>
