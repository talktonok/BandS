<?php

function add_user($fname,$lname,$email,$gender,$address,$pnumber,$password,$image){
	
	global $connection;
	$query="INSERT INTO landlord VALUES(NULL,'$fname','$lname','$email','$gender','$address','$pnumber','$password','$image')";

	$register=mysqli_query($connection,$query);
	return $register;
}
function all_lanlords(){
	global $connection;
	$query="SELECT * FROM landlord";
	$landlord=mysqli_query($connection,$query);
	return $landlord;
}
function get_user_tenants($email){
	global $connection;
	$query="SELECT * FROM tenant WHERE ll_email='$email'";
	$tenant=mysqli_query($connection,$query);
	return $tenant;
}
function get_tenants_in_house($email){
	global $connection;
	$query="SELECT * FROM tenant WHERE ll_email='$email' and status=1";
	$tenant=mysqli_query($connection,$query);
	return $tenant;
}
function get_tenants_pending($email){
	global $connection;
	$query="SELECT * FROM tenant WHERE ll_email='$email' and status=0";
	$tenant=mysqli_query($connection,$query);
	return $tenant;
}
function login($username,$password){
	global $connection;
	$query="SELECT email,password FROM landlord WHERE email='$username' AND password='$password'";
	$login=mysqli_query($connection,$query);
	return $login;
}

function get_user($value){
	global $connection;
	$query="SELECT * FROM landlord WHERE email='$value'";
	$user=mysqli_query($connection,$query);
	return $user;
}
function get_user_product($email){
	global $connection;
	$query="SELECT * FROM house WHERE landlord_email='$email'";
	$user=mysqli_query($connection,$query);
	return $user;
}
function add_product($email,$houseName,$houseAddress,$houseDescription,$housePrice,$houseImageName){
	global $connection;
	$query="INSERT INTO house VALUES(NULL,'$email','$houseName','$houseAddress','$houseDescription','$housePrice','$houseImageName','1')";
	$reg_house=mysqli_query($connection,$query);
	return $reg_house;
}
function hide_product($house_id){
	global $connection;
	$query="UPDATE house set visibility='0' WHERE house_id=$house_id";
	$hide= mysqli_query($connection,$query);
	return $hide;
}
function unhide_product($house_id){
	global $connection;
	$query="UPDATE house set visibility='1' WHERE house_id=$house_id";
	$unhide= mysqli_query($connection,$query);
	return $unhide;

}
function get_all_product(){
global $connection;
$query="SELECT * FROM  house WHERE visibility='1' ORDER BY house_id";
$all_house=mysqli_query($connection,$query);
return $all_house;
}
function get_latest_product(){
global $connection;
$query="SELECT * FROM house WHERE visibility='1' ORDER BY house_id DESC LIMIT 20";
$all_house=mysqli_query($connection,$query);
return $all_house;
}
function delete_product($id){
	global $connection;
	$query="DELETE FROM house WHERE house_id='$id'";
	$delete=mysqli_query($connection,$query);
	return $delete;

}
function get_a_product($id){
	global $connection;
	$query="SELECT * FROM house WHERE house_id=$id";
	$view=mysqli_query($connection,$query);
	return $view;
}
function reserve($tenant_name,$tenant_address,$tenant_phone,$ll_id,$h_id,$tenant_image){
	global $connection;
	$query="INSERT INTO tenant VALUES
	(NULL,'$tenant_name','$tenant_address','$tenant_phone','$ll_id',$h_id,NULL,NULL,'0','$tenant_image')";
	$reserve=mysqli_query($connection,$query);
	return $reserve;
}
function view_tenants($email,$house_id){
	global $connection;
	$query="SELECT * FROM tenant WHERE ll_email='$email' AND h_id=$house_id";
	$tenant=mysqli_query($connection,$query);
	return $tenant;
}
function approve($tenant_id){
	global $connection;
	$date_a=date('Y-m-d',strtotime("now"));
	$date_l=date('Y-m-d',strtotime("+1 year"));
	$query="UPDATE tenant set date_approved='$date_a',date_leaving='$date_l', status='1' WHERE tenant_id=$tenant_id";
	$approve=mysqli_query($connection,$query);

	return $approve;
}
function reject($tenant_id){
	global $connection;
	$query="UPDATE tenant set status='2' WHERE tenant_id=$tenant_id";
	$reject=mysqli_query($connection,$query);
	return $reject;
}
function delete_tenant($tenant_id){
	global $connection;
	$query="DELETE FROM tenant WHERE tenant_id=$tenant_id";
	$delete=mysqli_query($connection,$query);
	return $delete;
}

 ?>