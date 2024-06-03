<?php
$page = 'User';
require '../../config/connect.php';
require '../../controller/view.php';
require '../../controller/master/user.php';
$query = tampildata("SELECT * FROM user");
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
                        <h4 class="page-title">Management <?= $page ?></h4>
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
                                       <th>NIP</th>
                                       <th class="all">Nama Lengkap</th>
                                       <th>Email</th>
                                       <th>Username</th>
                                       <th>Register</th>
                                       <th>Roles</th>
                                       <th>Status</th>
                                       <th style="width: 85px;">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>12</td>
                                       <td>
                                          <img src="assets/images/products/product-1.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                          <p class="m-0 d-inline-block align-middle font-16">
                                             <a href="apps-ecommerce-products-details.html" class="text-body">Jaka Prayudha</a>
                                             <br />
                                             <span class="text-warning mdi mdi-star"></span>
                                             <span class="text-warning mdi mdi-star"></span>
                                             <span class="text-warning mdi mdi-star"></span>
                                             <span class="text-warning mdi mdi-star"></span>
                                             <span class="text-warning mdi mdi-star"></span>
                                          </p>
                                       </td>
                                       <td>
                                          jakaprayudha3@gmail.com
                                       </td>

                                       <td>
                                          Jl.Sultan Serdang
                                       </td>
                                       <td><?= date('Y-m-d H:i:s') ?></td>
                                       <td>Administrator</td>
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
                     <label for="example-email">Nama Pegawai</label>
                     <select name="" class="form-control" id="">
                        <option value="">PILIH</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="example-email">Username</label>
                     <input type="text" id="example-email" name="example-email" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group">
                     <label for="example-email">Password</label>
                     <input type="password" id="example-email" name="example-email" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                     <label for="example-email">Dari</label>
                     <select name="" class="form-control" id="">
                        <option value="">PILIH</option>
                        <option value="PJ3K">PJK3</option>
                        <option value="DISNAKER">DISNAKER</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="example-email">Hak Akses</label>
                     <select name="" class="form-control" id="">
                        <option value="">PILIH</option>
                        <option value="PJ3K">Administrator</option>
                        <option value="DISNAKER">Admin</option>
                        <option value="">PJK3</option>
                        <option value="">KABID</option>
                        <option value="">KADIS</option>
                        <option value="">Spesialis</option>
                        <option value="">UPT</option>
                     </select>
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