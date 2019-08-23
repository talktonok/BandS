<?php

if (!isset($_SESSION['id'])) {
    header("Location:index.php");
    exit();
}
$id = $_SESSION['id'];
$u = get_user($id);
$user = mysqli_fetch_assoc($u);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BandS</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body style="background: url(images/background.jpg) no-repeat; background-position: bottom;background-size:cover;min-height: 627px; color: white;">
        <div class="container-fluid" style="margin: 2%;">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-inverse navbar-fixed-top">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="all_product.php?category=1">Category
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="all_product.php?category=1">All</a></li>
                                        <li><a href="all_product.php?category=2">Books</a></li>
                                        <li><a href="all_product.php?category=3">Accessories</a></li>
                                        <li><a href="all_product.php?category=4">Clothes</a></li> 
                                    </ul>
                                </li>
                                <li <?php
                                if ($_SERVER['PHP_SELF'] == 'profile.php') {
                                    echo "class=active";
                                }
                                ?>><a href="profile.php">Profile</a></li>
                                <li <?php
                                if ($_SERVER['PHP_SELF'] == 'register_product.php') {
                                    echo "class=active";
                                }
                                ?>><a href="register_product.php">Add Product</a></li>
                                <li <?php
                                if ($_SERVER['PHP_SELF'] == 'user_product.php') {
                                    echo "class=active";
                                }
                                ?>><a href="user_product.php">View my Product</a></li>
                                
                                <li><a href="logout.php">Logout</a></li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" id="info"></div>
            </div>
        </div>


