<?php
include('includes.php');

if (isset($_POST['add'])) {
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    $productName = mysqli_real_escape_string($connection, $_POST['productName']);
    $productCategory = mysqli_real_escape_string($connection, $_POST['productCategory']);
    $productType = mysqli_real_escape_string($connection, $_POST['productType']);
    $productDescription = mysqli_real_escape_string($connection, $_POST['productDescription']);
    $productPrice = mysqli_real_escape_string($connection, $_POST['productPrice']);
    $productImageName = $_FILES['productImage']['tmp_name'];
    $productImageType = $_FILES['productImage']['type'];
    $productImageSize = $_FILES['productImage']['size'];
    

    $imageName = $id . "_" . mt_rand() . "_" . basename($_FILES["productImage"]['name']);
    $path = "images/product/" . $imageName;
    $reg_product =  add_product($productName, $productCategory, $productDescription, $productPrice, $productType, $path, $id);

    if ($reg_product) {
        move_uploaded_file($_FILES['productImage']['tmp_name'], $path);
        $message = "Sucessfully Uploaded your product";
        header("location:user_product.php?message=$message");
        exit();
    } else {
        $message = "Could not Upload Product";
    }
}
include('profile_header.php');
?>
<div class="container-fluid" style="margin: 2%;">
    <div class="row">
        <div class="col-md-6" style="background: #666; padding: 2%;">
<?php
if (isset($message)) {
    ?>
                <h2 class="alert alert-error"><?php echo($message) ?></h2>
                <?php
            }
            ?>
            <form action="register_product.php" method="Post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="productName" placeholder="Enter the Product Name" class="form-control">
                </div>
                <div class="form-group">
                    <select name="productCategory" class="form-control" required>
                        <option value="">Select Category</option>
                        <option value="Book" >Books</option>
                        <option value="Accessories" >Accessories</option>
                        <option value="Clothes">Clothes</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="productType" class="form-control" required>
                        <option value="">Select type</option>
                        <option value="fearly Used" >fearly Used</option>
                        <option value="Used" >Used</option>
                        <option value="New">New</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="productDescription"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" name="productPrice" placeholder="Enter the Product Price" class="form-control">
                </div>
                <div class="form-group">
                    <input type="file" name="productImage"  class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="add" value="Upload" class="form-control btn btn-info">
                </div>

            </form>
        </div>
    </div>
</div>