<!doctype html>
<html lang="en">

<head>
  <title>Profil</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>

</style>
</head>
<body>
<?php
include('../header.php') ;
include '../model/Dbh.php';
include('../model/Reservation.php');

$q = intval($_GET['q']);

$data=new Reserve();

$id_U = $_SESSION['Id_U'];

$condition = [
'Id_U' => $id_U,
'id_Reservation' => $q
];

$res = $data->History('reservation', $condition);
?>

<table class='table table-striped' style="width: 80%;">
<tr>
<th>LieuDepart</th>
<th>LieuArrive</th>
<th>DateDepart</th>
<th>DateArrive</th>
<th>Prix</th>
<th>Date_Reservation</th>
</tr>
<?php 
foreach($res as $vol) {

  echo "<tr>";
  echo "<td>" . $vol['LieuDepart'] . "</td>";
  echo "<td>" . $vol['LieuArrive'] . "</td>";
  echo "<td>" . $vol['DateDepart'] . "</td>";
  echo "<td>" . $vol['DateArrive'] . "</td>";
  echo "<td>" . $vol['Prix'] . "</td>";
  echo "<td>" . $vol['Date_Reservation'] . "</td>";
  echo "</tr>";
}
?>

</table>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</body>

</html>