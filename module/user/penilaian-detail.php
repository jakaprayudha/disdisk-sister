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
                        <h5 class="card-header">Keterangan Perseorangan <span class="badge badge-success float-right">Data Terverifikasi</span>
                        </h5>
                        <div class="card-body">
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Nama</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Jaka Prayudha, S.Kom, M.Kom">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">NIP</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": 1980012309 123923 12232">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">NUPTK</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": 28923-123123-23232">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Nomor Seri KARPEG</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": F24892923">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Tempat dan Tanggal Lahir</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Medan, 20 Mei 1992">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Laki Laki">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Pendidikan Tertinggi</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Sarjana (S1)">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Jabatan Fungsional TMT</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Guru Madya / 01 04 2011">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Masa Kerja Golongan</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Lama 21 Tahun 1 Bulan, Baru 22 Tahun 2 Bulan">
                              </div>
                           </div>
                           <div class="row">
                              <label for="staticEmail" class="col-sm-4 col-form-label">Unit Kerja</label>
                              <div class="col-sm-6">
                                 <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": SMK Negeri 8 Medan">
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
                  <div class="col-12">
                     <div class="card">
                        <h5 class="card-header">Penepatan Angka Kredit <span class="badge badge-danger float-right">Belum Proses</span>
                        </h5>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                 <thead>
                                    <tr>
                                       <th>Kode</th>
                                       <th>Unsur Utama</th>
                                       <th>Lama</th>
                                       <th>Baru</th>
                                       <th>Jumlah</th>
                                       <th class="text-center">Aksi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>Pendidikan - Mengikuti Pendidikan dan Memperoleh Gelar </td>
                                       <td><?= number_format(100) ?></td>
                                       <td><?= number_format(0) ?></td>
                                       <td><?= number_format(100) ?></td>
                                       <td class="text-center">
                                          <button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-check"></i></button>
                                          <button type="button" class="btn btn-danger mb-2 mr-1"><i class="mdi mdi-close"></i></button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>Pendidikan - Mengikuti Pelatihan Prajabatan </td>
                                       <td><?= number_format(364772) ?></td>
                                       <td><?= number_format(29750) ?></td>
                                       <td><?= number_format(364772 + 29750) ?></td>
                                       <td class="text-center">
                                          <button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-check"></i></button>
                                          <button type="button" class="btn btn-danger mb-2 mr-1"><i class="mdi mdi-close"></i></button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>3</td>
                                       <td>Pembelajaran/Bimbingan/Tugas </td>
                                       <td><?= number_format(2000) ?></td>
                                       <td><?= number_format(2000) ?></td>
                                       <td><?= number_format(2000 + 2000) ?></td>
                                       <td class="text-center">
                                          <button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-check"></i></button>
                                          <button type="button" class="btn btn-danger mb-2 mr-1"><i class="mdi mdi-close"></i></button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>4</td>
                                       <td>Melaksanakan Pengembangan Diri </td>
                                       <td><?= number_format(8000) ?></td>
                                       <td><?= number_format(4000) ?></td>
                                       <td><?= number_format(8000 + 4000) ?></td>
                                       <td class="text-center">
                                          <button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-check"></i></button>
                                          <button type="button" class="btn btn-danger mb-2 mr-1"><i class="mdi mdi-close"></i></button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td colspan="2">Jumlah Unsur Utama</td>
                                       <td><?= number_format(100 + 364772 + 2000 + 8000) ?></td>
                                       <td><?= number_format(29750 + 2000 + 4000) ?></td>
                                       <td><?= number_format(100 + 364772 + 29750 + 2000 + 4000) ?></td>
                                    </tr>
                                 </tbody>
                              </table>
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