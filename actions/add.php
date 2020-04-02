


<?php
require_once('./init.php');
if(!isLoggedIn()){
  header('Location: ./');
  exit;
}?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="./css/dashboard.css" rel="stylesheet">
  <link rel="shortcut icon" href="../images/favicon.svg"/>
</head>
<body>

<section class="dashboard-actions-container">
    <h1>create user</h1>
    <?php
      require './db.php';

      if(!$db) {
        die("Error");
      }

      if(isset($_POST['update'])) {
        $updatequery = "";
        mysql_query($updatequery, $db);
      }

      if(isset($_POST['delete'])) {
        $deleteQuery = "DELETE FROM samochody WHERE Marka='$_POST[hidden]'";
        mysql_query($deleteQuery, $db);
      }


      $sql = "SELECT ID_samochodu, Marka, Moc, Przebieg, Pojemnosc, Rok_produkcji FROM samochody";
      $query = mysqli_query($db, $sql);

      echo "<table border=1>
      <tr>
      <th>Topic</th>
      <th>Topic</th>
      <th>Topic</th>
      </tr>";
      while( $row = mysqli_fetch_array($query) ) {
        echo "<form action=dashboard.php method=post";
        echo "<tr>";
        echo "<td>" . "<input type=hidden name=hidden value=" . $row['ID_samochodu'] . "></td>";
        echo "<td>" . "<input type=text name=samochod value=" . $row['ID_samochodu'] . "></td>";
        echo "<td>" . "<input type=text name=name value=" . $row['Marka'] . "></td>";
        echo "<td>" . "<input type=text name=attendance value=" . $row['Przebieg'] . "></td>";
        echo "<td>" . "<input type=text name=pojemnosc value=" . $row['Pojemnosc'] . "></td>";
        echo "<td>" . "<input type=submit name=update value=update" . "></td>";
        echo "<td>" . "<input type=submit name=delete value=delete" . "></td>";
        echo "</tr>";
        echo "</form>";
      }

      echo "</table>";

    ?>
</section>
</body>
</html>

