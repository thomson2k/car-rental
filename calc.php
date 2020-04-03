<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Kalkulator- Wypożyczalnia aut</title>
  <link rel="shortcut icon" href="images/favicon.svg"/>
  <link href="css/inline-list.css" rel="stylesheet">
  <link href="css/calc.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
  <script src="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

<header>
  <?php
require 'navbar.php';
?>
</header>
<div class="center">
<section class="calc-container">
    <h1>Policz koszt wypożyczenia auta</h1>
    <div class="price-container">
              <form action="" method="post" id="calc-form" enctype="text/plain"><div>
              <label><p><strong>Wybierz auto</strong> (do każdego auta doliczana jest kaucja)
              <select id="singleSelectValueDDJS" class="form-control"
                    onchange="singleSelectChangeValue()">
                    <option selected="true" disabled>Wybierz auto</option>
                  <?php
                   $db = mysqli_connect('localhost','root','','car_rental');
                   $sel_cars = "SELECT Marka, Model,ID_Samochodu,cena FROM samochody ORDER BY ID_samochodu DESC;";
                   $result = mysqli_query($db,$sel_cars) or die(mysqli_error($db));
                   while ($row = mysqli_fetch_array($result)){
                       echo "<option value=".$row['cena'].">".$row['Marka'] ." ".$row['Model'] . "</option>";
                   }
                ?>
              </select>
            </label>
            <br><br><br>
            <label for="quantity">Ilość dni:</label>
            <input type="number" id="quantity" name="quantity" min="1" max="31" value="1">
            <br><br><br><br>
            <label><strong>Dodatkowe opcje</strong></p>
            <div>
              <label for="scales">Ubezpieczenie</label>
              <input type="checkbox" id="ubezpieczenie" name="ubezpieczenie"  value="5.99">
            </div>
            <div>
              <label><strong>Dodatki</strong></label>
              <input type="radio" name="dodatki" value="ub">ubezpieczenie<br>
              <input type="radio" name="dodatki" value="ub2">cos<br>
              <input type="radio" name="dodatki" value="ub3">cos<br>
            </div>
        </div>
      </form>

      <div id="price">0 zł</div>
            </div>

    </div>
</section>
</div>
<script src="./js/calc.js"></script>
</body>
</html>
