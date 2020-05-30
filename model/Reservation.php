<?php

  class Reserve extends Dbh {



    function AddPassager($Nom, $Prenom, $Num_Passport, $id_U) {  
    
        $AddP = "insert into passager(Nom,Prenom,Num_Passport,Id_U) values ('$Nom','$Prenom','$Num_Passport','$id_U')";  
        $result = $this->connect()->query($AddP);
        return true;  
    }
    
    function AddReservation($id_U, $id_Vol) {  
    
        $AddR = "insert into reservation(id_U,id_Vol,Date_Reservation) values ('$id_U','$id_Vol',NOW())";  
        $result = $this->connect()->query($AddR);
        return true;  
    }

    function getDateReservation($id_U) {  
    
      $getD = "SELECT Date_Reservation from reservation where Id_U='$id_U'";  
      $result = $this->connect()->query($getD);
      return true;  
  }

  public function selectAll($table, $condition = []){
    $conn = $this->connect();
    $sql = "SELECT * FROM $table";
        $i = 0;
        foreach($condition as $key => $value){
            if ($i === 0){
                $sql = $sql . " WHERE $key=?";
            }
            else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $stmt =  $conn->prepare($sql);
        $value = array_values($condition);
        $type = str_repeat('s', count($value));
        $stmt->bind_param($type, ...$value);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
}
public function selectOne($table, $condition) {
    $conn=$this->connect();
    $sql = "SELECT * FROM $table";
    $i = 0;
    foreach($condition as $key => $value){
        if ($i === 0){
            $sql = $sql . " WHERE $key=?";
        }
        else{
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }
    $sql = $sql . " LIMIT 1";
   
    $stmt = $conn->prepare($sql);
    $value = array_values($condition);
    $type = str_repeat('s', count($value));
    $stmt->bind_param($type, ...$value);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}
public function History($table, $condition = []){
  $conn = $this->connect();
  $sql = "SELECT LieuDepart,LieuArrive,DateDepart,DateArrive,Prix,Date_Reservation FROM $table INNER JOIN vol V ON V.id_Vol = $table.id_Vol";
  
      $i = 0;
      foreach($condition as $key => $value){
          if ($i === 0){
              $sql = $sql . " WHERE $key=?";
          }
          else{
              $sql = $sql . " AND $key=?";
          }
          $i++;
      }
      $stmt =  $conn->prepare($sql);
      $value = array_values($condition);
      $type = str_repeat('s', count($value));
      $stmt->bind_param($type, ...$value);
      $stmt->execute();
      $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
      return $records;
}


 
}

?>