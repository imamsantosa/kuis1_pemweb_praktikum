<?php
    session_start();
    if (empty($_SESSION['username'])) {
        //redirect ke halaman login
        header('location:index.php');
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
    <body style="background-image: url('assets/image/gambar_home.jpg');">

        <div class="container">
            <div class="col-md-12">
            	<h3 style="color: #fff">Selamat datang <?php echo $_SESSION['username']; ?></h3>
            	<a href="logout.php" class="btn btn-success">LOGOUT</a>
            </div>
        </div>


        <!-- jQuery -->

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/jquery/jquery-2.1.4.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
    </body>
    </html>
