<?php
$page = "Home";
require '../../controller/view.php';
$uid = $_SESSION['uid'];
$checkprofile = mysqli_query($koneksi, "SELECT * FROM profile_operator_cabdis WHERE uid_user='$uid'");
$dataprofile = mysqli_fetch_array($checkprofile);
?>
<!DOCTYPE html>
<html lang="en">


<head>
   <?php
   require '../../assets/template/head.php';
   ?>
   <style>
      .map-container {
         position: relative;
         overflow: hidden;
         width: 100%;
         padding-top: 56.25%;
         /* 16:9 Aspect Ratio */
      }

      .map-container iframe {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         border: 0;
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
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                              <li class="breadcrumb-item active">Profile</li>
                           </ol>
                        </div>
                        <h4 class="page-title">Selamat Datang, <?= $_SESSION['fullname'] ?></h4>
                     </div>
                  </div>
               </div>
               <!-- end page title -->


               <div class="alert alert-primary alert-info" role="alert">
                  <i class="dripicons-information mr-2"></i>
                  Lengkapi kebutuhan data master untuk Cabang Dinas Wilayah anda sebelum tanggal 30 Agustus 2024 23.00 WIB, SISTER DISDIK Dinas Pendidikan Provinsi Sumatera Utara akan secara otomatis melakukan sinkronisasi data pada tanggal yang telah ditentukan.
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
                                 <h6 class="text-muted text-uppercase mt-0">Data Cabang Dinas Pendidikan</h6>
                                 <p>
                                    Jika ingin mengubah data, silakan lakukan melalui menu terkait
                                 </p>
                                 <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">Kode</label>
                                    <div class="col-9">
                                       <input type="text" readonly class="form-control-plaintext" id="example-static" value=":">
                                    </div>
                                 </div> <!-- end card-body-->
                                 <div class=" form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">Kepala Cabang Dinas</label>
                                    <div class="col-9">
                                       <input type="text" readonly class="form-control-plaintext" id="example-static" value=":">
                                    </div>
                                 </div> <!-- end card-body-->
                                 <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">Alamat</label>
                                    <div class="col-9">
                                       <input type="text" readonly class="form-control-plaintext" id="example-static" value=":">
                                    </div>
                                 </div> <!-- end card-body-->
                                 <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">No. Telepon</label>
                                    <div class="col-9">
                                       <input type="text" readonly class="form-control-plaintext" id="example-static" value=":">
                                    </div>
                                 </div> <!-- end card-body-->
                                 <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                                    <div class="col-9">
                                       <input type="text" readonly class="form-control-plaintext" id="example-static" value=":">
                                    </div>
                                 </div> <!-- end card-body-->

                                 <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">Maps</label>
                                    <div class="col-9">
                                       <!-- Portlet card -->
                                       <div class="card mb-md-0 mb-3">
                                          <div class="card-body">
                                             <h5 class="card-title mb-0">Peta</h5>

                                             <div id="cardCollpase1" class="collapse pt-3 show">
                                                <div class="map-container">
                                                   <iframe
                                                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.363755008809!2d144.9560541153211!3d-37.81720997975143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577a8ef1a4a6c0!2sFederation%20Square%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sus!4v1600000000000!5m2!1sen!2sus"
                                                      loading="lazy"
                                                      allowfullscreen="">
                                                   </iframe>
                                                </div>
                                             </div>
                                          </div>
                                       </div> <!-- end card-->
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