<?php 
include('header.php');
?>
<div class="container-fluid" style="margin: 2%;">
<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header" style="text-align: center;">LATEST HOUSES</h2>
				<?php
				$u=get_all_product();
				while ($user=mysqli_fetch_assoc($u)) {
					?>
				<a href="view_house.php?house_id=<?php echo($user['house_id']) ?>">
					<div class="col-sm-2 btn btn-info" style="background: #666; margin: 2%; border-color: white;">
						<img src="<?php echo($user['house_image']) ?>" width="150px" height="150px">
						<p><?php echo($user['house_name']) ?></p>
						<p><?php echo($user['house_description']) ?></p>
						<p>N<?php echo($user['house_price']) ?>.00</p>
					</div>
				</a>
					<?php
				}
				 ?>
				
				
			</div>
		</div>
	</div>
</div>