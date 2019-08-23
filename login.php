<?php
include ('includes.php');
include('header.php');
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = login($username, $password);
    $log = mysqli_fetch_assoc($login); 

    if ($log) {
        $_SESSION['id'] = $log['user_id'];
        $_SESSION['email'] = $username;
        header("Location:profile.php");
    } else {
        ?>
        <div class="alert alert-danger">
            <?php echo "Invalid Login Details"; ?>
        </div>

        <?php
    }
}
?>


</div>