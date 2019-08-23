<?php
include ('includes.php');
if(isset($_SESSION['id'])){
    include ('profile_header.php');
} else {
include('header.php');    
}

include ('modal.php');
?>
<div class="container-fluid" style="margin: 2%;">
    <div class="row">
        <div class="col-lg-12">

            <?php
            if (isset($_GET['category'])) {
                $category = $_GET['category'];
                if ($category == 1) {
                    $u = get_all_product();
                    $c = " Product";
                } elseif ($category == 2) {
                    $u = get_product_category("Book");
                   $c = "Books";
                } elseif ($category == 3) {
                    $u = get_product_category("Accessories");
                    $c = "Accessories";
                } elseif ($category == 4) {
                    $u = get_product_category("Clothes");
                    $c = "Clothes";
                }
            } else {
                $u = get_all_product();
                $c = "All available Product";
            }
            ?>
            <h3 class="page-header" style="text-align: center;"><?php echo('Available '.$c . ' for Sales'); ?></h3>
            <?php
            while ($user = mysqli_fetch_assoc($u)) {
                ?>
                
                <a href="view_product.php?pro_id=<?php echo($user['pro_id']) ?>">
                    <div class="col-sm-3 btn btn-info align-content-lg-center" style="background: #333333; margin: 0px; border-color: white;">
                        <img src="<?php echo($user['pro_image']) ?>" width="280px" height="280px">
                        <p><?php echo($user['pro_name']) ?></p>
<p><?php echo($user['pro_type']) ?></p>
                        <p>N<?php echo($user['pro_price']) ?>.00</p>
                    </div>
                </a>
                <?php
            }
            ?>


        </div>
    </div>
</div>
</div>