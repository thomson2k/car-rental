<?php
require_once('./init.php');
if(!isLoggedIn()){
  header('Location: ./');
  exit;
}
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Panel zarządzania- Wypożyczalnia aut</title>
  <link href="./css/inline-list.css" rel="stylesheet">
  <link href="./css/dashboard.css" rel="stylesheet">
</head>
<body>

<header>
<?php
require 'navbar.php';
?>
</header>


<section class="container">
  <div class="left-half">
    <article>
      <div id="add"><img src="./images/icons/car-sport-outline.svg"></div>
      <!--<div id="edit"><img src="./images/icons/create-outline.svg"></div>-->
      <!--<div id="delete"><img src="./images/icons/trash-outline.svg"></div>-->
      <div id="createuser"><img src="./images/icons/person-add-outline.svg"></div>
    </article>
  </div>
  <div class="right-half">
    <div class="dashboard-container">
      <div class="dashboard-hero">
      <article>
          <?php
        if(!isLoggedIn()){
          header('Location: ./');
          exit;
        } else {
          echo "<h1 id='dashboard-hero-content'>Witaj, <br>" . $_SESSION['login'] . "</h1>";
        }
        echo "<br>";
      ?>
      </article>
      </div>
      <div class="dashboard-content">
        <div id="add-content">
          <?php
          require './actions/dashactions.php';
          ?>
        </div>
        <div id="create-user-content">
          <h1>Dodaj pracownika</h1>
          <?php
          require './db.php';

          if(isset($_POST['new']) && $_POST['new']==1) {
          $nazwa = $_REQUEST['nazwa'];
          $haslo = $_REQUEST['haslo'];
          $email = $_REQUEST['email'];
          $db = mysqli_connect('localhost','root','','car_rental');
          $ins_user = "INSERT INTO pracownicy(`ID_pracownika`,`Nazwa`,`Haslo`,`email`) VALUES('','$nazwa','$haslo','$email');";
          mysqli_query($db,$ins_user) or die(mysqli_error($db));
          }
          ?>
          <div class="form">

          <div class="form-hero">
          <form name="form" method="post" action="">
            <input type="hidden" name="new" value="1" />
            <p>Nazwa<input type="text" name="nazwa" placeholder="Wprowadz Nazwe" required /></p>
            <p>Hasło<input type="text" min="0" name="haslo" placeholder="Wprowadz Hasło" required /></p>
            <p>Email<input type="email" name="email" placeholder="Wprowadz email" required /></p>
            <p><input name="submit" type="submit" value="Submit" /></p>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="./js/dashboard.js"></script>
</body>
</html>

