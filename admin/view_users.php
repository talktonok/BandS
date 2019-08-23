<?php
include ('includes.php');
include('sidebar.php');
//$id = $_GET['pro_id'];
//$u = mysqli_fetch_assoc(get_all_users($id));
$u = get_all_users();
//$users = mysqli_fetch_assoc($u);
?>
<div class="container-fluid" style="margin: 2%;">
    <div class="row">
            <?php
            if (isset($_GET['message'])) {
            ?>
            <p class="alert alert-success"><?php echo($_GET['message']); ?></p>
            <?php
            }
            ?>
            
            <table class="table" style="background: #666">
                <tr>
                    <th>Photo</th>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Gender </th>
                    <th>State</th>
                    <th>Nationality</th>
                    <th>Department</th>
                    <th>Phone</th>
                </tr>
                <?php
                while ($user = mysqli_fetch_assoc($u)) {
                    ?>
                    <tr>
                        <td><img src="../<?php echo ($user['image']); ?> " height="50px" width="50px" style="text-align: center;"/></td>
                        <td><?php echo ($user['firstname'].' '.$user['surname']); ?></td>
                        <td><?php echo ($user['address']); ?></td>
                        <td><?php echo($user['gender']) ?></td>
                        <td><?php echo($user['state']) ?></td>
                        <td><?php echo($user['nationality']) ?></td>
                        <td><?php echo($user['department']) ?></td>
                        <td><?php echo($user['phone_no']) ?></td>
                        <td><a href="admin_user_view.php?id=<?php echo ($user['id']); ?>" class="btn btn-info" >View User</a>

                            <a href="delete_user.php?id=<?php echo ($user['id']); ?>" class="btn btn-danger" >Delete User</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>

        </div>
    </div> 
<?php include 'footer.php'; ?>