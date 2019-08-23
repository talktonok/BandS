<?php
include ('includes.php');
if(isset($_SESSION['id'])){
    include('profile_header.php');
} else {
include('header.php');    
}

if (!isset($_GET['pro_id'])) {
    header("location:index.php");
    exit();
}

$id = $_GET['pro_id'];
$u = mysqli_fetch_assoc(get_a_product($id));

$us = get_user($u['user']);
$user = mysqli_fetch_assoc($us);
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
                    <td>Product name</td>
                    <td><?php echo($u['pro_name']); ?></td>
                </tr>
                <tr>
                    <td>Product type</td>
                    <td><?php echo($u['pro_type']); ?></td>
                </tr>
                <tr>
                    <td>Product details</td>
                    <td><?php echo ($u['pro_details']); ?></td>
                </tr>
                <tr>
                    <td>Product Price</td>
                    <td><?php echo($u['pro_price']) ?></td>
                </tr>
                <tr>
                    <td>Product Category</td>
                    <td><?php echo($u['pro_category']) ?></td>
                </tr>
                <tr>
                    <td>Saller:</td>
                    <td><?php echo($user['firstname'].' '. $user['surname'] ) ?></td>
                </tr>
                <tr>
                    <td>Contact:</td>
                    <td><?php echo($user['phone_no']) ?></td>
                </tr>
                <tr>
                    <td>Dept:</td>
                    <td><?php echo($user['department'] ) ?></td>
                </tr>
                <tr>
                    <th><a href="seller_info.php?pro_id=<?php echo($id);?>" class="btn btn-info">Seller info</a></th>
                    <th><a href="index.php" class="btn btn-info">Back</a></th>
                </tr>
            </table>
            
        </div>
        <div class="col-lg-6" >
            <img  src="<?php echo($u['pro_image']) ?>" style="text-align: center;">
        </div>
    </div>

</div> 