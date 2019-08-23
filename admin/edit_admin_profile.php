<?php
include ('includes.php');
include 'sidebar.php';

            //$id = $_GET['id'];
            $a = get_admin($id);
            
            $user = mysqli_fetch_assoc($a);
            

if (isset($_POST['save'])) {
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $sname = mysqli_real_escape_string($connection, $_POST['lname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);
    $imageName = $_FILES['image']['tmp_name'];
    $imageType = $_FILES['image']['type'];
    $imageSize = $_FILES['image']['size'];

    if ($password == $cpassword) {
        $image_new = mt_rand() . "_" . basename($_FILES["image"]['name']);
        $path = "images/user/" . $image_new;
        $update = update_admin($id, $email, $password, $fname, $sname, $path);
        move_uploaded_file($_FILES['image']['tmp_name'], $path);
        if ($update) {
            $message = "Succesfully Registered click to <a href=login.php>Login</a>";
        }
    } else {
        $message = "Password mismatch";
    }
}
?>
<div class="container-fluid" style="margin:2%;">
    <div class="row">
        <div class="col-lg-8">
            <?php if (isset($message)) {
                ?>
                <div class="alert alert-success">
                    <?php echo($message); ?>
                </div>
            <?php }
            
            ?>
            <div class="modal-body">
                <form method="post" action="register.php" enctype="multipart/form-data" >
                    <div class="form-group">
                        <input type="text" name="fname" class="form-control" value="<?php echo $user['firstname']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lname" class="form-control" value="<?php echo $user['surname']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="mail" name="email" class="form-control" value="<?php echo $user['user_email']; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="pnumber" class="form-control" value="<?php echo $user['']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" value="<?php echo $user['password']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="cpassword" class="form-control" value="<?php echo $user['password']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" value="<?php echo $user['image']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="save" class="btn btn-info form-control" value="Save">
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                &COPY; BandS 2019
            </div>

            </body>