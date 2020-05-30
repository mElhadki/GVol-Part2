<?php

class Vol extends Dbh {

    public function required_Validation($field){

        $count = 0;
        foreach($field as $key => $value){

            if(empty($value)){

                $count++;
                $this->errors .="<p>" . $key . " is required </p>";

             }
        }


        if($count === 0){

            return true;
        }

    }

    public function VolAdd($LieuDepart, $LieuArrive, $DateDepart, $DateArrive, $NbPlace, $Prix) {  
         
        $addV = "Insert into vol (LieuDepart, LieuArrive, DateDepart, DateArrive, NbPlace, Prix, statusV) values ('$LieuDepart','$LieuArrive','$DateDepart','$DateArrive','$NbPlace',$Prix,'Active')";  
        $result = $this->connect()->query($addV);
        return true;  
    }

    public function selectVol($Table_Name){

        $array=array();
        $query="SELECT * FROM ".$Table_Name."";
        $result=mysqli_query($this->connect(),$query);
        while($row=mysqli_fetch_assoc($result)){

            $array[] = $row;
        }
            return $array;
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


    public function update($LieuDepart, $LieuArrive, $DateDepart, $DateArrive, $NbPlace, $Prix, $statusV, $id){
        $up = ("UPDATE `vol` SET `LieuDepart` = '$LieuDepart', `LieuArrive` = '$LieuArrive', `DateDepart` = '$DateDepart', `DateArrive` = '$DateArrive', `NbPlace` = '$NbPlace', `Prix` = '$Prix', `statusV` = '$statusV' WHERE `vol`.`id_Vol` = $id");
        $result = $this->connect()->query($up);
        return true;
    }

    public function updateV($statusVe, $ide){
        $upe = ("UPDATE `vol` SET `statusV` = '$statusVe' WHERE `vol`.`id_Vol` = $ide");
        $result = $this->connect()->query($upe);
        return $result;
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




}
?>