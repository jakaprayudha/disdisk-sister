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
                              <li class="breadcrumb-item active">Profile Operator</li>
                           </ol>
                        </div>
                        <h4 class="page-title">Profile Operator</h4>
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
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": 20001991203123123">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Nama Lengkap</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Jaka Prayudha">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Laki Laki">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Tempat Lahir</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Medan">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": 20 Mei 1992">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="card">
                              <h5 class="card-header">Kependudukan <span class="badge badge-primary float-right"><a data-toggle="modal" data-target="#nik">Ajukan Perubahan</a></span>
                              </h5>
                              <div class="card-body">
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">NIK</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": 17212005920001">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Agama</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Islam">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Kewarganegraan</label>
                                    <div class="col-sm-6">
                                       <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Indonesia">
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
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": jakaprayudha3@gmail.com">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Alamat</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Jl. Jend. Sudirman No. 1">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Desa/Kelurahan</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Jati">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Kecamatan</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Medan Timur">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Kabupaten</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Medan Timur">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Provinsi</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Sumatera Utara">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Kode Pos</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": 20151">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">No.Handphone</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": 081234567890">
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
<!-- /.modal Perubahan Data Kependudukan -->
<div id="kependudukan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="standard-modalLabel">Perubahan Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
            <div class="form-group">
               <label for="nik">Nomor Induk Kependudukan</label>
               <input type="text" class="form-control" id="nik" aria-describedby="nik" value="">
            </div>
            <div class="form-group">
               <label for="nik">Agama</label>
               <select name="" class="form-control" id="">
                  <option value="">Pilih</option>
                  <option value="">Islam</option>
                  <option value="">Protestan</option>
                  <option value="">Katholik</option>
                  <option value="">Budha</option>
                  <option value="">Hindu</option>
                  <option value="">Lainnya</option>
               </select>
            </div>
            <div class="form-group">
               <label for="nik">Kewarganegaraan</label>
               <input type="text" class="form-control" id="nik" aria-describedby="nik" value="">
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- /.modal Perubahan Data Keluarga -->
<div id="keluarga" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="standard-modalLabel">Perubahan Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
            <div class="form-group">
               <label for="nik">Status Perkawinan</label>
               <select name="" class="form-control" id="">
                  <option value="">Pilih</option>
                  <option value="">Kawin</option>
                  <option value="">Belum Kawin</option>
                  <option value="">Duda/Janda</option>
               </select>
            </div>
            <div class="form-group">
               <label for="nik">Nama Suami/Istri</label>
               <input type="text" class="form-control" id="nik" aria-describedby="nik" value="">
            </div>
            <div class="form-group">
               <label for="nik">NIP Suami/Istri</label>
               <input type="text" class="form-control" id="nik" aria-describedby="nik" value="">
            </div>
            <div class="form-group">
               <label for="nik">Pekerjaan Suami/Istri</label>
               <input type="text" class="form-control" id="nik" aria-describedby="nik" value="">
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- /.modal Perubahan Data Keluarga -->
<div id="rumpunilmu" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="standard-modalLabel">Perubahan Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
            <div class="form-group">
               <label for="nik">Rumpun Ilmu</label>
               <input type="text" class="form-control" id="nik" aria-describedby="nik" value="">="">Duda/Janda</option>
            </div>
            <div class="form-group">
               <label for="nik">Pohon Ilmu</label>
               <input type="text" class="form-control" id="nik" aria-describedby="nik" value="">
            </div>
            <div class="form-group">
               <label for="nik">Cabang Ilmu</label>
               <input type="text" class="form-control" id="nik" aria-describedby="nik" value="">
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</html>