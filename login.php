<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-ca">
<head>
  <meta charset="utf-8">
  <title>Kontakt- Wypożyczalnia aut</title>
  <link href="css/inline-list.css" rel="stylesheet">
  <link href="css/contact.css" rel="stylesheet">
</head>
<body>

<header>
  <nav>
    <ul class="nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="products/">Products</a></li>
      <li><a href="about.html">About</a></li>
      <li><a class="current" href="contact.html">Contact</a></li>
    </ul>
  </nav>
</header>
<br><br>
<?php
$db = mysqli_connect('localhost','root','','car_rental');
//TODO: do not hardcode, get from database
const login = 'admin';
const password = 'admin';

if (isset($_POST['login']) && isset($_POST['password'])) {
  if ($_POST['login'] === login && $_POST['password'] === password){

    $_SESSION['login'] = $_POST['login']; //write login to server storage
    header('Location: ./dashboard/create.php'); //redirect to main
  }
  else
  {
    echo "<script>alert('Wrong login or password');</script>";
    echo "<noscript>Wrong login or password</noscript>";
  }
}

?>

<form method="post">
  Login:<br><input name="login"><br>
  Password:<br><input type="password" name="password"><br>
  <input type="submit">
</form>

</body>
</html>
