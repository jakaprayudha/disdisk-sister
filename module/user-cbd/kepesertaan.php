<?php
$page = 'Kepesertaan Sertifikasi';
require '../../controller/view.php';
$roles = 'user';
$query = tampildata("SELECT * FROM usulan");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   require '../../assets/template/head.php';
   ?>
   <style>
      .table {
         width: 100%;
         border-collapse: collapse;
      }

      .table th,
      .table td {
         padding: 8px;
         border-bottom: 1px solid #dee2e6;
         text-align: left;
      }

      .table th {
         width: 30%;
         font-weight: bold;
         color: #333;
      }

      .table td {
         width: 70%;
         color: #666;
      }
   </style>
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
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Master Data</a></li>
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Akademik</a></li>
                              <li class="breadcrumb-item active"><?= $page ?></li>
                           </ol>
                        </div>
                        <h4 class="page-title"><?= $page ?></h4>
                     </div>
                  </div>
               </div>
               <!-- end page title -->

               <div class="row">
                  <div class="col-12">
                     <div class="alert alert-primary" role="alert">
                        Data diambil per 1 Juni 2024
                     </div>
                     <div class="card">
                        <div class="card-body">
                           <div class="row mb-2">
                              <div class="col-sm-4">
                              </div>
                              <div class="col-sm-8">
                                 <div class="text-sm-right">
                                    <button type="button" class="btn btn-outline-success mb-2 mr-1"><i class="mdi mdi-information"></i>Tabel Konversi TKBI/TKDA</button>
                                 </div>
                              </div><!-- end col-->
                           </div>
                           <table class="table table-striped table-centered mb-0">
                              <tr>
                                 <th>Nama</th>
                                 <td>: Jaka Prayudha</td>
                              </tr>
                              <tr>
                                 <th>NIP</th>
                                 <td>: </td>
                              </tr>
                              <tr>
                                 <th>NIDN</th>
                                 <td>: 0120059201</td>
                              </tr>
                              <tr>
                                 <th>Program Studi</th>
                                 <td>: Sistem komputer (S1)</td>
                              </tr>
                              <tr>
                                 <th>Asal PT</th>
                                 <td>: STMIK Triguna Dharma</td>
                              </tr>
                              <tr>
                                 <th>Tanggal Lahir</th>
                                 <td>: 20 Mei 1992</td>
                              </tr>
                              <tr>
                                 <th>Status Keaktifan</th>
                                 <td>: Aktif</td>
                              </tr>
                              <tr>
                                 <th>Ikatan kerja</th>
                                 <td>: Dosen Tetap</td>
                              </tr>
                              <tr>
                                 <th>Jabatan Fungsional</th>
                                 <td>: Lektor</td>
                              </tr>
                              <tr>
                                 <th>Pendidikan Terakhir</th>
                                 <td>: S2</td>
                              </tr>
                              <tr>
                                 <th>Pangkat / Golongan</th>
                                 <td>: Penata (III/c)</td>
                              </tr>
                              <tr>
                                 <th>TMT Fungsional Pertama</th>
                                 <td>: 01 Agutus 2018</td>
                              </tr>
                              <tr>
                                 <th>Masa Kerja Berdasarkan Pertama</th>
                                 <td>: 5.82 Tahun <span class="text-primary">per 1 Juni 2024</span></td>
                              </tr>
                              <tr>
                                 <th>Usia</th>
                                 <td>: 32.03 Tahun <span class="text-primary">per 1 Juni 2024</span></td>
                              </tr>
                              <tr>
                                 <th>Syarat BKG</th>
                                 <td>: <span class="text-danger">Tidak Memenuhi</span></td>
                              </tr>
                              <tr>
                                 <th>TKDA</th>
                                 <td>: <span class="text-danger">TKDA Tidak ada/Tidak valid/Tidak memenuhi passing grade</span></td>
                              </tr>
                              <tr>
                                 <th>TKBI</th>
                                 <td>: <span class="text-danger">TKBI Tidak ada/Tidak valid/Tidak memenuhi passing grade</span></td>
                              </tr>
                              <tr>
                                 <th>Pekerti / AA</th>
                                 <td>: <span class="text-danger">Pekerti/AA Tidak ada/Tidak valid</span></td>
                              </tr>
                           </table>
                        </div> <!-- end card-body-->
                     </div> <!-- end card-->
                  </div> <!-- end col -->
               </div>
               <div class="alert alert-danger" role="alert">
                  Anda tidak termasuk dosen yang berhak mengikuti Sertifikasi Dosen, namun anda masuk Nominasi silahkan hubungi PSD-PTU untuk unggah BKD 2 tahun.
                  Alasan lainnya yaitu:
                  <ul>
                     <li> Tidak ada/Tidak memenuhi passing grade TKBI
                        <ul>
                           <li> TOEP-TEFLIN: 28.00 Tahun 2019 (Valid) - Batas Passing Grade/Ambang Batas Minimum Skor Tes: 41</li>
                           <li> TOEP-TEFLIN: 28.00 Tahun 2019 (Valid) - Batas Passing Grade/Ambang Batas Minimum Skor Tes: 41</li>
                        </ul>
                     </li>
                     <li>Tidak ada/Tidak memenuhi passing grade TKDA
                        <ul>
                           <li> TKDA Himpsi: 506.00 Tahun 2019 (Valid) - Batas Passing Grade/Ambang Batas Minimum Skor Tes: 530</li>
                           <li> TKDA Himpsi: 479.00 Tahun 2019 (Valid) - Batas Passing Grade/Ambang Batas Minimum Skor Tes: 530</li>
                           <li> TKDA Himpsi: 506.00 Tahun 2019 (Valid) - Batas Passing Grade/Ambang Batas Minimum Skor Tes: 530</li>
                        </ul>
                     </li>
                     <li> Tidak ada/Tidak memenuhi Pekerti/AA</li>
                     <li> Tidak ada/Tidak memenuhi syarat BKD memenuhi selama 2 tahun berturut-turut (Diunggah oleh PSD-PTU)
                        <ul>
                           <li> BKD Tahun 2023 (Belum di-unggah)</li>
                           <li> BKD Tahun 2022 (Belum di-unggah)</li>
                        </ul>
                     </li>
                  </ul>
               </div>
               <!-- end row -->

            </div> <!-- container -->

         </div> <!-- content -->

         <!-- Footer Start -->
         <?php
         require '../../assets/template/footer.php';
         ?>
         <!-- end Footer -->

      </div>

      <!-- Standard modal -->
      <div id="add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title" id="standard-modalLabel">Form Tambah Data <?= $page ?></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
               </div>
               <div class="modal-body">
                  <div class="form-group">
                     <label for="example-email">Kode Fakultas</label>
                     <input type="text" id="example-email" name="example-email" class="form-control">
                  </div>
                  <div class="form-group">
                     <label for="example-pass">Fakultas</label>
                     <input type="text" id="example-pass" name="example-pass" class="form-control">
                  </div>

               </div>
               <div class=" modal-footer">
                  <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                  <button type="button" class="btn btn-primary">Simpan</button>
               </div>
            </div><!-- /.modal-content -->
         </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->


   </div>
   <!-- END wrapper -->
   <!-- /Right-bar -->


   <!-- bundle -->
   <script src="assets/js/vendor.min.js"></script>
   <script src="assets/js/app.min.js"></script>

   <!-- third party js -->
   <script src="assets/js/vendor/jquery.dataTables.min.js"></script>
   <script src="assets/js/vendor/dataTables.bootstrap4.js"></script>
   <script src="assets/js/vendor/dataTables.responsive.min.js"></script>
   <script src="assets/js/vendor/responsive.bootstrap4.min.js"></script>
   <script src="assets/js/vendor/dataTables.buttons.min.js"></script>
   <script src="assets/js/vendor/buttons.bootstrap4.min.js"></script>
   <script src="assets/js/vendor/buttons.html5.min.js"></script>
   <script src="assets/js/vendor/buttons.flash.min.js"></script>
   <script src="assets/js/vendor/buttons.print.min.js"></script>
   <script src="assets/js/vendor/dataTables.keyTable.min.js"></script>
   <script src="assets/js/vendor/dataTables.select.min.js"></script>
   <!-- third party js ends -->

   <!-- demo app -->
   <script src="assets/js/pages/demo.datatable-init.js"></script>
</body>

<!-- Mirrored from coderthemes.com/hyper/saas/apps-ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 05:16:16 GMT -->

</html>