<?php
include ('includes.php');

if (isset($_GET['id'])) {
    $user_id = mysqli_real_escape_string($connection, $_GET['id']);

    $delete = delete_user($user_id);

    if ($delete) {
        $message = "Succesfully Deleted";
        header("Location:view_users.php?message=$message");
    } else {
        $message = "Could not Delete";
        header("Location:view_users.php?message=$message");
    }
}
?>