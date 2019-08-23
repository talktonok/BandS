<?php
session_start();
include('header.php');
if (isset($_POST['login'])) {
$username=$_POST['username'];
$password=$_POST['password'];

$login=login($username,$password);


if (mysqli_fetch_assoc($login)) {
	$_SESSION['email']=$username;
	header("Location:profile.php");
}else{
	?>
 <div class="alert alert-danger">
 	<?php echo "Invalid Login Details"; ?>
 </div>
	
	<?php
}
}
 ?>
 <div class="container-fluid">
 	<div class="col-lg-6" style="text-align: center;">
 		<form method="post" action="login.php">
 			<div class="form-group">
 				<input type="text" name="username" placeholder="Enter your Email" class="form-control">
 			</div>
 			<div class="form-group">
 				<input type="password" name="password" placeholder="Enter your Email" class="form-control">
 			</div>
 			<div class="form-group">
 				<input type="submit" name="login" value="Login" class="form-control btn btn-info">
 			</div>
 		</form>
 	</div>
 	
 </div>