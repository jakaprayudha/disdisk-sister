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
                        <h4 class="page-title">Pembayaran</h4>
                     </div>
                  </div>
               </div>
               <!-- end page title -->

               <div class="row">
                  <div class="col-12">
                     <div class="card">
                        <div class="card-body">

                           <!-- Checkout Steps -->
                           <!-- <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                              <li class="nav-item">
                                 <a href="#billing-information" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                    <i class="mdi mdi-account-circle font-18"></i>
                                    <span class="d-none d-lg-block">Data Personal </span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#shipping-information" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                    <i class="mdi  mdi-account-circle font-18"></i>
                                    <span class="d-none d-lg-block">Data Orang Tua / Wali</span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#payment-information" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                    <i class="mdi mdi-folder font-18"></i>
                                    <span class="d-none d-lg-block">Data Akademik</span>
                                 </a>
                              </li>
                           </ul> -->

                           <!-- Steps Information -->
                           <form action="" method="POST">
                              <input type="hidden" name="uid" value="<?= $uid ?>">
                              <div class="tab-content">

                                 <!-- Billing Content-->
                                 <div class="tab-pane show active" id="billing-information">
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <h4 class="mt-2">Pembayaran</h4>

                                          <p class="text-muted mb-4">Lakukan pembayaran, berikutnya upload bukti pembayaran kedalam form yang disediakan</p>
                                          <div class="alert alert-primary" role="alert">
                                             Rp.750.000 Ke Rekening BRI : 012931023123120 a/n Univ.Grahakirana
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="fakultas">Bukti Pembayaran <span class="text-danger">*</span></label>
                                                   <input type="file" class="form-control">
                                                </div>
                                             </div>
                                          </div> <!-- end row -->
                                       </div>
                                    </div> <!-- end row-->

                                    <div class="row">
                                       <div class="col-sm-12">
                                          <div class="text-sm-left">
                                             <button class="btn btn-danger" type="submit" name="konfirmasi_pembayaran"> Konfirmasi Pembayaran</button>
                                          </div>
                                       </div>
                                    </div> <!-- end row-->
                                 </div>
                                 <!-- End Billing Information Content-->

                                 <!-- Shipping Content-->
                                 <div class="tab-pane" id="shipping-information">

                                 </div>
                                 <!-- End Shipping Information Content-->

                                 <!-- Payment Content-->
                                 <div class="tab-pane" id="payment-information">

                                 </div>
                                 <!-- End Payment Information Content-->

                              </div>



                        </div> <!-- end card-body-->

                     </div> <!-- end card-->

                  </div> <!-- end col -->
                  </form>
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

   <script type="text/javascript">
      var kab = document.getElementById('a');
      var kec = document.getElementById('b');
      var kel = document.getElementById('c');
      var prov = document.getElementById('provinsi');
      var kabu = document.getElementById('kabupaten');
      var kelu = document.getElementById('kecamatan');
      kab.style.display = 'none';
      kec.style.display = 'none';
      kel.style.display = 'none';

      $(document).ready(function() {
         $('body').on('change', '#provinsi', function() {
            if (prov.value == "") {
               kab.style.display = 'none';
               kec.style.display = 'none';
               kel.style.display = 'none';
            } else {
               kab.style.display = 'block';
               kec.style.display = 'none';
               kel.style.display = 'none';
            }
            var a = document.getElementById('provinsi').value;
            var data = "data=kab&no=" + a;
            $.ajax({
               type: 'GET',
               url: "module/user/proses.php",
               data: data,
               success: function(hasil) {
                  $("#kabupaten").html(hasil);
               },
               error: function() {
                  alert("Terjadi kesalahan saat mengambil data.");
               }
            })
         })
      })
      $(document).ready(function() {
         $('body').on('change', '#kabupaten', function() {
            if (kabu.value == "") {
               kec.style.display = 'none';
               kel.style.display = 'none';
            } else {
               kec.style.display = 'block';
               kel.style.display = 'none';
            }
            var a = document.getElementById('kabupaten').value;
            var data = "data=kec&no=" + a;
            $.ajax({
               type: 'GET',
               url: "module/user/proses.php",
               data: data,
               success: function(hasil) {
                  $("#kecamatan").html(hasil);
               },
               error: function() {
                  alert("Terjadi kesalahan saat mengambil data.");
               }
            })
         })
      })
      $(document).ready(function() {
         $('body').on('change', '#kecamatan', function() {
            if (kabu.value == "") {
               kel.style.display = 'none';
            } else {
               kel.style.display = 'block';
            }
            var a = document.getElementById('kecamatan').value;
            var data = "data=kel&no=" + a;
            $.ajax({
               type: 'GET',
               url: "module/user/proses.php",
               data: data,
               success: function(hasil) {
                  $("#kelurahan").html(hasil);
               },
               error: function() {
                  alert("Terjadi kesalahan saat mengambil data.");
               }
            })
         })
      })
   </script>
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