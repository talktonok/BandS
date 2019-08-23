<?php 
include('profile_header.php');
if (isset($_POST['add'])) {
	$id=$_SESSION['email'];
	$houseName=mysqli_real_escape_string($connection,$_POST['houseName']);
	$houseAddress=mysqli_real_escape_string($connection,$_POST['houseAddress']);
	$houseDescription=mysqli_real_escape_string($connection,$_POST['houseDescription']);
	$housePrice=mysqli_real_escape_string($connection,$_POST['housePrice']);
	$houseImageName=$_FILES['houseImage']['tmp_name'];
	$houseImageType=$_FILES['houseImage']['type'];
	$houseImageSize=$_FILES['houseImage']['size'];

	$imageName=$id."_".mt_rand()."_".basename($_FILES["houseImage"]['name']);
		$path="images/house/".$imageName;
		$reg_product=add_product($id,$houseName,$houseAddress,$houseDescription,$housePrice,$path);
		
		if ($reg_product) {
			move_uploaded_file($_FILES['houseImage']['tmp_name'], $path);
			$message="Sucessfully Registered New House";
			header("location:user_houses.php?message=$message");
			exit();
			
		}else{
			$message="Could not  Register New House";
		}

}
?>
<div class="container-fluid" style="margin: 2%;">
	<div class="row">
		<div class="col-md-6" style="background: #666; padding: 2%;">
			<h3 class="page-header">New House</h3>
			<?php 
				if (isset($message)) {
					?>
					<h2 class="alert alert-error"><?php echo($message) ?></h2>
					<?php
					exit();
				}
			?>
			<form action="register_house.php" method="Post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" name="houseName" placeholder="Enter the House Name" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="houseAddress" placeholder="Enter the House Address" class="form-control">
				</div>
				<div class="form-group">
					<textarea class="form-control" name="houseDescription"></textarea>
				</div>
				<div class="form-group">
					<input type="text" name="housePrice" placeholder="Enter the House price Per Annum" class="form-control">
				</div>
				<div class="form-group">
					<input type="file" name="houseImage"  class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" name="add" value="Register" class="form-control btn btn-info">
				</div>

			</form>
		</div>
	</div>
</div>