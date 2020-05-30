  
<?php

include '../model/Dbh.php';
include '../model/Vol.php';
$data=new Vol();
$message="";
$success_message = ''; 

//Add Vol 

if(isset($_POST["AddVol"])){

    $field= array (

        'LieuDepart' => $_POST["LieuDepart"],
        'LieuArrive' => $_POST["LieuArrive"],
        'DateDepart' => $_POST["DateDepart"],
        'DateArrive' => $_POST["DateArrive"],
        'NbPlace' => $_POST["NbPlace"],
        'Prix' => $_POST["Prix"]
        
    );

if($data->required_Validation($field)){

    $LieuDepart = $_POST['LieuDepart'];  
    $LieuArrive = $_POST['LieuArrive'];  
    $DateDepart = $_POST['DateDepart'];
    $DateArrive = $_POST['DateArrive'];
    $NbPlace = $_POST['NbPlace'];  
    $Prix = $_POST['Prix'];    

    if($LieuDepart <> $LieuArrive && $DateDepart <= $DateArrive ){  
    $addV = $data->VolAdd($LieuDepart, $LieuArrive, $DateDepart, $DateArrive, $NbPlace, $Prix);
    $success_message = 'Vol Inserted';

    }

    else{

        $message= "choose different place or different timing ";
    }
    
}


else{

    $message= $data->errors;
}


}




?>