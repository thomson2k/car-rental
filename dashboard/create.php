<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-ca">
<head>
  <meta charset="utf-8">
  <title>Kontakt- Wypożyczalnia aut</title>
  <link href="../css/inline-list.css" rel="stylesheet">
  <link href="../css/contact.css" rel="stylesheet">
</head>
<body>

<header>
  <nav>
    <ul class="nav">
      <li><a href="../index.php">Home</a></li>
      <li><a href="products.html">Products</a></li>
      <li><a href="about.html">About</a></li>
      <li><a class="current" href="contact.html">Contact</a></li>
    </ul>
  </nav>
</header>
<br>
<br>
<br>
<br>
<?php
if($_SESSION["login"] != true) {
  echo("Access denied!");
  exit();
}

echo("Enter my lord!");

  $db = mysqli_connect('localhost','root','','car_rental');

  if(!$db) {
    echo "err";
  } else {
    $sql = "SELECT Imie, Nazwisko FROM klienci";
    $query = mysqli_query($db, $sql);

    while( $row = mysqli_fetch_array($query) ) {
      echo $row['Imie']. ' ' . $row['Nazwisko'] . "<br>";
    }
    mysqli_close($db);
  }
?>

</body>
</html>

<?php
session_start(); //gets session id from cookies, or prepa
if (session_id() == '' || !isset($_SESSION['login'])) { //if sid exists and login for sid exists
?>
<a href="/login.php">Login</a>
<?php
} else {
  echo "Hi, " . $_SESSION['login'];
?>
  <a href="../logout.php">Logout</a>
<?php
}

?>