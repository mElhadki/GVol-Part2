<?php
include('../model/Dbh.php');
include('../model/Vol.php');
?>

  <?php 

$data = new Vol;
$table = 'vol';
$id_V='';

if(isset($_GET['id_Vol'])){ 

    $id_V = $_GET['id_Vol'];
}

$condition = ['id_Vol' => $id_V

];

$res = $data->selectAll($table, $condition);
?>

<?php foreach($res as $vol){?>

    <div class='container' style="margin-top:100px;">
    <div class='row'>
    <div class='card-body'>
      <ul class='list-group mb-4' scope='row'>
      <li class='list-group-item'>Vol Numéro: <strong> <?php echo $vol['id_Vol'] ?> </strong></li>
      <li class='list-group-item'>Lieu Départ: <strong><?php echo $vol['LieuDepart'] ?></strong></li>
      <li class='list-group-item'>Lieu Arrive: <strong><?php echo $vol['LieuArrive'] ?></strong></li>
      <li class='list-group-item'>Date Départ: <strong><?php echo $vol['DateDepart'] ?></strong></li>
      <li class='list-group-item'>Date Arrive: <strong><?php echo $vol['DateArrive'] ?></strong></li>
      <li class='list-group-item'>Numéro des Places Disponible: <strong><?php echo $vol['NbPlace'] ?></strong></li>
      <li class='list-group-item'>Prix: <strong><?php echo $vol['Prix'] ?></strong></li>
      <div class='card-link'>
                    </div>
      </div>
      </div></div>
   <?php } 

?>

