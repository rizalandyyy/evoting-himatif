<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Panitia</title>

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url() . 'assets/auth/'; ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url() . 'assets/auth/'; ?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url() . 'assets/auth/'; ?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url() . 'assets/auth/'; ?>css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url() . 'assets/auth/'; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/auth/'; ?>css/style-responsive.css" rel="stylesheet" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

    <div class="container">

        <form class="login-form" action="<?php echo base_url('panitia/signup') ?>" method="POST">
            <div class="login-wrap">
                <p class="login-img"><i class="icon_lock_alt"></i></p>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class='fas fa-id-card-alt'></i></span>
                    <input type="text" class="form-control" name="nama" placeholder="Nama" autofocus>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class='far fa-address-book'></i></span>
                    <input type="text" class="form-control" name="divisi" placeholder="Divisi" autofocus>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class='fas fa-user-tag'></i></span>
                    <input type="text" class="form-control" name="email" placeholder="Email" autofocus>
                </div>
                <label class="checkbox">
                    <!-- <input type="checkbox" value="remember-me"> Remember me -->
                    <!-- <span class="pull-right"> <a href="#"> Forgot Password?</a></span> -->
                </label>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Daftar</button>
            </div>
        </form>
        <div class="text-right">
            <div class="credits">
                <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </div>
    </div>


</body>

</html>