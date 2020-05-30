
<?php 

$data = new Vol;
$table = 'vol';
$lieuD = '';
$lieuA = '';
$success_message="You Need To login to reserve";

if(isset($_POST['search'])){
    $lieuD = $_POST['LieuDepart'];
    $lieuA = $_POST['LieuArrive'];
}
$condition = ['statusV' => 'Active',
            'LieuDepart' => $lieuD,
            'LieuArrive' => $lieuA

];

$res = $data->selectAll($table, $condition);
?>

<?php foreach($res as $vol){?>

<?php if(empty($_SESSION['UserName'])): 

?>
<span class="text-warning">  
    <p style="text-align: center;">
            <?php  
                 if(isset($success_message))  
                     {  
                          echo $success_message;  
                     }  
            ?>  
    </p>
</span> 
<?php endif ?>

    <div class='container'>
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
                      
                       <?php if(isset($_SESSION['UserName'])): ?>
                              <a href='reservation.php?id_Vol=<?php echo $vol['id_Vol'] ?>' class='c-link'>Réserver
                                  <i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i>
                              </a>
                         <?php endif; ?>

                    </div>
      </div>
      </div></div>
   <?php } 

?>