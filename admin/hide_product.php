<?php
include ('includes.php');

if (isset($_GET['visibility'])) {
    $user_id = $_GET['id'];
    $u = mysqli_fetch_assoc( get_a_product($user_id));
    $p=$u['visibility'];
    if ($_GET['visibility'] == '0') {
        $visibility = hide_product($user_id);
        if ($visibility) {
            header("Location:admin_product.php?id=$user_id&visibility=$p");
        } else {
            die(mysqli_error($connection));
        }
    }  else {
        $visibility = unhide_product($user_id);
        if ($visibility) {
            header("Location:admin_product.php?id=$user_id&visibility=$p");
        }
    }
} else {
    
header("Location:admin_product.php?id=$user_id&visibility=$p");
}
?>