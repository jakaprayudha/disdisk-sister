<?php
$page = "Home";
require '../../controller/view.php';
$nik = $_SESSION['nik'];
$checkprofile = mysqli_query($koneksi, "SELECT * FROM profile WHERE user_id='$nik'");
$dataprofile = mysqli_fetch_array($checkprofile);
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
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                              <li class="breadcrumb-item active">Profile</li>
                           </ol>
                        </div>
                        <h4 class="page-title">Selamat Datang</h4>
                     </div>
                  </div>
               </div>
               <!-- end page title -->


               <div class="row">
                  <div class="col-sm-12">
                     <!-- Profile -->
                     <div class="card bg-primary">
                        <div class="card-body profile-user-box">

                           <div class="row">
                              <div class="col-sm-8">
                                 <div class="media">
                                    <span class="float-left m-2 mr-4"><img src="assets/images/users/avatar-2.jpg" style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
                                    <div class="media-body">

                                       <h4 class="mt-1 mb-1 text-white"><?= $dataprofile['nama'] ?></h4>
                                       <p class="font-13 text-white-50">STMIK Triguna Dharma</p>

                                       <ul class="mb-0 list-inline text-light">
                                          <li class="list-inline-item mr-3">
                                             <h5 class="mb-1">Strata 1</h5>
                                             <p class="mb-0 font-13 text-white-50">Penempatan</p>
                                          </li>
                                          <li class="list-inline-item">
                                             <h5 class="mb-1">Sistem Komputer</h5>
                                             <p class="mb-0 font-13 text-white-50">Program Studi</p>
                                          </li>
                                       </ul>
                                    </div> <!-- end media-body-->
                                 </div>
                              </div> <!-- end col-->
                              <div class="col-sm-4">
                                 <div class="text-center mt-sm-0 mt-3 text-sm-right">
                                    <button type="button" class="btn btn-light">
                                       <i class="mdi mdi-account-edit mr-1"></i> Edit Profile
                                    </button>
                                 </div>
                              </div> <!-- end col-->
                           </div> <!-- end row -->
                        </div> <!-- end card-body/ profile-user-box-->
                     </div><!--end profile/ card -->
                  </div> <!-- end col-->
               </div>
               <!-- end row -->

               <div class="alert alert-primary" role="alert">
                  <strong> PENGAJUAN KENAIKAN JABATAN FUNGSIONAL SEGERA DIBUKA</strong>
                  Pengajuan kenaikan jabatan fungsional (Lektor Kepala dan Guru Besar) akan dibuka melalui SISTER. Sebelum pengajuan kenaikan jabatan fungsional Guru dibuka, pastikan Guru sudah melengkapi Rumpun Ilmu, memutakhirkan data di profil SISTER dan Operator PAK untuk melengkapi dokumen persyaratan. Klik Info Selengkapnya untuk mempelajari lebih lanjut. Selain perihal di atas, kami juga mengimbau Guru dan Admin PT untuk melakukan pemadanan data dan Operator PAK untuk menggunakan perangkat bantu AK Konversi <span class="badge badge-primary">Selengkapnya</span>
               </div>
               <div class="row">
                  <div class="col-lg-12">

                     <!-- Chart-->
                     <div class="card">
                        <div class="card-body">
                           <h4 class="header-title mb-1">Informasi Penting</h4>
                           <div class="accordion custom-accordion" id="custom-accordion-one">
                              <div class="card mb-0">
                                 <div class="card-header" id="headingFour">
                                    <h5 class="m-0">
                                       <a class="custom-accordion-title d-block py-1" data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                          Apa regulasi yang mendasari hal ini ? <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                       </a>
                                    </h5>
                                 </div>

                                 <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#custom-accordion-one">
                                    <div class="card-body">
                                       <ul>
                                          <li>
                                             Kepmen No. 133/M/2023 Tahun 2023: NUPTK (Nomor Unik Pendidik dan Tenaga Kependidikan) sebagai nomor identitas bagi Guru/tenaga pengajar nonGuru/tenaga kependidikan berikut dengan cakupan data induk serta menjelaskan bagaimana mekanisme penerbitan NUPTK.
                                          </li>
                                          <li>
                                             Tindak Lanjut Regulasi: Guru diwajibkan melakukan pemadanan status Guru yang mencakup status kepegawaian, penempatan tugas, dan verifikasi NIK. Selama masa penyesuaian dan pemutakhiran data, NIDN/NIDK/NUP/NITK masih digunakan sebagai identitas Guru dan NUPTK akan dibuat bertahap sebagai identitas unik PTK.
                                          </li>
                                          <li>
                                             Keputusan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Nomor 133/M/2023 Tahun 2023 <span class="badge badge-danger">Download</span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="card mb-0">
                                 <div class="card-header" id="headingFive">
                                    <h5 class="m-0">
                                       <a class="custom-accordion-title collapsed d-block py-1" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                          Apa dampak regulasi ini bagi saya ? <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                       </a>
                                    </h5>
                                 </div>
                                 <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#custom-accordion-one">
                                    <div class="card-body">
                                       Selama masa transisi NIDN/NIDK/NUP/NITK Anda masih tetap berlaku. Meski demikian, setelah melakukan pemadanan status Guru dan verifikasi NIK, Anda akan mendapatkan nomor identitas baru bernama NUPTK.
                                    </div>
                                 </div>
                              </div>
                              <div class="card mb-0">
                                 <div class="card-header" id="headingSix">
                                    <h5 class="m-0">
                                       <a class="custom-accordion-title collapsed d-block py-1" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                          Apa yang harus saya lakukan terkait regulasi ini ? <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                       </a>
                                    </h5>
                                 </div>
                                 <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#custom-accordion-one">
                                    <div class="card-body">
                                       Anda perlu melakukan pemadanan status Guru dan verifikasi NIK untuk melanjutkan pada proses penerbitan NUPTK.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Chart-->
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="card tilebox-one">
                              <div class="card-body">
                                 <i class="dripicons-user float-right text-muted"></i>
                                 <h6 class="text-muted text-uppercase mt-0">Data Pokok</h6>
                                 <p>
                                    Jika ingin mengubah data, silakan lakukan melalui menu terkait
                                 </p>
                                 <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">NIK</label>
                                    <div class="col-9">
                                       <input type="text" readonly class="form-control-plaintext" id="example-static" value="1720120123123123">
                                    </div>
                                 </div> <!-- end card-body-->
                                 <div class=" form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-9">
                                       <input type="text" readonly class="form-control-plaintext" id="example-static" value="20 Mei 1992">
                                    </div>
                                 </div> <!-- end card-body-->
                                 <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">NIDN/NIDK</label>
                                    <div class="col-9">
                                       <input type="text" readonly class="form-control-plaintext" id="example-static" value="0120059201"> <span>
                                          Tanggal mulai menjadi Guru: 22 Jun 2016
                                       </span>
                                    </div>
                                 </div> <!-- end card-body-->
                                 <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">NIP</label>
                                    <div class="col-9">
                                       <input type="text" readonly class="form-control-plaintext" id="example-static" value="-">
                                    </div>
                                 </div> <!-- end card-body-->
                                 <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">Jabatan</label>
                                    <div class="col-9">
                                       <input type="text" readonly class="form-control-plaintext" id="example-static" value="Lektor"> <span>Tanggal mulai: 1 Sep 2020</span>
                                    </div>
                                 </div> <!-- end card-body-->

                                 <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">Kepangkatan</label>
                                    <div class="col-9">
                                       <input type="text" readonly class="form-control-plaintext" id="example-static" value="Penata - III/c"> <span>Tanggal mulai: 1 Jan 2021</span>
                                    </div>
                                 </div> <!-- end card-body-->

                              </div> <!--end card-->
                           </div><!-- end col -->


                        </div>
                        <!-- end row -->
                     </div>
                     <!-- end col -->

                  </div>
               </div>
               <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <?php
            require '../../assets/template/footer.php';
            ?>
            <!-- end Footer -->

         </div>

         <!-- ============================================================== -->
         <!-- End Page content -->
         <!-- ============================================================== -->


      </div>
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
      <!-- Datatables js -->
      <script src="assets/js/vendor/jquery.dataTables.min.js"></script>
      <script src="assets/js/vendor/dataTables.bootstrap4.js"></script>
      <script src="assets/js/vendor/dataTables.responsive.min.js"></script>
      <script src="assets/js/vendor/responsive.bootstrap4.min.js"></script>

      <!-- Datatable Init js -->
      <script src="assets/js/pages/demo.datatable-init.js"></script>
</body>

<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 05:15:01 GMT -->

</html>