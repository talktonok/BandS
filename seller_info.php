<?php
include ('includes.php');
include('header.php');
if (!isset($_GET['pro_id'])) {
    header("location:index.php");
    exit();
}

$id = $_GET['pro_id'];
$user = mysqli_fetch_assoc(get_a_product($id));

$u = get_user($user['user']);
$user = mysqli_fetch_assoc($u);
?>
<div class="container-fluid" style="margin: 2%;">
    <div class="row">
        <div class="table-responsive col-lg-6" style="float:right;">
            <?php
            if (isset($_GET['message'])) {
                ?>
                <p class="alert alert-success"><?php echo($_GET['message']); ?></p>
                <?php
            }
            ?>
            <table class="table" style="background: #666; border-radius: 2%; width:100%; position: relative; height:100%;">
                <tr>
                    <td>Saller Name:</td>
                    <td><?php echo($user['firstname'] . ' ' . $user['surname']); ?></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><?php echo($user['address']); ?></td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td><?php echo ($user['department']); ?></td>
                </tr>
                <tr>
                    <td>Contact:</td>
                    <td><?php echo($user['phone_no']) ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo($user['user_email']) ?></td>
                </tr>
                <tr>
                    <th></th>
                    <th><a href="view_product.php?pro_id=<?php echo ($user['pro_id']); ?>" class="btn btn-info">Back</a></th>
                </tr>
            </table>

        </div>
        <div class="col-lg-6" >
            <img  src="<?php echo($user['pro_image']) ?>" style="text-align: center;">
        </div>
    </div>

</div>