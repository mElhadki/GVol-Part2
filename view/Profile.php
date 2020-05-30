<!doctype html>
<html lang="en">
<head>
    <title>Profil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="../public/Css/DashboardAdmin.css">
<link rel="stylesheet" href="../public/Css/Profile.css">
<style>

</style>
<body>                                                                                                                                                                                                                                                                                                      
    <!-- Navigation !-->
    <?php include('../header.php') ?>
    <nav class="menu" tabindex="0" style="margin-top:96px;">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
		<img src="../public/Images/profile.png"/>
        <?php
            echo '<h1> '.$_SESSION["statusU"].'</h1>';
        ?>
  </header>
	<ul>
    <li tabindex="0" class="icon-dashboard"><i class="fas fa-cogs"></i>&nbsp;<span><a href="Addvol.php">Add Flight</a></span></li>
    <li tabindex="0" class="icon-customers"><i class="fas fa-clipboard-list"></i>&nbsp;<span><a href="ListVol.php">List Flight</a></span></li>
    <li tabindex="0" class="icon-users"><i class="far fa-address-card"></i>&nbsp;<span>Profile</span></li>
  </ul>
</nav>

<main>
<div class="container">
<h1>Profile User</h1>
<h2>All Your Information Here</h2><div class="service-details">
    <img src="../public/Images/girl.png" alt="realm">
    <div class="service-hover-text">
        <?php if(isset($_SESSION['UserName']) && isset($_SESSION['statusU']) && isset($_SESSION['email'])): ?>
            
        <h3>User</h3><h4><?php echo $_SESSION['UserName']; ?></h4>
       
        <p>Status : <?php echo $_SESSION['statusU']; ?> </p>
    </div><div class="service-white service-text"><p>Email</p>
    <a href="#"><?php echo $_SESSION['email']; ?></a></div></div></div>
    <?php endif ?>   
</main>



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