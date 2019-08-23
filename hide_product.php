<?php

include('includes.php');
if (isset($_GET['visibility'])) {
    $user_id = $_GET['id'];
    if ($_GET['visibility'] == '0') {
        $visibility = hide_product($user_id);
        if ($visibility) {
            header("Location:user_product.php?id=$user_id");
        } else {
            die(mysqli_error($connection));
        }
    } else {
        $visibility = unhide_product($user_id);
        if ($visibility) {
            header("Location:user_product.php?id=$user_id");
        }
    }
}
?>