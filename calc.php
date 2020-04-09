<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Kalkulator- Wypożyczalnia aut</title>
  <link rel="shortcut icon" href="images/favicon.svg"/>
  <link href="css/inline-list.css" rel="stylesheet">
  <link href="css/calc.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
              <label>Wybierz auto
              <select id="selectcar" class="form-control">
                    <option selected="true" disabled>Wybierz auto</option>
                  <?php
                   require './db.php';
                   $sel_cars = "SELECT Marka, Model,ID_Samochodu,cena FROM samochody ORDER BY ID_samochodu DESC;";
                   $result = mysqli_query($db,$sel_cars) or die(mysqli_error($db));
                   while ($row = mysqli_fetch_array($result)){
                       echo "<option value=".$row['cena'].">".$row['Marka'] ." ".$row['Model'] . "</option>";
                   }
                ?>
              </select>
            </label>
            <br><br>
            <label for="quantity">Ilość dni:</label>
            <input type="number" id="quantity" name="quantity" min="1" max="31" value="1">
            <br><br><br>
            <p><strong>Dodatkowe opcje</strong></p>
            <div>
              <label for="scales"><input type="checkbox" id="ubezpieczenie" name="ubezpieczenie" value="1000">Ubezpieczenie</label>

            </div>
            <div>
              <label><strong>Dodatki</strong></label>
              <label><input type="radio" name="dodatki" class="add" value="ub">ubezpieczenie</label><br>
              <label><input type="radio" name="dodatki" class="add" value="ub2">cos</label><br>
              <label><input type="radio" name="dodatki" class="add" value="ub3">cos</label><br>
            </div>
            <div>

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
