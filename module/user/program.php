<?php
$page = "Home";
require '../../controller/view.php';
require '../../controller/pmb/register.php';
$status = $_SESSION['status'];
$uid = $_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="en">


<head>
   <?php
   require '../../assets/template/head.php';
   ?>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="loading">
   <!-- Begin page -->
   <div class="wrapper">
      <!-- ========== Left Sidebar Start ========== -->
      <div class="left-side-menu">

         <?php
         if ($status == 1) {
            require 'sidebar-pmb.php';
         } else {
            require 'sidebar.php';
         }

         ?>
         <!-- Sidebar -left -->

      </div>
      <!-- Left Sidebar End -->

      <!-- ============================================================== -->
      <!-- Start Page Content here -->
      <!-- ============================================================== -->

      <div class="content-page">
         <div class="content">
            <!-- Topbar Start -->
            <?php
            require 'header.php';
            ?>
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">

               <!-- start page title -->
               <div class="row">
                  <div class="col-12">
                     <div class="page-title-box">
                        <div class="page-title-right">
                           <ol class="breadcrumb m-0">
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Registrasi</a></li>
                              <li class="breadcrumb-item active">Mahasiswa/i Baru</li>
                           </ol>
                        </div>
                        <h4 class="page-title">Program</h4>
                     </div>
                  </div>
               </div>
               <!-- end page title -->
               <div class="row">
                  <div class="col">
                     <div class="card">
                        <div class="card-body">
                           <h5 class="card-title">Mahasiswa Baru</h5>
                           <p class="card-text">Program untuk mahasiswa baru yang ingin bergabung bersama universitas graha kirana untuk menjadi bagian alumni terbaiknya</p>
                           <a href="module/user/mhs-baru" class="btn btn-primary">Pilih</a>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card">
                        <div class="card-body">
                           <h5 class="card-title">Mahasiswa Konversi</h5>
                           <p class="card-text">Program untuk mahasiswa yang sebelumnya telah kuliah di kampus lain dan ingin bergabung bersama universitas graha kirana</p>
                           <a href="module/user/mhs-trf" class="btn btn-primary">Pilih</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end row-->

            </div> <!-- container -->
            <!-- container -->

         </div>
         <!-- content -->

         <!-- Footer Start -->
         <?php
         require '../../assets/template/footer.php';
         ?>
         <!-- end Footer -->

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

      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->


   </div>

   <!-- END wrapper -->

   <!-- bundle -->
   <script src="assets/js/vendor.min.js"></script>
   <script src="assets/js/app.min.js"></script>

   <!-- third party js -->
   <script src="assets/js/vendor/apexcharts.min.js"></script>
   <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
   <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
   <!-- third party js ends -->

   <!-- demo app -->
   <script src="assets/js/pages/demo.dashboard.js"></script>
   <!-- end demo js-->
</body>

<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 05:15:01 GMT -->

</html>