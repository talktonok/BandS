<?php 
include ('includes.php');
if(isset($_SESSION['id'])){
    include('profile_header.php');
} else {
include('header.php');    
}

include('modal.php'); ?>
<div class="container-fluid" style="margin:2%;">

    <div class="row">
        <div class="col-lg-12">
            
            <?php
            
            $u = get_latest_product();
            while ($user = mysqli_fetch_assoc($u)) {
                ?>
            <a href="<?php if(isset($_SESSION['id'])){ echo 'view_product.php?pro_id= '.$user['pro_id'];} 
 else {
    echo '#myModal" data-toggle="modal" ';
 }?>">
                    <div class="col-sm-3 btn btn-info align-content-lg-center" style="background: #333333; margin: 0px; border-color: white;">
                        <img src="<?php echo($user['pro_image']) ?>" width="280px" height="280px">
                        <p><?php echo($user['pro_name']) ?></p>
                        
                        <p>N<?php echo($user['pro_price']) ?>.00</p>
                    </div>
                </a>
                <?php
            }
            ?>


        </div>
        <?php include 'footer.php'; ?>
    </div>

</div>
</body>
</html>