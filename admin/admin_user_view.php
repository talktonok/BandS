<?php
include ('includes.php');


if (!isset($_GET['pro_id'])) {
    header("location:index.php");
    exit();
}
include('sidebar.php');
$id = $_GET['pro_id'];

$u = mysqli_fetch_assoc(get_a_product($id));
$seller = get_user($u['user'])
?>
<div class="container-fluid" style="margin: 2%;">
    <div class="row">
        <div class="table-responsive col-lg-6" style="float: right;">
            <table class="table" style="background: #666; border-radius: 2%;">
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
                    <td><?php echo($user['firstname'] . ' ' . $user['surname'] ) ?></td>
                </tr>
                <tr>
                <th><a href="profile.php" class="btn btn-info">Back</a></th>
                </tr>
            </table>

        </div>
        <img  src="<?php echo($u['pro_image']) ?>" style="text-align: center;">
    </div>

</div>