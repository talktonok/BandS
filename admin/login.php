<?php
include ('includes.php');
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = admin_login($username, $password);
    $log = mysqli_fetch_assoc($login); 

    if ($log) {
        $_SESSION['admin'] = $log['id'];
        $_SESSION['email'] = $username;
        header("Location:index.php");
    } else {
        ?>
        <div class="alert alert-danger">
            <?php echo "Invalid Login Details"; ?>
        </div>

        <?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BandS Admin-Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-secondary">

    <div class="container shadow-lg" style="background-color: #9294a0;" >

    <!-- Outer Row -->
    <div class="row justify-content-center shadow-lg bg-gradient-secondary">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-2">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image shadow-sm"></div>
              <div class="col-lg-6 shadow-lg ">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                    <form class="user" method="POST" action="login.php">
                    <div class="form-group">
                        <input type="email" name="username" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                        <button type="submit" name="login" class="btn btn-secondary btn-user btn-block form-control form-control-user">
                      Login
                    </Button>
                  </form>
                  <hr>
                  <div class="text-center">
                      <a class="small" href="*" style="color: #9294a0;">Forgot Password?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
