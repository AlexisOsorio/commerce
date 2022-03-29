<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Ecommerce</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../utils/css/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../utils/css/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../utils/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img src="../utils/images/iconlogin.jpg" class="profile-user-img img-fluid img-circle">
                <a href="../index.php" class="h1"><b>System</b>Login</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Inicie sesión con sus credenciales</p>

                <form id="form-login">
                    <div class="input-group mb-3">
                        <input id="user" type="email" class="form-control" placeholder="Correo Electronico" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="pass" type="password" class="form-control" placeholder="Contraseña" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="social-auth-links text-center mb-3">
                        <button type="submit" href="" class="btn btn-block btn-primary">
                            Iniciar Sesión
                        </button>
                    </div>
                </form>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="forgot-password.html">He olvidado mi contraseña</a>
                </p>
                <p class="mb-0">
                    <a href="#" class="text-center">Registrarse</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../utils/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../utils/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../utils/js/adminlte.min.js"></script>
    <script src="login.js"></script>
</body>

</html>