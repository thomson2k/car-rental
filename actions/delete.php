<?php
require '../init.php';
if(!isLoggedIn()){
  header('Location: ./');
  exit;
}
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="./css/dashboard.css" rel="stylesheet">
  <link rel="shortcut icon" href="../images/favicon.svg"/>
</head>
<body>

<section class="dashboard-actions-container">
<?php
require '../db.php';
if(!$db) {
 echo "BŁAD DATABASE";
} else {
$id=$_REQUEST['ID_samochodu'];
$query = "DELETE FROM samochody WHERE ID_samochodu=$id";
$result = mysqli_query($db,$query) or die ( mysqli_error());
header("Location: ../dashboard.php");
}
?>
</section>
</body>
</html>

