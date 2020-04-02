<?php
require '../init.php';
if(!isLoggedIn()){
  header('Location: ./');
  exit;
}
require './db.php';
$id=$_REQUEST['ID_samochodu'];
if(isset($_POST['new']) && $_POST['new']==1) {
$marka = $_REQUEST['marka'];
$model = $_REQUEST['model'];
$moc = $_REQUEST['moc'];
$kolor = $_REQUEST['kolor'];
$przebieg = $_REQUEST['przebieg'];
$pojemnosc = $_REQUEST['pojemnosc'];
$rokprodukcji = $_REQUEST['rokprodukcji'];
$cena = $_REQUEST['cena'];
$kaucja = $_REQUEST['kaucja'];

$update = "UPDATE samochody SET `ID_samochodu`='$id',`Marka`='$marka',`Moc`='$moc',`Kolor`='$kolor',`Przebieg`='$przebieg',`Pojemnosc`='$pojemnosc',`Rok_produkcji`='$rokprodukcji',`cena`='$cena',`Model`='$model',`Kaucja`='$kaucja' WHERE ID_samochodu=$id";
mysqli_query($db,$update) or die(mysqli_error($db));
header("Location: ../dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>edit</title>
 <link rel="stylesheet" href="../css/actions.css">
</head>
<body>
<div class="form">

<div class="form-hero">
<h1>Edytuj samochód</h1>
<form name="form" method="post" action="">
<input type="hidden" name="new" value="1" />
<p>Marka<input type="text" name="marka" placeholder="Wprowadz marke" required /></p>
<p>Model<input type="text" name="model" placeholder="Wprowadz model"  required /></p>
<p>Moc<input type="number" min="0" name="moc" placeholder="Wprowadz moc"   required/></p>
<p>Kolor<input type="text" name="kolor" placeholder="Wprowadz kolor"  required /></p>
<p>Przebieg<input type="number" min="0" name="przebieg" placeholder="Wprowadz przebieg"  required /></p>
<p>Pojemnosc<input type="number" min="0" name="pojemnosc" placeholder="Wprowadz pojemnosc"  required /></p>
<p>Rok produkcji<input type="date" name="rokprodukcji" placeholder="Wprowadz rokprodukcji"  required /></p>
<p>Cena<input type="number" min="0" name="cena" placeholder="Wprowadz cene"  required /></p>
<p>Kaucja<input type="number" min="0" name="kaucja" placeholder="Wprowadz kaucje"  required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
<p><a href="../dashboard.php">Powrót</a></p>
</form>

</div>
</div>
</body>
</html>
