<?php
$page = "Reset Password";
require 'controller/auth/login.php';
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8" />
    <title>Reset Password | Respek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Reformasi Pengawasan Spesialiasi Ketenagakerjaan" name="description" />
    <meta content="ImZack Dev" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/sumut.png">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="auth-fluid-pages pb-0">

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- Logo -->
                    <div class="auth-brand text-center text-lg-left">
                        <a href="index">
                            <span><img src="assets/images/logodisnaker.png" alt="" height="40"></span>
                        </a>
                    </div>

                    <!-- title-->
                    <h4 class="mt-0">Reset Password</h4>
                    <p class="text-muted mb-4">Enter your email address and we'll send you an email with instructions to reset your password.</p>

                    <!-- form -->
                    <form action="" method="POST">
                        <div class="form-group mb-3">
                            <label for="emailaddress">Email address</label>
                            <input class="form-control" type="email" name="username" id="emailaddress" required="" placeholder="Enter your email">
                        </div>
                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" name="reset" type="submit"><i class="mdi mdi-lock-reset"></i> Reset Password </button>
                        </div>

                    </form>
                    <!-- end form-->

                    <!-- Footer-->
                    <footer class="footer footer-alt">
                        <p class="text-muted">Back to <a href="index" class="text-muted ml-1"><b>Log In</b></a></p>
                    </footer>

                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <?php
        require 'assets/template/notes.php';
        ?>
        <!-- end Auth fluid right content -->
    </div>
    <?php if (@$_SESSION['sukses']) { ?>
        <script>
            swal("Good job !", "<?php echo $_SESSION['sukses']; ?>", "success").then(function() {
                window.location = "<?php echo $_SESSION['redirectlogin'] ?>";
            });
        </script>
    <?php unset($_SESSION['sukses']);
    } ?>
    <?php if (@$_SESSION['error']) { ?>
        <script>
            swal("Perhatian !!", "<?php echo $_SESSION['error']; ?>", "error");
        </script>
    <?php unset($_SESSION['error']);
    } ?>
    <!-- end auth-fluid-->

    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from coderthemes.com/hyper/saas/pages-recoverpw-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 05:16:51 GMT -->

</html>