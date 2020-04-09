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
<a id="btn-add" href="./actions/insert.php">Dodaj auto</a>
<p><strong>Wszystkie auta</strong></p>
<div class="dashboard-table">
<table  class="table-hero">
<thead>
  <tr>
    <th><strong>Nr.</strong></th>
    <th><strong>Marka</strong></th>
    <th> <strong>Model</strong></th>
    <th> <strong>Moc</strong></th>
    <th><strong>Kolor</strong></th>
    <th><strong>Kaucja</strong></th>
    <th><strong>Edits</strong></th>
  </tr>
</thead>
<tbody>
<?php

require './db.php';

$count=1;
$select="Select * from samochody ORDER BY ID_samochodu desc;";
$result = mysqli_query($db,$select);

while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td>
        <?php echo $count; ?>
      </td>
      <td>
        <?php echo $row["Marka"]; ?>
      </td>
      <td>
        <?php echo $row["Model"]; ?>
      </td>
      <td>
        <?php echo $row["Moc"]; ?>
      </td>
      <td>
        <?php echo $row["Kolor"]; ?>
      </td>
      <td>
        <?php echo $row["Kaucja"]; ?>
      </td>
      <td>
        <a href="./actions/edit.php?ID_samochodu=<?php echo $row["ID_samochodu"]; ?>">
          <img width="20px" src="./images/icons/pencil-outline.svg"></a>
        <a href="./actions/delete.php?ID_samochodu=<?php echo $row["ID_samochodu"]; ?>">
          <img width="20px" src="./images/icons/trash-outline.svg">
        </a>
      </td>
    </tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</section>
</body>
</html>
