<?php
include('includes.php');
include('profile_header.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" >
            <h1 class="page-header" style="text-align: center;"><?php
                echo ($user['firstname']
                . " " . $user['surname'] . " Product");
                ?></h1>
            <?php
            if (isset($_GET['message'])) {
                ?>
                <p class="alert alert-danger"><?php echo($_GET['message']) ?></p>
                <?php
            }
            $u = get_user_product($id);
            if (mysqli_num_rows($u) == 0) {
                ?>
                <h1 class="alert alert-danger">You have not post anything yet <a href="register_house.php">Click</a>  to add</h1>
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
                $u = get_user_product($id);
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
                        <td><a href="user_product_view.php?pro_id=<?php echo ($user['pro_id']); ?>" class="btn btn-info" >View</a>

                            <a href="delete_product.php?pro_id=<?php echo ($user['pro_id']); ?>" class="btn btn-danger" >Delete</a>

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