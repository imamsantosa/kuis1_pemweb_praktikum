<?php
    session_start();
    if (!empty($_SESSION['username'])) {
        //redirect ke halaman login
        header('location:home.php');
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login KUIS</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap/css/santosa.css" rel="stylesheet">
    <!-- Custom CSS -->
    <!-- Custom Fonts -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="background-image: url('assets/image/gambar_login.jpg');">

        <div class="container">
            <div class="col-md-4 col-md-offset-4"><?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == '1') {
                        echo '<div class="alert alert-danger" role="alert" style="margin-top:55px; margin-bottom:-70px;"><strong>Gagal Login!</strong><br/><h5>Username anda tidak terdaftar</h5></div>';
                        
                    }
                    if ($_GET['error'] == '2') {
                        echo '<div class="alert alert-danger" role="alert" style="margin-top:55px; margin-bottom:-70px;"><strong>Gagal Login!</strong><br/><h5>Password yang anda masukan salah</h5></div>';
                        
                    }

                }

                if(isset($_GET['action']) && $_GET['action'] == 'logout'){
                    echo '<script>alert("Anda sudah Logout! Terima Kasih")</script>';
                }

            ?>
            </div>
            <div class="login-screen">
                <form class="form-horizontal" action="" method="POST">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" placeholder="Username" name="username" id="username" required="true">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="true">
                            </div>
                        </div>
                    </div>

                    <input type="submit" id="Login" name="Login" value="Masuk" class="btn btn-lg btn-primary btn-block">
                </form>
            </div>
        </div>


        <!-- jQuery -->

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/jquery/jquery-2.1.4.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
    </body>
    </html>

    <?php
    if (isset($_POST['Login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($username != 'imamsantosa'){
            header('location:index.php?error=1');
        } else if($password != '145150201111170'){
            header('location:index.php?error=2');
        } else {

            $_SESSION['username'] = $username;
            header('location:home.php');
        }
    } 

?>
