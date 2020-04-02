<!DOCTYPE html>
<html lang="en-ca">
<head>
  <meta charset="utf-8">
  <title>Kalkulator- Wypożyczalnia aut</title>
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
      <form action="" id="cakeform" onsubmit="return false;">
        <div>
            <div class="cont_order">
               <fieldset>
                <legend></legend>
                <label ></label>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round6" onclick="calculateTotal()" />Ubezpieczenie</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round8" onclick="calculateTotal()" />Mycie</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round10" onclick="calculateTotal()" />Polerowanie</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round12" onclick="calculateTotal()" />coś</label><br/>
                <br/>
                <label >Filling</label>

                <select id="filling" name='filling' onchange="calculateTotal()">
                <option value="None">Select Filling</option>
                <option value="Lemon">Lemon($5)</option>
                <option value="Custard">Custard($5)</option>
                <option value="Fudge">Fudge($7)</option>
                <option value="Mocha">Mocha($8)</option>
                <option value="Raspberry">Raspberry($10)</option>
                <option value="Pineapple">Pineapple($5)</option>
                <option value="Dobash">Dobash($9)</option>
                <option value="Mint">Mint($5)</option>
                <option value="Cherry">Cherry($5)</option>
                <option value="Apricot">Apricot($8)</option>
                <option value="Buttercream">Buttercream($7)</option>
                <option value="Chocolate Mousse">Chocolate Mousse($12)</option>
               </select>
                <br/>
                <p>
                <label for='includecandles' class="inlinelabel">inc</label>
               <input type="checkbox" id="includecandles" name='includecandles' onclick="calculateTotal()" />
               </p>

                <p>
                <label class="inlinelabel" for='includeinscription'>Include Inscription($20)</label>
                <input type="checkbox" id="includeinscription" name="includeinscription" onclick="calculateTotal()" />
                <input type="text"  id="theinscription" name="theinscription" value="Enter Inscription"  />
                </p>

                </fieldset>
            </div>


       </form>
	</div>
        <div class="price-form">

        </div>
        <div id="price">0 zł</div>
    </div>
</section>
</div>
<script src="./js/calc.js"></script>
</body>
</html>
