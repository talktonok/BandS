<?php
include('header.php');
$h_id = mysqli_real_escape_string($connection, $_GET['house_id']);
$u = mysqli_fetch_assoc(get_a_product($h_id));
$ll_email = $u['landlord_email'];

if (isset($_POST['reserve'])) {

    $tenant_name = mysqli_real_escape_string($connection, $_POST['tname']);
    $tenant_address = mysqli_real_escape_string($connection, $_POST['taddress']);
    $tenant_phone = mysqli_real_escape_string($connection, $_POST['tphone']);
    $tenantImageName = $_FILES['tpicture']['tmp_name'];
    $tenantImageType = $_FILES['tpicture']['type'];
    $tenantImageSize = $_FILES['tpicture']['size'];

    $imageName = $tenant_name . "_" . mt_rand() . "_" . basename($_FILES["tpicture"]['name']);
    $path = "images/tenants/" . $imageName;
    $reserve = reserve($tenant_name, $tenant_address, $tenant_phone, $ll_email, (int) $h_id, $path);
    if ($reserve) {
        move_uploaded_file($_FILES['tpicture']['tmp_name'], $path);
        $message = "Succesfully reserved a House";
        header("Location:view_house.php?house_id=$h_id&&message=$message ");
        exit();
    } else {
        echo "Error";
    }
}
?>
<div class="container-fluid" style="margin:2%;">
    <div class="row">
        <div class="col-lg-6">
            <?php
            if (isset($_GET['message'])) {
                ?>
                <p class="alert alert-success"><?php echo($_GET['message']); ?></p>
                <?php
            }
            ?>
            <form method="Post" enctype="multipart/form-data" method="reserve.php">
                <div class="form-group">
                    <input type="text" name="tname" placeholder=" Tenant Full name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="taddress" placeholder="Tenant Address" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="tphone" placeholder="Tenant Phone Number" class="form-control">
                </div>
                <div class="form-group">
                    <input type="file" name="tpicture"  class="form-control">
                </div>
                <div class="form-group">
                    <td><input type="submit" name="reserve" value="Reserve"  class="form-control btn btn-success"></td><td> <input type="cancel" name="cancel" value="Cancel"  class="form-control btn btn-danger"></td>
                </div>

            </form>
        </div>
    </div>
</div>