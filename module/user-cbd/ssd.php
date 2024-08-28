<?php
$page = 'Soal Sering Ditanya (SSD)';
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
                           <strong>Kumpulan Soal Sering Ditanya pada Sosialisasi Persiapan Perilisan SISTER (Versi Cloud)</strong>
                           <p>Berikut adalah kumpulan Soal Sering Ditanya pada sesi Sosialisasi Persiapan Perilisan SISTER (Versi Cloud) yang dilaksanakan pada 26 Juni 2023.
                              (Klik pada kalimat pertanyaan untuk membuka jawabannya)</p>
                           <div class="accordion custom-accordion" id="custom-accordion-one">
                              <div class="card mb-0">
                                 <div class="card-header" id="headingFour">
                                    <h5 class="m-0">
                                       <a class="custom-accordion-title d-block py-1" data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                          Q. Can I use this template for my client? <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                       </a>
                                    </h5>
                                 </div>

                                 <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#custom-accordion-one">
                                    <div class="card-body">
                                       ...
                                    </div>
                                 </div>
                              </div>
                              <div class="card mb-0">
                                 <div class="card-header" id="headingFive">
                                    <h5 class="m-0">
                                       <a class="custom-accordion-title collapsed d-block py-1" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                          Q. Can this theme work with Wordpress? <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                       </a>
                                    </h5>
                                 </div>
                                 <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#custom-accordion-one">
                                    <div class="card-body">
                                       ...
                                    </div>
                                 </div>
                              </div>
                              <div class="card mb-0">
                                 <div class="card-header" id="headingSix">
                                    <h5 class="m-0">
                                       <a class="custom-accordion-title collapsed d-block py-1" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                          Q. How do I get help with the theme? <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                       </a>
                                    </h5>
                                 </div>
                                 <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#custom-accordion-one">
                                    <div class="card-body">
                                       ...
                                    </div>
                                 </div>
                              </div>
                              <div class="card mb-0">
                                 <div class="card-header" id="headingSeven">
                                    <h5 class="m-0">
                                       <a class="custom-accordion-title collapsed d-block py-1" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                          Q. Will you regularly give updates of Hyper ? <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                       </a>
                                    </h5>
                                 </div>
                                 <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#custom-accordion-one">
                                    <div class="card-body">
                                       ...
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div> <!-- end card-body-->
                     </div> <!-- end card-->

                  </div>
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