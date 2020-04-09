<?php
require_once('./init.php');
if(!isLoggedIn()){
  header('Location: ./');
  exit;
}?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <style>
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      background-color:#f5f5f5;
      padding: 8px;
    }

    .dashboard-table {
      height: 50vh;
      overflow: auto;
      margin-top: 20px;
    }
    ::-webkit-scrollbar {
      width: 10px;
    }
    ::-webkit-scrollbar-track {
      background: #DCDCDC	;
    }
    ::-webkit-scrollbar-thumb {
      background: #ff0000;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #000;
    }
    </style>
</head>
<body>

<section class="dashboard-actions-container">
<link rel="stylesheet" href="./css/actions.css">
<link rel="stylesheet" href="./css/contact.css">
<p><strong>Wypożyczenia</strong></p>
<div class="dashboard-table">
<table class="table-hero">
<thead>
  <tr>
    <th><strong>Nr.</strong></th>
    <th><strong>Data wypożyczenia</strong></th>
    <th><strong>Data oddania</strong></th>
    <th><strong>Auto</strong></th>
    <th><strong>Imie</strong></th>
    <th><strong>Nazwisko</strong></th>
    <th><strong>Nr telefonu</strong></th>
    <th><strong>Email</strong></th>
    <th><strong>Lokalizacja</strong></th>
    <th><strong>ubezpieczenie</strong></th>
  </tr>
</thead>
<tbody>
<?php

require './db.php';

$count=1;
$select="Select * from wypozyczenia ORDER BY ID_wypozyczenia desc;";
$result = mysqli_query($db,$select);

while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td>
        <?php echo $count; ?>
      </td>
      <td>
        <?php echo $row["Data_wyp"]; ?>
      </td>
      <td>
        <?php echo $row["Data_odd"]; ?>
      </td>
      <td>
        <?php echo $row["ID_samochodu"]; ?>
      </td>
      <td>
        <?php echo $row["Imie"]; ?>
      </td>
      <td>
        <?php echo $row["Nazwisko"]; ?>
      </td>
      <td>
        <?php echo $row["Nr_tel"]; ?>
      </td>
      <td>
        <?php echo $row["Email"]; ?>
      </td>
      <td>
        <?php echo $row["Lokalizacja"]; ?>
      </td>
      <td>
        <?php echo $row["ubezpieczenie"]; ?>
      </td>
    </tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</section>
</body>
</html>
