<?php
session_start();
if (!isset($_SESSION['email'])) {
 	header("Location:index.php");
 	exit();
 } 
include('db_connection.php');
include('functions.php');
$id=$_SESSION['email'];
$u=get_user($id);
$user=mysqli_fetch_assoc($u);

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
						<ul class="nav navbar-nav">
							<li <?php if( $_SERVER['PHP_SELF']=='/rent/profile.php'){ echo "class=active";} ?>><a href="profile.php">Profile</a></li>
							<li <?php if( $_SERVER['PHP_SELF']=='/rent/register_house.php'){ echo "class=active";} ?>><a href="register_house.php">Add Houses</a></li>
							<li <?php if( $_SERVER['PHP_SELF']=='/rent/user_houses.php'){ echo "class=active";} ?>><a href="user_houses.php">View my Houses</a></li>
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
