<?php
$page = "Login";
require 'controller/auth/login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   require  'head.php';
   ?>

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
                     <span><img src="assets/images/logosumut.png" alt="" height="100"></span>
                  </a>
               </div>
               <!-- title-->
               <h4 class="mt-0">Sign In</h4>
               <p class="text-muted mb-4">Masukkan email dan password anda untuk mendapatkan akses ke sistem</p>

               <!-- form -->
               <form action="" method="POST">
                  <div class="form-group">
                     <label for="emailaddress">Email address</label>
                     <input class="form-control" type="email" autocomplete="off" id="emailaddress" required="" name="email" placeholder="Enter your email">
                  </div>
                  <div class="form-group">
                     <a href="reset" class="text-muted float-right"><small>Forgot your password?</small></a>
                     <label for="password">Password</label>
                     <input class="form-control" type="password" autocomplete="off" name="password" required="" id="password" placeholder="Enter your password">
                  </div>
                  <div class="form-group mb-3">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                     </div>
                  </div>
                  <div class="form-group mb-0 text-center">
                     <button class="btn btn-primary btn-block" name="login" type="submit"><i class="mdi mdi-login"></i> Log In </button>
                  </div>
               </form>
               <!-- end form-->

               <!-- Footer-->
               <footer class="footer footer-alt">
                  <p class="text-muted">Apakah anda belum memiliki account ? <a href="register" class="text-muted ml-1"><b>Sign Up</b></a></p>
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

</html>