<!doctype html>
<html lang="en">

<head>
    <title>DashBoardAdmin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="../public/Css/DashboardAdmin.css">

<body>


    <!-- Navigation !-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../public/Images/Logo.png"
                    style="width: 100px; height: 70px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <div class="btn-group show-on-hover">
                        <?php session_start(); if(isset($_SESSION['UserName'])): ?>

                        <button type="button" class="btn btn-default dropdown-toggle" value=" " data-toggle="dropdown">
                            <?php echo $_SESSION['UserName'];?>
                        </button>

                        <ul class="dropdown-menu" role="menu">
                            <?php if($_SESSION['statusU']=="Admin"): ?>
                            <li><a class="nav-link active" href="<?php echo "DashboardAdmin.php" ?>">Dashboard Admin</a></li>
                            <?php endif; ?>
                            <li><a class="nav-link" href="<?php echo "../Controller/LogOut.php" ?>">Logout</a></li>

                        </ul>
                    </div>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link fa fa-user" href="UserView.php">Login | Regester</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

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
    <li tabindex="0" class="icon-customers"><i class="fas fa-clipboard-list"></i>&nbsp;<span><a href="ListVol.php">List Flight</a> </span></li>
    <li tabindex="0" class="icon-users"><i class="far fa-address-card"></i>&nbsp;<span><a href="Profile.php">Profile</a></span></li>
  </ul>
</nav>

<main>
  <div class="helper">
    You Welcome
        <?php
            echo '<span> '.$_SESSION["statusU"].' '.$_SESSION["UserName"].' </span>';
        ?>
  </div>
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