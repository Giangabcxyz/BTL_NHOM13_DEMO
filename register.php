<!-- <?php
    include "admincp/config/config.php";
    
?> -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="admincp/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admincp/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                        <!-- bg-login-image -->
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
								<?php
								if($_POST){
									$user_name=$_POST['user_name'];
									$user_pass=$_POST['user_pass'];
                                    $user_cf_pass = $_POST['user_cf_pass'];
                                    if($user_cf_pass !== $user_pass)
                                    {
                                        echo '<p style="color:red">Mật khẩu không đúng! Vung lòng nhập lại </p>';
                                    }else{
                                        echo '<p style="color:green">Đăng kí thanh công</p>';
                                    }
									 $result=mysqli_query($conn,"INSERT INTO admin  (username,password)  VALUES ('".$user_name."','".$user_pass."')");
								
									// var_dump($row);
									// die;
									if($result){
                                       header("Location:admincp/login.php");
									}
									}
									?>							
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Đăng kí</h1>
                                    </div>
                                    <form class="user" action="register.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="user_name">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password"  name="user_pass">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Confirm Password"  name="user_cf_pass">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit"  class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                      
                                    </form>
                                    
                                  
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