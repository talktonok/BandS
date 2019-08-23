<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>BandS</title>
        <link rel="stylesheet" type="text/css" href="bb/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/signin.css">
        <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <script src="bb/jquery-1.11.1.min.js"></script>
        <script src="bb/bootstrap.min.js" ></script>
    </head>
    <body style="background: url(images/background.jpg) no-repeat; background-position: bottom;background-size:cover;min-height: 627px; color: white;">
        <div class="container-fluid" style="margin: 2%;">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-inverse navbar-fixed-top">
                        <div class="container-fluid">

                            <div class="navbar-header">
                                <a class="navbar-brand" href="index.php">BandS</a>
                            </div>
                            <ul class="nav navbar-nav">

                                <li class="active"><a href="index.php">Home</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="all_product.php?category=1">All</a></li>
                                        <li><a href="all_product.php?category=2">Books</a></li>
                                        <li><a href="all_product.php?category=3">Accessories</a></li>
                                        <li><a href="all_product.php?category=4">Clothes</a></li> 
                                    </ul>
                                </li>
                                <li><a href="#myModal2" data-toggle="modal">Register</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#myModal" data-toggle="modal" id="login">Login</a></li>

                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" id="info"></div>
            </div>

        </div>