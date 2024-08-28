<?php
$page = 'Operator Sekolah';
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
                                       <th>Sekolah</th>
                                       <th>Nama Operator</th>
                                       <th>Email</th>
                                       <th>No.Handphone</th>
                                       <th>Status</th>
                                       <th class="text-center">Aksi</th>
                                    </tr>
                                 </thead>
                                 <tbody>

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