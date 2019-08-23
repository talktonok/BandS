<?php 
include('db_connection.php');
include('functions.php');
include('formValidator.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blisko Houses</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body style="background: url(images/background.jpg) no-repeat; background-position: bottom;background-size:cover;min-height: 627px; color: white;">
	<div class="container-fluid" style="margin: 2%;">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<div class="navbar-header">
							<a class="navbar-brand" href="index.php">Blisko</a>
						</div>
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="register.php">Register as Care taker</a></li>
							<li><a href="all_houses.php">View Houses</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="login.php" id="login">Login</a></li>
						</ul>

					</div>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6" id="info"></div>
		</div>
	</div>