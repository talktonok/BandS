<?php
include('includes.php');
include('profile_header.php');
$mail = $_SESSION['id'];
?>
<div class="container-fluid" style="margin:2%;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="text-align: center;"><?php echo ($user['firstname'] . " " . $user['surname']); ?></h1>

            <div class="row">
                <div class="col-lg-5" style="background: #666; padding: 2%;"> 
                    <table class="table">
                        <div class="col-sm-4 btn btn-info" style="background: #666; margin: 2%; border-color: white;">
                            <img class="img-circle" src="<?php echo($user['image']) ?>"  width="128" height="100">
                            <tr>
                                <td>First Name:</td>
                                <td><?php echo($user['firstname']) ?></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><?php echo($user['surname']); ?></td>
                            </tr>
                            <tr>
                                <td>Department:</td>
                                <td><?php echo($user['department']) ?></td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><?php echo($user['address']) ?></td>
                            </tr>
                            <tr>
                                <td>Phone No.:</td>
                                <td><?php echo($user['phone_no']) ?></td>
                            </tr>
                            <tr>
                                <td>State:</td>
                                <td><?php echo($user['state']) ?></td>
                            </tr>
                            <tr>
                                <td>Nationality:</td>
                                <td><?php echo($user['nationality']) ?></td>
                            </tr>
                            <tr>
                                <td>Department:</td>
                                <td><?php echo($user['department']) ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div> 
                                        <a href="edit_profile.php">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal3">
                                        Edit
                                    </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>