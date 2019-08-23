<?php
include('header.php');
if (!isset($_GET['house_id'])) {
	header("location:index.php");
	exit();
}
$id=$_GET['house_id'];

$u=mysqli_fetch_assoc(get_a_product($id));

 ?>
 <div class="container-fluid" style="margin: 2%;">
 	<div class="row">
 		<div class="col-lg-12">
 			<h3 class="page-header"><?php echo($u['house_name']); ?></h3>
 			<?php
 				if (isset($_GET['message'])) {
 					?>
 					<p class="alert alert-success"><?php echo($_GET['message']);?></p>
 					<?php
 				}
 			 ?>
 			<table class="table" style="background: #666; border-radius: 2%;">
 				<tr>
 					<td>House name</td>
 					<td><?php echo($u['house_name']); ?></td>
 				</tr>
 				<tr>
 					<td>House Address</td>
 					<td><?php echo ($u['house_address']); ?></td>
 				</tr>
 				<tr>
 					<td>House Price</td>
 					<td><?php echo($u['house_price']) ?></td>
 				</tr>
 				<tr>
 					<td>House name</td>
 					<td><?php echo($u['house_name']) ?></td>
 				</tr>
 				<tr>
 					<th><a href="reserve.php?house_id=<?php echo($u['house_id']) ?>" class="btn btn-info">Reserve</a></th>
 					<th><a href="index.php" class="btn btn-info">Back</a></th>
 				</tr>
 			</table>
 			<img  src="<?php echo($u['house_image']) ?>" style="text-align: center;">
 		</div>
 	</div>
 	
 </div>