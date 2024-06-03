<?php
$page = "Home";
require '../../controller/view.php';
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
         require 'sidebar.php';
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
                              <li class="breadcrumb-item active">Profile Tenaga Pendidik</li>
                           </ol>
                        </div>
                        <h4 class="page-title">Profile Tenaga Pendidik</h4>
                     </div>
                  </div>
               </div>
               <!-- end page title -->

               <div class="row">
                  <div class="col-6">
                     <div class="card">
                        <h5 class="card-header">Profile <span class="badge badge-success float-right">Data Terverifikasi</span>
                        </h5>
                        <div class="card-body">
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">NIP</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Nama Lengkap</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Tempat Lahir</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="card">
                              <h5 class="card-header">Kependudukan <span class="badge badge-primary float-right">Ajukan Perubahan</span>
                              </h5>
                              <div class="card-body">
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">NIK</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Agama</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Kewarganegraan</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="card">
                              <h5 class="card-header">Keluarga <span class="badge badge-primary float-right">Ajukan Perubahan</span>
                              </h5>
                              <div class="card-body">
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Status Perkawinan</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Nama Suami/Istri</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">NIP Suami/Istri</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Pekerjaan Suami/Istri</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="card">
                              <h5 class="card-header">Rumpun Ilmu
                                 <span class="badge badge-primary float-right">Perbarui Data
                                 </span>
                              </h5>
                              <div class="card-body">
                                 <p>
                                    Informasi ini diperlukan untuk pemetaan sumber daya & basis data berbagai layanan di SISTER
                                 </p>
                                 <div class="alert alert-danger" role="alert">
                                    Segera lengkapi informasi ini untuk mengakses berbagai layanan di SISTER (BKG, PAK & lainnya)
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Rumpun Ilmu</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Pohon Ilmu</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Cabang Ilmu</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="card">
                        <h5 class="card-header">Alamat dan Kontak <span class="badge badge-primary float-right">Ajukan Perubahan</span>
                        </h5>
                        <div class="card-body">
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Alamat</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">RT</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">RW</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Desa/Kelurahan</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Kecamatan/Kota/Kabupaten</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Provinsi</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Kode Pos</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">No. Telepon Rumah</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">No.Ponsel</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="card">
                              <h5 class="card-header">Kepegawaian <span class="badge badge-primary float-right">Ajukan Perubahan</span>
                              </h5>
                              <div class="card-body">
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Program Studi</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">NIP (Khusus PNS)</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Status Kepegawaian</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Status Keaktifan</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Nomor SK CPNS</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">SK CPNS Terhitung Mulai Tanggal</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Nomor SK TMMD</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Tanggal Mulai Mejadi Guru (TMMD)</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Pangkat/Golongan</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Sumber Gaji</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="card">
                              <h5 class="card-header">Lain Lain <span class="badge badge-primary float-right">Ajukan Perubahan</span>
                              </h5>
                              <div class="card-body">
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">NPWP</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Nama Wajib Pajak</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">SINTA ID</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=: "">
                                    </div>
                                 </div>
                              </div>
                           </div>
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