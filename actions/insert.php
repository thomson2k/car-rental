<?php
require '../init.php';
if(!isLoggedIn()){
  header('Location: ./');
  exit;
}
require '../db.php';

if(isset($_POST['new']) && $_POST['new']==1) {
$marka = $_REQUEST['marka'];
$model = $_REQUEST['model'];
$moc = $_REQUEST['moc'];
$kolor = $_REQUEST['kolor'];
$cena = $_REQUEST['cena'];
$kaucja = $_REQUEST['kaucja'];
$ins_query = "INSERT INTO samochody(`ID_samochodu`,`Marka`,`Moc`,`Kolor`,`cena`,`Model`,`Kaucja`)VALUES('','$marka','$moc','$kolor','$cena','$model','$kaucja');";
mysqli_query($db,$ins_query) or die(mysqli_error($db));
header("Location: ../dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>insert</title>
<link rel="stylesheet" href="../css/actions.css">
<link rel="shortcut icon" href="images/favicon.svg"/>
</head>
<body>
<div class="form">

<div  class="form-hero">
<h1>Dodaj nowy samochód</h1>
<form name="form" method="post" action="">
<input type="hidden" name="new" value="1" />
<p>Marka<input type="text" name="marka" placeholder="Wprowadz marke" required /></p>
<p>Model<input type="text" name="model" placeholder="Wprowadz model" required /></p>
<p>Moc<input type="number" min="0" name="moc" placeholder="Wprowadz moc" required /></p>
<p>Kolor<input type="text" name="kolor" placeholder="Wprowadz kolor" required /></p>
<p>Cena<input type="number" min="0" name="cena" placeholder="Wprowadz cene" required /></p>
<p>Kaucja<input type="number" min="0" name="kaucja" placeholder="Wprowadz kaucje" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
<p><a href="../dashboard.php">Powrót</a></p>
</form>

</div>
</div>
</body>
</html>
