<?php

include_once '../model/Dbh.php';
include_once '../model/Reservation.php';

$data=new Reserve();

$success_message="";

if(isset($_POST["AddPassager"])){
  

        $Nom = $_POST['Nom'];  
        $Prenom = $_POST['Prenom'];  
        $Num_Passport = $_POST['Num_Passport'];
        $id_U = $_SESSION['Id_U'];
        $id_Vol= $_GET['id_Vol'];
        $AddP= $data->AddPassager($Nom, $Prenom, $Num_Passport, $id_U);
        $AddR= $data->AddReservation($id_U, $id_Vol);
        $success_message = 'Reservation Inserted';


}
   ?>