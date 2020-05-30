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
                            <li><a class="nav-link" href="<?php echo "ProfileUser.php" ?>">Profile</a></li>
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