<?php
session_start();
if (isset($_SESSION['user_admin']) && isset($_GET['user'])) {

  require_once '../connect.php';
  $user = mysqli_query($conn, "SELECT * FROM users WHERE id = '{$_GET['user']}'");
  if ($user->num_rows == 1) {
    $user = mysqli_fetch_assoc($user);
  } else {
    header('location: ../../users.php?error_update=no_user_database');
    exit;
  }
} else {
  header('location: ../../users.php?error_update=no_user_id');
  exit;
}




// ادخل بيانا في الداتا بيز بكميه كبيره
// require_once '../connect.php';
// $male = ['ali', 'osama', 'mahmod', 'gamal', 'mazin', 'abdalla', 'ahmed', 'mohammed', 'aiob','eprahem', 'usof'];
// $female = ['shaimaa', 'yasmin', 'hoda', 'aliaa', 'sana', 'tasnim', 'esraa', 'zahraa', 'wegdaan','hend', 'salma'];
// $password = md5('testtesting');
// $rand = 'test testing';
// for ($i = 0; $i < 100; $i++) {
//   $phone = rand(1111111111, 99999999999);
//   $gender = rand(0, 1);
//   $email = uniqid() . '@gmail.com';
//   if ($gender == 0) {
//     $name = $male[array_rand($male)];
//   } else {
//     $name = $female[array_rand($female)];
//   }
//   mysqli_query($conn, "INSERT INTO users(
//     username,
//     password,
//     email,
//     address_1,
//     address_2,
//     gender,
//     priv,
//     phone,
//     image,
//     country,
//     county,
//     city
//   ) VALUES (
//     '$name',
//     '$password',
//     '$email',
//     '$rand',
//     '$rand',
//     '$gender',
//     '0',
//     '$phone',
//     'default.png',
//     'Egypt',
//     '$rand',
//     '$rand'
//   )");
// }
?>
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Register | Upcube - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../../assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="../../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
    
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="../../index.php" class="auth-logo">
                                    <img src="../../assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="../../assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>
    
                        <div class="p-3">
                            <form class="form-horizontal mt-3" action="index.php">
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="email" required="" placeholder="Email">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="text" required="" placeholder="Username">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" required="" placeholder="Password">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="form-label ms-1 fw-normal" for="customCheck1">I accept <a href="../../#" class="text-muted">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
                                    </div>
                                </div>
    
                                <div class="form-group mt-2 mb-0 row">
                                    <div class="col-12 mt-3 text-center">
                                        <a href="../../pages-login.php" class="text-muted">Already have account?</a>
                                    </div>
                                </div>
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->
        

        <!-- JAVASCRIPT -->
        <script src="../../assets/libs/jquery/jquery.min.js"></script>
        <script src="../../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../../assets/libs/node-waves/waves.min.js"></script>

        <script src="../../assets/js/app.js"></script>

    </body>
</html>