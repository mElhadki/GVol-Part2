<?php
 $id = '';
 $LieuDepart = '';
 $LieuArrive = '';
 $DateDepart = '';
 $DateArrive = '';
 $NbPlace = '';
 $status = '';
 $Prix = '';
 $ide = '';
 $statuse = '';


if(isset($_GET['id_Vol'])){
    $flyes = $data->selectOne('vol', ['id_Vol' => $_GET['id_Vol']]);
    $id = $flyes['id_Vol'];
    $LieuDepart = $flyes['LieuDepart'];
    $LieuArrive = $flyes['LieuArrive'];
    $DateDepart = $flyes['DateDepart'];
    $DateArrive = $flyes['DateArrive'];
    $NbPlace = $flyes['NbPlace'];
    $status = $flyes['statusV'];
    $Prix = $flyes['Prix'];
}


if(isset($_GET["statusV"]) && isset($_GET['id_Vol'])){
    $statusV = $_GET['statusV'];
    $id_Vol = $_GET['id_Vol'];
    $count = $data->updateV($statusV, $id_Vol);
    header("location:ListVol.php");
    exit();
}

