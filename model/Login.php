<?php

  class user extends Dbh {

    
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

    public function can_login($table_name, $where_condition)
    {

        $condition='';

        foreach($where_condition as $key => $value)
        {
            $condition .= $key . " = '".$value."' AND ";
        }

        $condition = substr($condition, 0, -5);

        $query=" SELECT * FROM " .$table_name. " WHERE " . $condition;
        $result = mysqli_query($this->connect(),$query);

        
        while($row = $result->fetch_assoc()){
           
            $_SESSION['statusU'] = $row['statusU'];
            $_SESSION['Id_U'] = $row['Id_U'];
            $_SESSION['email'] = $row['email'];   

        }
        
            if(mysqli_num_rows($result))
            {

               
                return TRUE;  
            }
            
        else{
                $this->errors = "Wrong Information";
            }
                
        
       

    }

    
    public function isUserExist($email){  

        $qr = "SELECT * FROM users WHERE email = '".$email."'";  
        $result = $this->connect()->query($qr);
        $row = $result->num_rows; 
        if($row > 0){  
            return true;  
        } else {  
            return false;  
        }  
    }

    function Userregister($UserName, $Passworde, $email) {  
         
            $register = "Insert into users (UserName, Passworde, email, statusU) values ('$UserName','$Passworde','$email','User')";  
            $result = $this->connect()->query($register);
            return true;  
        }
      
  

  }

  

?>