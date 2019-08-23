<?php 
include('profile_header.php');
if (isset($_GET['id'])) {
	$user_id=mysqli_real_escape_string($connection,$_GET['id']);

	$delete=delete_product($user_id);

	if ($delete) {
		$message="Succesfully Deleted";
		header("Location:user_houses.php?message=$message");
	}else{
		$message="Could not Delete";
		header("Location:user_houses.php?message=$message");
	}
}
?>