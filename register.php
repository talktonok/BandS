<?php
include('header.php');

if (isset($_POST['register'])) {
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
        $update = add_user($email, $password, $fname, $sname, $gender, $address, $state, $nationality, $department, $pnumber, $path);
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
            <h2 class="page-header">Sign Up Form</h2>
            <form method="post" action="register.php" enctype="multipart/form-data" >
                <div class="form-group">
                    <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <input type="mail" name="email" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <select name="gender" class="form-control" required>
                        <option value="">Select Gender</option>
                        <option value="male" >Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="Nationality" class="form-control" required>
                        <option value="Nigeria">Select Country</option>
                        <option value="Nigeria" >Nigeria</option>
                        <option value="Ghana">Ghana</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="state" class="form-control" required>
                        <option value="">Select State</option>
                        <option value="Kaduna" >Kaduna</option>
                        <option value="Kano">Kano</option>
                        <option value="Bauchi">Bauchi</option>
                        <option value="Taraba">Taraba</option>
                        <option value="Lagos">Lagos</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="department" class="form-control" required>
                        <option value="">Department</option>
                        <option value="Computer Science" >Computer Science</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Chemestry">Chemestry</option>
                        <option value="Physics">Physics</option>
                        <option value="Geography">Geography</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="address" class="form-control" placeholder="Contact Address" required>
                </div>
                <div class="form-group">
                    <input type="text" name="pnumber" class="form-control" placeholder="Phone Number 0*********" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required>
                </div>
                <div class="form-group">
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="register" class="btn btn-info form-control" value="Register">
                </div>
            </form>
        </div>
    </div>
</div>