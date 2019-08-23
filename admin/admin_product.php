<?php
include ('includes.php');
include 'sidebar.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" >
            <h1 class="page-header" style="text-align: center;"><?php
            if(isset($_GET['visibility'])){
                $v=$_GET['visibility'];
                if($v==1){
                    $p = "Visible";
                } elseif ($v==0) {
                    $p = "Hiden";
                }
                } else {
                $p = "Posted";    
                }
                echo ('All '.$p. ' Products');
                ?></h1>
            <?php
            if (isset($_GET['message'])) {
                ?>
                <p class="alert alert-danger"><?php echo($_GET['message']) ?></p>
                <?php
            }
            $visibility = $_GET['visibility'];
            if(isset($visibility)){
                
            $u = get_hu_product($id, $visibility);
            } else {
            $u = get_user_product($id);    
            }
            if (mysqli_num_rows($u) == 0) {
                if(isset($v)){
                $n = 'no '.$p.' post';
                ?>
                <h1 class="alert alert-danger">You have <?php echo $n; ?> yet </h1>
                <?php
                } else {
                $n = 'not '.$p.' anything'; 
                ?>
                <h1 class="alert alert-danger">You have <?php echo $n; ?> yet <a href="post_product.php">Click</a>  to add</h1>
                <?php
                }
                ?>
                
                <?php
                exit();
            }
            ?>
            <table class="table" style="background: #666">
                <tr>
                    <th>Product Name</th>
                    <th>Address</th>
                    <th>Price </th>
                    <th>Visibility</th>
                    <th>Status</th>
                </tr>
                <?php
                
                while ($user = mysqli_fetch_assoc($u)) {
                    ?>
                    <tr>
                        <td><?php echo ($user['pro_name']); ?></td>
                        <td><?php echo ($user['pro_details']); ?></td>
                        <td><?php echo($user['pro_price']) ?></td>
                        <td>
                            <?php
                            if ($user['visibility'] == '1') {
                                echo("Visible");
                            } else {
                                echo("Hidden");
                            }
                            ?>

                        </td>
                        <td><a href="admin_product_view.php?pro_id=<?php echo ($user['pro_id']); ?>" class="btn btn-info" >View</a>

                            <a href="../delete_product.php?pro_id=<?php echo ($user['pro_id']); ?>" class="btn btn-danger" >Delete</a>

                            <?php if ($user['visibility'] == '1') {
                                ?>
                                <a href="hide_product.php?id=<?php echo ($user['pro_id']); ?>&visibility=0" class="btn btn-danger" >Hide</a>
                                <?php
                            } else {
                                ?>
                                <a href="hide_product.php?id=<?php echo ($user['pro_id']); ?>&visibility=1" class="btn btn-danger" >Unhide</a>
                            <?php }
                            ?>


                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>