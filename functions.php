<?php

function add_user($email, $password, $fname, $sname, $gender, $address, $state, $nationality, $department, $pnumber, $image) {

    global $connection;
    $query = "INSERT INTO user VALUES(NULL,'$email','$password','$fname','$sname','$gender','$address','$state','$nationality','$department','$pnumber','$image')";

    $register = mysqli_query($connection, $query);
    return $register;
}

function login($username, $password) {
    global $connection;
    $query = "SELECT * FROM user WHERE user_email='$username' AND user_password='$password'";
    $login = mysqli_query($connection, $query);
    return $login;
}

function admin_login($username, $password) {
    global $connection;
    $query = "SELECT * FROM admin WHERE email_address='$username' AND password='$password'";
    $login = mysqli_query($connection, $query);
    return $login;
}

function get_admin($value) {
    global $connection;
    $query = "SELECT * FROM admin WHERE id='$value'";
    $admin = mysqli_query($connection, $query);
    return $admin;
}

function get_user($value) {
    global $connection;
    $query = "SELECT * FROM user WHERE user_id='$value'";
    $user = mysqli_query($connection, $query);
    return $user;
}

function getAll_user() {
    global $connection;
    $query = "SELECT * FROM user WHERE 1";
    $user = mysqli_query($connection, $query);
    return $user;
}

function get_user_product($u) {
    global $connection;
    $query = "SELECT * FROM product WHERE user='$u'";
    $user = mysqli_query($connection, $query);
    return $user;
}

function get_HU_product($u, $v) {
    global $connection;
    $query = "SELECT * FROM product WHERE visibility=$v AND user='$u'";
    $user = mysqli_query($connection, $query);
    return $user;
}

function getHU_product($v) {
    global $connection;
    $query = "SELECT * FROM product WHERE visibility=$v";
    $user = mysqli_query($connection, $query);
    return $user;
}

function add_product($productName, $productCategory, $productDescription, $productPrice, $productType, $productImage, $user) {
    global $connection;
    $query = "INSERT INTO product VALUES('' ,'$productName','$productCategory','$productDescription','$productPrice','$productType','$productImage','1', '$user')";
    $addProduct = mysqli_query($connection, $query);
    return $addProduct;
}

function hide_product($product_id) {
    global $connection;
    $query = "UPDATE product set visibility='0' WHERE pro_id=$product_id";
    $hide = mysqli_query($connection, $query);
    return $hide;
}

function update_admin($id, $email, $password, $firstname, $surname, $image) {
    global $connection;
    $query = "UPDATE admin set email_address=$email password=$password firstname=$firstname surname=$surname image=$image  WHERE pro_id=$id";
    $hide = mysqli_query($connection, $query);
    return $hide;
}

function update_user($id, $email, $password, $fname, $sname, $gender, $address, $state, $nationality, $department, $pnumber, $image) {
    global $connection;
    $query = "UPDATE user set user_email=$email password=$password firstname=$fname surname=$sname gender=$gender, address=$address, state=$state, nationality=$nationality, department=$department, phone_no=$pnumber, image=$image  WHERE user_id=$id";
    $hide = mysqli_query($connection, $query);
    return $hide;
}

function unhide_product($product_id) {
    global $connection;
    $query = "UPDATE product set visibility='1' WHERE pro_id=$product_id";
    $unhide = mysqli_query($connection, $query);
    return $unhide;
}

function get_all_product() {
    global $connection;
    $query = "SELECT * FROM  product WHERE visibility='1' ORDER BY pro_id";
    $all_product = mysqli_query($connection, $query);
    return $all_product;
}

function get_all_users() {
    global $connection;
    $query = "SELECT * FROM  user WHERE 1";
    $all_product = mysqli_query($connection, $query);
    return $all_product;
}

function get_visible_product() {
    global $connection;
    $query = "SELECT * FROM  product WHERE visibility='1' ORDER BY pro_id";
    $all_product = mysqli_query($connection, $query);
    return $all_product;
}

function get_hiden_product() {
    global $connection;
    $query = "SELECT * FROM  product WHERE visibility='0' ORDER BY pro_id";
    $all_product = mysqli_query($connection, $query);
    return $all_product;
}

function getAll_product() {
    global $connection;
    $query = "SELECT * FROM product WHERE 1";
    $all_product = mysqli_query($connection, $query);
    return $all_product;
}

function get_product_category($category) {
    global $connection;
    $query = "SELECT * FROM product WHERE pro_category='$category'";
    $all_product = mysqli_query($connection, $query);
    return $all_product;
}

function getHiden_product() {
    global $connection;
    $query = "SELECT * FROM  product WHERE visibility='0'" ;
    $all_house = mysqli_query($connection, $query);
    return $all_house;
}

function get_latest_product() {
    global $connection;
    $query = "SELECT * FROM product WHERE visibility='1' ORDER BY pro_id DESC LIMIT 20";
    $all_product = mysqli_query($connection, $query);
    return $all_product;
}

function delete_product($id) {
    global $connection;
    $query = "DELETE FROM product WHERE pro_id='$id'";
    $delete = mysqli_query($connection, $query);
    return $delete;
}

function get_a_product($id) {
    global $connection;
    $query = "SELECT * FROM product WHERE pro_id='$id'";
    $view = mysqli_query($connection, $query);
    return $view;
}

function reserve($tenant_name, $tenant_address, $tenant_phone, $ll_id, $h_id, $tenant_image) {
    global $connection;
    $query = "INSERT INTO tenant VALUES
	(NULL,'$tenant_name','$tenant_address','$tenant_phone','$ll_id',$h_id,NULL,NULL,'0','$tenant_image')";
    $reserve = mysqli_query($connection, $query);
    return $reserve;
}

function view_tenants($email, $house_id) {
    global $connection;
    $query = "SELECT * FROM tenant WHERE ll_email='$email' AND h_id=$house_id";
    $tenant = mysqli_query($connection, $query);
    return $tenant;
}

function approve($tenant_id) {
    global $connection;
    $date_a = date('Y-m-d', strtotime("now"));
    $date_l = date('Y-m-d', strtotime("+1 year"));
    $query = "UPDATE tenant set date_approved='$date_a',date_leaving='$date_l', status='1' WHERE tenant_id=$tenant_id";
    $approve = mysqli_query($connection, $query);

    return $approve;
}

function reject($tenant_id) {
    global $connection;
    $query = "UPDATE tenant set status='2' WHERE tenant_id=$tenant_id";
    $reject = mysqli_query($connection, $query);
    return $reject;
}

function delete_tenant($tenant_id) {
    global $connection;
    $query = "DELETE FROM tenant WHERE tenant_id=$tenant_id";
    $delete = mysqli_query($connection, $query);
    return $delete;
}

?>