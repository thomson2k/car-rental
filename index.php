<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Wypożyczalnia aut</title>
  <link rel="shortcut icon" href="images/favicon.svg"/>
  <link href="css/inline-list.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<header>
<?php
require 'navbar.php';
?>
  <section class="hero-content">
    <h1>Wypożycz swoje wymarzone auto.</h1>
  </section>
</header>
<div class="hero-about">
  <h1>O firmie</h1>
  <p>Salon samochodów luksusowych</h1>
  <p>Wieloletnie doświadczenie w motoryzacji pozwoliło nam stworzyć firmę, której brakowało na Polskim rynku.</p>
  <p>Wynajem aut luksusowych, sportowych oraz użytkowych, w cenach przystępnych dla każdego.
    Brak limitu kilometrów, uproszczone procedury, dostawa i odbiór spod domu, a przede wszystkim niskie ceny, to nasze główne cechy.
</p>
  <p> W naszej ofercie odnajdą Państwo samochody typu kabriolet, coupe, SUV, limuzyny, a przede wszystkim auta sportowe o mocy nawet 650KM !
    Wynajmujemy samochody osobom prywatnym, firmom, na targi, na przyjęcia, wesela, śluby, koncerty, przewozy VIP z kierowcą.
  </p>
</div>
<div class="slider-section">
  <h1>W naszej ofercie znajdą państwo najlepszą oferte ekskluzywnych aut</h1>
  <div class="coursel-container">
    <div class="coursel-slide">
      <img src="./images/6.webp" id="lastClone" alt="auto">
      <img src="./images/2.webp" alt="auto">
      <img src="./images/2.jpg" alt="auto">
      <img src="./images/3.jpg" alt="auto">
      <img src="./images/4.jpg" alt="auto">
      <img src="./images/1.jpg" alt="auto">
      <img src="./images/2.webp"  id="firstClone" alt="auto">
    </div>
    <div id="prevBtn"><img src="images/left.svg">  </div>
    <div id="nextBtn"><img src="images/right.svg"></div>
  </div>
</div>

<footer>
  <h1>Gdzie się znajdujemy?</h1>
</footer>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92635.42934778433!2d19.952176121966406!3d50.07748898679648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7e2e4e33c8ee7f6!2sNissan%20Japan%20Motors!5e0!3m2!1spl!2spl!4v1585740398893!5m2!1spl!2spl" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<script src="./js/coursel.js"></script>
</body>
</html>
