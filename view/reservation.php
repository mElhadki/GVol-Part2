<!doctype html>
<html lang="en">
<head>
    <title>Reservation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- link local CSS -->
    <link rel="stylesheet" href="../public/Css/Home.css">
</head>
<body>
<header>
    <!-- Includes -->
  <?php 
        include('../header.php');
        include('../Controller/VolRecuper.php');
        include('../Controller/Reservation.php');
  ?>

     <!-- Formulaire Passager -->

   
        <div id="logbox" style="background-color: #fff; width:50%">
          <form action="" method="post">
       
            <h1>Passager</h1><br/>
      
            <input name="Nom" id="LieuD" type="text" placeholder="Nom" class="input pass">
            <input name="Prenom" id="LieuA" type="text" placeholder="Prenom" class="input pass">
            <input name="Num_Passport" id="LieuD" type="text" placeholder="Num Passport" class="input pass">
            <input type="submit" value="Add Passager" name="AddPassager" class="inputButton" id="btn">
            <span class="text-success">  
                <p style="text-align: center;">
                     <?php  
                     if(isset($success_message))  
                     {  
                          echo $success_message;  
                     }  
                     ?>  
                </p>
            </span> 
          </form>
          </div>  
     
     
  


  <?php  
  include('Footer.php');    
  ?>
       

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</body>

</html>