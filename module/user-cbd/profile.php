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
                  <div class="col-12">
                     <div class="card">
                        <div class="card-body">

                           <!-- Checkout Steps -->
                           <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                              <li class="nav-item">
                                 <a href="#billing-information" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                    <i class="mdi mdi-account-circle font-18"></i>
                                    <span class="d-none d-lg-block">Data Personal</span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#shipping-information" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                    <i class="mdi  mdi-account-circle font-18"></i>
                                    <span class="d-none d-lg-block">Data Pendidikan</span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#payment-information" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                    <i class="mdi mdi-folder font-18"></i>
                                    <span class="d-none d-lg-block">Data Dokumen</span>
                                 </a>
                              </li>
                           </ul>

                           <!-- Steps Information -->
                           <form action="" method="POST">
                              <input type="hidden" name="uid" value="<?= $uid ?>">
                              <div class="tab-content">
                                 <!-- Billing Content-->
                                 <div class="tab-pane show active" id="billing-information">
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <h4 class="mt-2">Data Personal</h4>
                                          <p class="text-muted mb-4">Isi data peronal anda</p>
                                          <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="nama">Nama Lengkap <span class="text-danger">*</span></label>
                                                   <input type="text" class="form-control" required name="nama" id="nama">
                                                </div>
                                             </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                   <label for="fakultas">NIK <span class="text-danger">*</span></label>
                                                   <input type="text" class="form-control" required name="fakultas" id="fakultas">
                                                </div>
                                             </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                   <label for="jurusan">No.Kartu Keluarga <span class="text-danger">*</span></label>
                                                   <input type="text" class="form-control" required name="jurusan" id="jurusan">
                                                </div>
                                             </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                   <label for="npm">NIP <span class="text-danger">*</span></label>
                                                   <input type="text" class="form-control" required name="npm" id="npm">
                                                </div>
                                             </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                   <label for="sks">Nomor Seri KARPEG <span class="text-danger">*</span></label>
                                                   <input type="number" class="form-control" required name="sks" id="sks">
                                                </div>
                                             </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                   <label for="khs">Pangkat<span class="text-danger">*</span></label>
                                                   <select name="" class="form-control" id="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM pangkat");
                                                      ?>
                                                      <?php foreach ($query as $datapangkat) : ?>
                                                         <option value="<?= $datapangkat['pangkat'] ?>"><?= $datapangkat['pangkat'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                   <label for="khs">Golongan<span class="text-danger">*</span></label>
                                                   <select name="" class="form-control" id="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM golongan");
                                                      ?>
                                                      <?php foreach ($query as $datagolongan) : ?>
                                                         <option value="<?= $datagolongan['golongan'] ?>"><?= $datagolongan['golongan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                   <label for="nama">Jenis Kelamin <span class="text-danger">*</span></label>
                                                   <select name="" class="form-control" id="">
                                                      <option value="">Pilih</option>
                                                      <option value="Laki-laki">Laki-laki</option>
                                                      <option value="Perempuan">Perempuan</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                   <label for="khs">Pendidikan<span class="text-danger">*</span></label>
                                                   <select name="" class="form-control" id="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM pendidikan");
                                                      ?>
                                                      <?php foreach ($query as $datagolongan) : ?>
                                                         <option value="<?= $datagolongan['pendidikan'] ?>"><?= $datagolongan['pendidikan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                   <label for="khs">Jabatan Fungsional<span class="text-danger">*</span></label>
                                                   <select name="" class="form-control" id="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM jabatan");
                                                      ?>
                                                      <?php foreach ($query as $datagolongan) : ?>
                                                         <option value="<?= $datagolongan['jabatan'] ?>"><?= $datagolongan['jabatan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                   <label for="nama">Masa Kerja Golongan <span class="text-danger">*</span></label>
                                                   <input type="text" class="form-control" name="" id="">
                                                </div>
                                             </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                   <label for="khs">Unit Kerja<span class="text-danger">*</span></label>
                                                   <select name="" class="form-control" id="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM unit_kerja");
                                                      ?>
                                                      <?php foreach ($query as $datagolongan) : ?>
                                                         <option value="<?= $datagolongan['unit'] ?>"><?= $datagolongan['unit'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div> <!-- end row -->

                                       </div>
                                    </div> <!-- end row-->

                                    <div class="row">
                                       <div class="col-sm-12">
                                          <div class="text-sm-left">
                                             <button class="btn btn-danger" type="submit" name="program_trf"> Simpan</button>
                                          </div>
                                       </div>
                                    </div> <!-- end row-->
                                 </div>
                                 <!-- End Billing Information Content-->

                                 <!-- Shipping Content-->
                                 <div class="tab-pane" id="shipping-information">
                                    <div class="card">
                                       <div class="card-body">
                                          <div class="row mb-2">
                                             <div class="col-sm-4">
                                                <a href="javascript:void(0);" class="btn btn-primary mb-2" data-toggle="modal" data-target="#add"><i class="mdi mdi-plus-circle mr-2"></i> Tambah <?= $page ?></a>
                                             </div>
                                             <div class="col-sm-8">
                                                <div class="text-sm-right">
                                                   <button type="button" class="btn btn-outline-success mb-2 mr-1"><i class="mdi mdi-information"></i></button>
                                                   <button type="button" class="btn btn-light mb-2 mr-1">Import</button>
                                                   <button type="button" class="btn btn-light mb-2">Export</button>
                                                </div>
                                             </div><!-- end col-->
                                          </div>
                                          <div class="table-responsive">
                                             <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                                <thead>
                                                   <tr>
                                                      <th>No</th>
                                                      <th>Kode</th>
                                                      <th class="col-8">Fakultas</th>
                                                      <th>Status</th>
                                                      <th class="text-center">Actions</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <?php
                                                   $i = 1;
                                                   ?>
                                                   <?php foreach ($query as $row) : ?>
                                                      <tr>
                                                         <td><?= $i++ ?></td>
                                                         <td><?= $row['kode_fakultas'] ?></td>
                                                         <td><?= $row['fakultas'] ?></td>
                                                         <td>
                                                            <?php
                                                            $status = $row['status'];
                                                            if ($status == 0) {
                                                               $warna = 'danger';
                                                               $ket = 'Inactive';
                                                            } else {
                                                               $warna = 'success';
                                                               $ket = 'Active';
                                                            }
                                                            ?>
                                                            <span class="badge badge-<?= $warna ?>"><?= $ket ?></span>
                                                         </td>
                                                         <td class="text-center">
                                                            <button class="btn btn-warning">Ubah</button>
                                                            <button class="btn btn-danger">Hapus</button>
                                                         </td>
                                                      </tr>
                                                   <?php endforeach ?>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                 </div>
                                 <!-- End Shipping Information Content-->

                                 <!-- Payment Content-->
                                 <div class="tab-pane" id="payment-information">
                                    <div class="card">
                                       <div class="card-body">
                                          <div class="row mb-2">
                                             <div class="col-sm-4">
                                                <a href="javascript:void(0);" class="btn btn-primary mb-2" data-toggle="modal" data-target="#add"><i class="mdi mdi-plus-circle mr-2"></i> Tambah <?= $page ?></a>
                                             </div>
                                             <div class="col-sm-8">
                                                <div class="text-sm-right">
                                                   <button type="button" class="btn btn-outline-success mb-2 mr-1"><i class="mdi mdi-information"></i></button>
                                                   <button type="button" class="btn btn-light mb-2 mr-1">Import</button>
                                                   <button type="button" class="btn btn-light mb-2">Export</button>
                                                </div>
                                             </div><!-- end col-->
                                          </div>
                                          <div class="table-responsive">
                                             <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                                <thead>
                                                   <tr>
                                                      <th>No</th>
                                                      <th>Kode</th>
                                                      <th class="col-8">Fakultas</th>
                                                      <th>Status</th>
                                                      <th class="text-center">Actions</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <?php
                                                   $i = 1;
                                                   ?>
                                                   <?php foreach ($query as $row) : ?>
                                                      <tr>
                                                         <td><?= $i++ ?></td>
                                                         <td><?= $row['kode_fakultas'] ?></td>
                                                         <td><?= $row['fakultas'] ?></td>
                                                         <td>
                                                            <?php
                                                            $status = $row['status'];
                                                            if ($status == 0) {
                                                               $warna = 'danger';
                                                               $ket = 'Inactive';
                                                            } else {
                                                               $warna = 'success';
                                                               $ket = 'Active';
                                                            }
                                                            ?>
                                                            <span class="badge badge-<?= $warna ?>"><?= $ket ?></span>
                                                         </td>
                                                         <td class="text-center">
                                                            <button class="btn btn-warning">Ubah</button>
                                                            <button class="btn btn-danger">Hapus</button>
                                                         </td>
                                                      </tr>
                                                   <?php endforeach ?>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div> <!-- end card-body-->
                                    </div> <!-- end card-->
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