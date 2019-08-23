<?php
include ('includes.php');
include 'profile_header.php';


//$user = mysqli_fetch_assoc($a);
if (isset($_POST['save'])) {
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $sname = mysqli_real_escape_string($connection, $_POST['lname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $pnumber = mysqli_real_escape_string($connection, $_POST['pnumber']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);
    $state = mysqli_real_escape_string($connection, $_POST['pnumber']);
    $nationality = mysqli_real_escape_string($connection, $_POST['password']);
    $department = mysqli_real_escape_string($connection, $_POST['cpassword']);
    $imageName = $_FILES['image']['tmp_name'];
    $imageType = $_FILES['image']['type'];
    $imageSize = $_FILES['image']['size'];

    if ($password == $cpassword) {
        $image_new = mt_rand() . "_" . basename($_FILES["image"]['name']);
        $path = "images/user/" . $image_new;
        $update = update_user($id, $email, $password, $fname, $sname, $gender, $address, $state, $nationality, $department, $pnumber, $path);
        move_uploaded_file($_FILES['image']['tmp_name'], $path);
        if ($update) {
            $message = "Infomation Saved Succesfully";
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
                <form method="post" action="edit_profile.php" enctype="multipart/form-data" >
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
                        <select name="gender" class="form-control" required>
                            <option value="<?php echo $user['gender']; ?>"><?php echo $user['gender']; ?></option>
                            <option value="male" >Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="Nationality" class="form-control" required>
                            <option value="<?php echo $user['nationality']; ?>"><?php echo $user['nationality']; ?></option>
                            <option value="Nigeria" >Nigeria</option>
                            <option value="Ghana">Ghana</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="state" class="form-control" required>
                            <option value="<?php echo $user['state']; ?>"><?php echo $user['state']; ?></option>
                            <option value="Kaduna" >Kaduna</option>
                            <option value="Kano">Kano</option>
                            <option value="Bauchi">Bauchi</option>
                            <option value="Taraba">Taraba</option>
                            <option value="Lagos">Lagos</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="department" class="form-control" required>
                            <option value="<?php echo $user['department']; ?>"><?php echo $user['department']; ?></option>
                            <option value="Computer Science" >Computer Science</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Chemestry">Chemestry</option>
                            <option value="Physics">Physics</option>
                            <option value="Geography">Geography</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" value="<?php echo $user['address']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pnumber" class="form-control" value="<?php echo $user['phone_no']; ?>" required>
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
            </body>