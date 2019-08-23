<?php
include ('includes.php');
include('profile_header.php');
if (isset($_GET['pro_id'])) {
    $user_id = mysqli_real_escape_string($connection, $_GET['pro_id']);

    $delete = delete_product($user_id);

    if ($delete) {
        $message = "Succesfully Deleted";
        header("Location:user_product.php?message=$message");
    } else {
        $message = "Could not Delete";
        header("Location:user_product.php?message=$message");
    }
}
?>