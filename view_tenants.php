<?php
include('profile_header.php');
$user_id = $_GET['house_id'];
$tenants = view_tenants($id, $user_id);
?>
<div class="container-fluid" style="margin: 2%;">
    <div class="row">
        <div class="col-lg-12" style="background: #666;">
            <?php
            if (mysqli_num_rows($tenants) == 0) {
                ?>
                <h1 class="alert alert-success">No Tenants for dis house Yet</h1>
                <?php
                exit();
            }
            ?>
            <table class="table">
                <tr>
                    <th>Tenant Name</td>
                    <th>Tenant Address</th>
                    <th>Tenant Phone Number</th>
                    <th>Date Approved</th>
                    <th>Date of Leaving</th>
                    <th>Tenant Picture</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php
                while ($tenant = mysqli_fetch_assoc($tenants)) {
                    ?>
                    <tr>
                        <td><?php echo($tenant['tenant_name']) ?></td>
                        <td><?php echo($tenant['tenant_address']) ?></td>
                        <td><?php echo($tenant['tenant_phone']) ?></td>
                        <td><?php
                            if (!$tenant['date_approved'] == "") {
                                echo(date("Y-m-d", strtotime($tenant['date_approved'])));
                            } else {
                                echo("Not Yet Approved");
                            }
                            ?>

                        </td>
                        <td>
                            <?php
                            if (!$tenant['date_leaving'] == "") {
                                echo(date("Y-M-D", strtotime($tenant['date_leaving'])));
                            } else {
                                echo("Not Yet Approved");
                            }
                            ?>

                        </td>
                        <td>
                            <img src="<?php echo($tenant['tenant_image']); ?>" width='100px' height='100px'>
                        </td>
                        <td><?php
                            if ($tenant['status'] == "1") {
                                echo("<i>Approved</i>");
                            } else {
                                echo("<i>pending </i>");
                            }
                            ?>

                        </td>
                        <td>
                            <?php
                            if ($tenant['status'] == '1') {
                                echo("In house");
                            } else {
                                ?>
                                <a href="approved.php?tenant=<?php echo($tenant['tenant_id']); ?>&value=1" class="btn btn-success">Approve</a>
                                <a href="approved.php?tenant=<?php echo($tenant['tenant_id']); ?>&value=0" class="btn btn-danger">Reject</a>
                                <?php
                            }
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