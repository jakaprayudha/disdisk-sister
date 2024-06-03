<?php
$page = 'Pegawai';
require '../../config/connect.php';
require '../../controller/view.php';
require '../../controller/master/pegawai.php';
$query = tampildata("SELECT * FROM pegawai");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   require '../../assets/template/head.php';
   ?>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                                       <th>Pangkat/Gol</th>
                                       <th>Bidang Spesialis K3</th>
                                       <th>No.Telepon</th>
                                       <th>Asal</th>
                                       <th>Status</th>
                                       <th style="width: 85px;">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php foreach ($query as $row) : ?>
                                       <tr>
                                          <td><?= $row['nip'] ?></td>
                                          <td>
                                             <?php
                                             $foto = $row['foto'];
                                             if ($foto == NULL) {
                                                $routefile = 'assets/images/notfound.jpeg';
                                             } else {
                                                $routefile = 'assets/images/' . $foto;
                                             }
                                             ?>
                                             <img src="assets/images/notfound.jpeg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                             <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="javascript:;" class="text-body"><strong><?= $row['nama'] ?></strong></a>
                                                <br />
                                                <span> NIK : <?= $row['nik'] ?>
                                                </span>
                                             </p>
                                          </td>
                                          <td><?= $row['email'] ?> </td>
                                          <td><?= $row['pangkat_gol'] ?> </td>
                                          <td><?= $row['bidang_spesialis'] ?> </td>
                                          <td><?= $row['telepon'] ?> </td>
                                          <td><?= $row['asal'] ?> </td>
                                          <td>
                                             <?php
                                             $status = $row['status'];
                                             if ($status == 1) {
                                                $ket = 'Active';
                                                $color = 'success';
                                             } else {
                                                $ket = 'Inactive';
                                                $color = 'danger';
                                             }
                                             ?>
                                             <span class="badge badge-<?= $color ?>"><?= $ket ?></span>
                                          </td>
                                          <td class="table-action">
                                             <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                             <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                             <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                          </td>
                                       </tr>
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
                     <label for="nip">NIP <span class="text-danger">*</span></label>
                     <input type="text" id="nip" name="nip" class="form-control" required placeholder="Nomor Induk Pegawai">
                  </div>
                  <div class="form-group">
                     <label for="nik">NIK <span class="text-danger">*</span></label>
                     <input type="text" id="nik" name="nik" required class="form-control" placeholder="Nomor Induk Pegawai">
                  </div>
                  <div class="form-group">
                     <label for="nama">Nama Lengkap <span class="text-danger">*</span></label>
                     <input type="text" id="nama" name="nama" required class="form-control" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                     <label for="example-email">E-Mail</label>
                     <input type="email" id="example-email" name="email" class="form-control" placeholder="mail@gmail.com">
                  </div>
                  <div class="form-group">
                     <label for="telepon">No.Telepon</label>
                     <input type="tel" id="telepon" name="telepon" class="form-control" placeholder="Telepon/Handphone">
                  </div>
                  <div class="form-group">
                     <label for="alamat">Alamat</label>
                     <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat Sesuai KTP">
                  </div>
                  <div class="form-group">
                     <label for="asal">Asal <span class="text-danger">*</span></label>
                     <select name="asal" class="form-control" id="asal">
                        <option value="">PILIH</option>
                        <option value="Disnaker Provinsi">Disnaker Provinsi</option>
                        <?php
                        $query = tampildata("SELECT * FROM wilayah ");
                        ?>
                        <?php foreach ($query as $data) : ?>
                           <option value="<?= $data['asal'] ?>"><?= $data['asal'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="simpanpegawai">Simpan</button>
               </div>
            </div><!-- /.modal-content -->
         </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->


   </div>
   <?php if (@$_SESSION['sukses']) { ?>
      <script>
         swal("God Job !!", "<?php echo $_SESSION['sukses']; ?>", "success");
      </script>
   <?php unset($_SESSION['sukses']);
   } ?>
   <!-- END wrapper -->

   <!-- bundle -->
   <?php
   require '../../assets/template/library.php';
   ?>

</body>

<!-- Mirrored from coderthemes.com/hyper/saas/apps-ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 05:16:16 GMT -->

</html>