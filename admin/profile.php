<?php
include ('includes.php');
include('sidebar.php');
//$mail = $_SESSION[''];
?>
<div class="container-fluid" style="margin:2%;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="text-align: center;"><?php //echo ($admin__pro['firstname'] . " " . $admin__pro['surname']); ?></h1>

            <div class="row shadow-lg">
                <div class="col-lg-5 shadow-lg" style="background: #144952; padding: 2%;"> 
                    <table class="table shadow-lg text-success">
                        <div class="col-sm-4 btn btn-info" style="background: #666; margin: 2%; border-color: white;">
                            <img class="img-circle" src="<?php echo($user['image']) ?>"  width="128" height="100">
                            <tr>
                                <td>First Name:</td>
                                <td><?php echo($user['firstname']) ?></td>
                            </tr>
                            <tr>
                                <td> Surname:</td>
                                <td><?php echo($user['surname']); ?></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><?php echo($user['email_address']) ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div>  
                                        <a href="edit_admin_profile.php">
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="edit_profil.php">
                                        Edit
                                        <i class="fa fa-pied-piper" ></i>
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
