<?php
$page = 'Sertifikasi';
require '../../controller/view.php';
require '../../controller/kompetensi/controllerSerfikasi.php';
$roles = 'user';
$getSertifikasi = tampildata("SELECT * FROM sertifikasi INNER JOIN ms_sertifikasi ON ms_sertifikasi.id_jenis = sertifikasi.id_jenis WHERE nik='$nik'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   require '../../assets/template/head.php';
   ?>
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
                     <div class="card">
                        <div class="card-body">
                           <div class="row mb-2">
                              <div class="col-sm-4">
                                 <a href="javascript:void(0);" class="btn btn-primary mb-2" data-toggle="modal" data-target="#add"><i class="mdi mdi-plus-circle mr-2"></i> Tambah</a>
                              </div>
                              <div class="col-sm-8">
                                 <div class="text-sm-right">
                                    <button type="button" class="btn btn-outline-success mb-2 mr-1"><i class="mdi mdi-information"></i></button>
                                    <button type="button" class="btn btn-light mb-2">Riwayat Ajuan</button>
                                 </div>
                              </div><!-- end col-->
                           </div>
                           <div class="table-responsive">
                              <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                 <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>Jenis Sertifikasi</th>
                                       <th>Bidang Studi</th>
                                       <th>Nomor Registrasi Pendidik</th>
                                       <th>Nomor SK Sertifikasi</th>
                                       <th class="text-center">Tahun</th>
                                       <th class="text-center">Dokumen</th>
                                       <th class="text-center">Aksi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php $i = 1;
                                    foreach ($getSertifikasi as $data) : ?>
                                       <tr>
                                          <td><?= $i++ ?></td>
                                          <td><?= $data['jenis'] ?></td>
                                          <td><?= $data['bidang'] ?></td>
                                          <td><?= $data['nomor_registrasi'] ?></td>
                                          <td><?= $data['nomor_sertifikasi'] ?></td>
                                          <td class="text-center"><?= $data['tahun'] ?></td>
                                          <td class="text-center">
                                             <?php
                                             $tipe = "Sertifikasi";
                                             $checkDokumen = mysqli_query($koneksi, "SELECT * FROM dokumen WHERE nik='$nik' AND keterangan='$tipe'");
                                             $dataDokumen = mysqli_fetch_array($checkDokumen);
                                             @$dokumen = $dataDokumen['dokumen'];
                                             if ($dokumen == NULL) { ?>
                                                <span class="badge badge-danger">Belum Ada File</span>
                                             <?php    } else { ?>
                                                <a href="file/dokumen/<?= $dokumen ?>" target="_blank">
                                                   <span class="badge badge-primary">Lihat File</span>
                                                </a>
                                             <?php  }
                                             ?>
                                          </td>
                                          <td class="text-center">
                                             <button type="button" data-toggle="modal" data-target="#upload<?= $data['id'] ?>" class="btn btn-info mb-2 mr-1"><i class="mdi mdi-folder"></i></button>
                                             <button type="button" data-toggle="modal" data-target="#ubah<?= $data['id'] ?>" class="btn btn-primary mb-2 mr-1"><i class="mdi mdi-pencil"></i></button>
                                             <button type="button" data-toggle="modal" data-target="#hapus<?= $data['id'] ?>" class="btn btn-danger mb-2 mr-1"><i class="mdi mdi-delete"></i></button>
                                          </td>
                                       </tr>
                                       <!-- Standard modal -->
                                       <div id="upload<?= $data['id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h4 class="modal-title" id="standard-modalLabel">Form Upload Dokumen</h4>
                                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <form action="" method="POST" enctype="multipart/form-data">
                                                   <input type="hidden" name="nik" value="<?= $nik ?>">
                                                   <div class="modal-body">
                                                      <div class="form-group">
                                                         <label for="example-email">File Dokumen</label>
                                                         <input type="file" name="dokumen" class="form-control" required>
                                                      </div>
                                                   </div>
                                                   <div class=" modal-footer">
                                                      <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                                                      <button type="submit" name="upload-sertifikasi" class="btn btn-primary">Simpan</button>
                                                   </div>
                                                </form>
                                             </div><!-- /.modal-content -->
                                          </div><!-- /.modal-dialog -->
                                       </div><!-- /.modal -->
                                       <!-- Danger Alert Modal -->
                                       <div id="hapus<?= $data['id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                          <div class="modal-dialog modal-sm">
                                             <div class="modal-content modal-filled bg-danger">
                                                <div class="modal-body p-4">
                                                   <form action="" method="POST">
                                                      <input type="hidden" name="control" value="delete">
                                                      <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                                      <div class="text-center">
                                                         <i class="dripicons-wrong h1"></i>
                                                         <h4 class="mt-2">Hapus Data !</h4>
                                                         <p class="mt-3">Apakah anda yakin menghapus data ? data yang anda hapus tidak dapat dikembalikan kembali</p>
                                                         <button type="submit" name="proses-sertifikasi" class="btn btn-light my-2">Ya, Hapus</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div><!-- /.modal-content -->
                                          </div><!-- /.modal-dialog -->
                                       </div><!-- /.modal -->

                                    <?php endforeach ?>
                                 </tbody>
                              </table>
                           </div>
                        </div> <!-- end card-body-->
                     </div> <!-- end card-->
                  </div> <!-- end col -->
               </div>
               <!-- end row -->

            </div> <!-- container -->

         </div> <!-- content -->
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
               <form action="" method="POST">
                  <input type="hidden" name="control" value="add">
                  <input type="hidden" name="nik" value="<?= $nik ?>">
                  <div class="modal-body">
                     <div class="form-group">
                        <label for="jenis">Jenis Sertifiksi</label>
                        <select name="jenis" id="jenis" class="form-control">
                           <option value="">PILIH</option>
                           <?php
                           $getJenisSertifikasi = mysqli_query($koneksi, "SELECT * FROM ms_sertifikasi");
                           ?>
                           <?php foreach ($getJenisSertifikasi as $dataJenis) : ?>
                              <option value="<?= $dataJenis['id_jenis'] ?>"><?= $dataJenis['jenis'] ?></option>
                           <?php endforeach ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="bidang">Bidang Studi</label>
                        <input type="text" id="bidang" name="bidang" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="no_registrasi">Nomor Registrasi Pendidik</label>
                        <input type="text" id="no_registrasi" name="no_registrasi" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="no_sertifikasi">Nomor SK Sertifikasi</label>
                        <input type="text" id="no_sertifikasi" name="no_sertifikasi" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="year" id="tahun" name="tahun" class="form-control">
                     </div>
                  </div>
                  <div class=" modal-footer">
                     <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                     <button type="submit" name="proses-sertifikasi" class="btn btn-primary">Simpan</button>
                  </div>
               </form>
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