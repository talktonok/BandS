<?php
include('profile_header.php');
$id=$_SESSION['email'];
$u=get_user_product($id);
$tenants=get_user_tenants($id);

 ?>
<div class="container-fluid" style="margin:2%;">
	<div class="row">
		<div class="col-lg-12">
			
			<div class="row">
				<div class="col-lg-5" style="background: #666; padding: 2%; position:static; right:5px; bottom:5px"> 
					<h1 class="page-header" style="text-align: center;"><?php echo ($user['fname'] ." ".$user['lname']); ?></h1>
					<table class="table" style="position:static; right:0px; bottom:0px" >
						<tr>
							<td>Number of Houses</td>
							<td><?php echo(mysqli_num_rows($u)) ?></td>
						</tr>
						<tr>
							<td>Number of Tenants</td>
							<td><?php echo(mysqli_num_rows($tenants)) ?></td>
						</tr>
						<tr>
							<td>Number of Pending Tenants</td>
							<td><?php echo(mysqli_num_rows(get_tenants_pending($id))) ?></td>
						</tr>
						<tr>
							<td>Number of in House Tenants</td>
							<td><?php echo(mysqli_num_rows(get_tenants_in_house($id))) ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>