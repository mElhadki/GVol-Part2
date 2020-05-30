<?php

include '../model/Dbh.php';
include '../model/Vol.php';
$data=new Vol();

      $vol_data = $data->selectVol('vol');
       
       foreach($vol_data as $vol){
        ?>

        <tr>
            <td><?php echo $vol["id_Vol"]; ?></td>
            <td><?php echo $vol["LieuDepart"]; ?></td>
            <td><?php echo $vol["LieuArrive"]; ?></td>
            <td><?php echo $vol["DateDepart"]; ?></td>
            <td><?php echo $vol["DateArrive"]; ?></td>
            <td><?php echo $vol["NbPlace"]; ?></td>
            <td><?php echo $vol["Prix"]; ?></td>
            <td><?php echo $vol["statusV"]; ?></td>
            <?php if($vol['statusV'] === "Active")
            {
               ?>
               <td><a href="annulerVol.php?statusV=Desactive&id_Vol=<?php echo $vol["id_Vol"]; ?>" style="color:black;">
            <i class="fas fa-exchange-alt" style="color: #67DAD5;"></i>
         </a></td>

         <?php   } 
            
          else{ ?>
               
             
               <td><a href="annulerVol.php?statusV=Active&id_Vol=<?php echo $vol["id_Vol"]; ?>" style="color:black;">
               <i class="fas fa-exchange-alt" style="color: #67DAD5;"></i>
            </a></td>
            <?php   } ?>
            
          
            
       </tr>

    <?php
       }
    ?>