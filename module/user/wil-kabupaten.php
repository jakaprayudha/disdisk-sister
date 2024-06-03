<?php
$page = 'Kabupaten/Kota';
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
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
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
                                 <a href="javascript:void(0);" class="btn btn-danger mb-2" data-toggle="modal" data-target="#add"><i class="mdi mdi-plus-circle mr-2"></i> Tambah <?= $page ?></a>
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
                              <table class="table dt-responsive nowrap w-100" id="basic-datatable">
                                 <thead class="thead-light">
                                    <tr>
                                       <th></th>
                                       <th>Nama Kabupaten/Kota</th>
                                       <th>UPT</th>
                                       <th>Status</th>
                                       <th style="width: 85px;">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td></td>
                                       <td>a</td>
                                       <td>Wilayah 1</td>
                                       <td>
                                          <span class="badge badge-success">Active</span>
                                       </td>
                                       <td class="table-action">
                                          <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                          <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                          <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                       </td>
                                    </tr>
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
                     <label for="example-email">NIB</label>
                     <input type="text" id="example-email" name="example-email" class="form-control" placeholder="Nomor Induk Berusaha">
                  </div>
                  <div class="form-group">
                     <label for="example-email">No.NPWP Perusahaan</label>
                     <input type="text" id="example-email" name="example-email" class="form-control" placeholder="Nomor Pokok Wajib Pajak">
                  </div>
                  <div class="form-group">
                     <label for="example-email">Nama Perusahaan</label>
                     <input type="text" id="example-email" name="example-email" class="form-control" placeholder="Nama Lengkap Perusahaan Sesuai NIB">
                  </div>
                  <div class="form-group">
                     <label for="example-email">No.Telepon</label>
                     <input type="tel" id="example-email" name="example-email" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                     <label for="example-email">Email</label>
                     <input type="tel" id="example-email" name="example-email" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                     <label for="example-email">Nama Karyawan Penanggung Jawab</label>
                     <input type="text" id="example-email" name="example-email" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                     <label for="example-email">No.Telepon Karyawan</label>
                     <input type="text" id="example-email" name="example-email" class="form-control" placeholder="Telepon/Handphone">
                  </div>

               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
               </div>
            </div><!-- /.modal-content -->
         </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->


   </div>
   <!-- END wrapper -->
   <?php
   require '../../assets/template/library.php';
   ?>
</body>

<!-- Mirrored from coderthemes.com/hyper/saas/apps-ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 05:16:16 GMT -->

</html>