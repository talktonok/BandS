<?php include('header.php');
$validate=new formValidator();

if (isset($_POST['register'])) {
	$fname=mysqli_real_escape_string($connection,$_POST['fname']);
	$lname=mysqli_real_escape_string($connection,$_POST['lname']);
	$id=mysqli_real_escape_string($connection,$_POST['email']);
	$gender=mysqli_real_escape_string($connection,$_POST['gender']);
	$address=mysqli_real_escape_string($connection,$_POST['address']);
	$pnumber=mysqli_real_escape_string($connection,$_POST['pnumber']);
	$password=mysqli_real_escape_string($connection,$_POST['password']);
	$cpassword=mysqli_real_escape_string($connection,$_POST['cpassword']);
	$imageName=$_FILES['image']['tmp_name'];
	$imageType=$_FILES['image']['type'];
	$imageSize=$_FILES['image']['size'];

	if (
		$validate->validateName($fname) &&
		$validate->validateName($lname) &&
		$validate->validateEmail($id) &&
		$validate->validateNumber($pnumber) &&
		$validate->confirmPassword($password,$cpassword) &&
		$validate->validateImage($imageType,$imageSize)
	) {
		$image_new=mt_rand()."_".basename($_FILES["image"]['name']);
		$path="images/landlords/".$image_new;
		$update=add_user($fname,$lname,$id,$gender,$address,$pnumber,$password,$path);
		move_uploaded_file($_FILES['image']['tmp_name'], $path);
		if ($update) {
			$message="Succesfully Registered click to <a href=login.php>Login</a>";
		}
	}else{
		$errors=$validate->getMessage();
	}

}


?>
<div class="container-fluid" style="margin:2%;">
	<div class="row">
		<div class="col-lg-8">
			<?php if(isset($message)) {
				?>
				<div class="alert alert-success">
					<?php echo($message); ?>
				</div>
				<?php
				exit();
			}elseif (isset($errors)) {
				foreach ($errors as $value) {
					?>

					<div class="alert alert-danger">
						<strong><?php echo strtoupper($value);  ?></strong> 
					</div>

					<?php
				}
				
			} 

			?>
			<h2 class="page-header">Register as Landload</h2>
			<form method="post" action="register.php" enctype="multipart/form-data" >
				<div class="form-group">
					<input type="text" name="fname" class="form-control" placeholder="First Name" required>
				</div>
				<div class="form-group">
					<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
				</div>
				<div class="form-group">
					<input type="mail" name="email" class="form-control" placeholder="Email Address" required>
				</div>
				<div class="form-group">
					<select name="gender" class="form-control" required>
						<option value="">Select Gender</option>
						<option value="male" >Male</option>
						<option value="female">Female</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" name="address" class="form-control" placeholder="Contact Address" required>
				</div>
				<div class="form-group">
					<input type="text" name="pnumber" class="form-control" placeholder="Phone Number 0*********" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Password" required>
				</div>
				<div class="form-group">
					<input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required>
				</div>
				<div class="form-group">
					<input type="file" name="image" class="form-control" required>
				</div>
				<div class="form-group">
					<input type="submit" name="register" class="btn btn-info form-control" value="Register">
				</div>
			</form>
		</div>
	</div>
</div>