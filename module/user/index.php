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

                                       <h4 class="mt-1 mb-1 text-white">Jaka Prayudha</h4>
                                       <p class="font-13 text-white-50"> STMIK Triguna Dharma</p>

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
                  Pengajuan kenaikan jabatan fungsional (Lektor Kepala dan Guru Besar) akan dibuka melalui SISTER. Sebelum pengajuan kenaikan jabatan fungsional dosen dibuka, pastikan Dosen sudah melengkapi Rumpun Ilmu, memutakhirkan data di profil SISTER dan Operator PAK untuk melengkapi dokumen persyaratan. Klik Info Selengkapnya untuk mempelajari lebih lanjut. Selain perihal di atas, kami juga mengimbau Dosen dan Admin PT untuk melakukan pemadanan data dan Operator PAK untuk menggunakan perangkat bantu AK Konversi <span class="badge badge-primary">Selengkapnya</span>
               </div>
               <div class="row">
                  <div class="col-lg-4">
                     <!-- Personal-Information -->
                     <div class="card">
                        <div class="card-body">
                           <h4 class="header-title mt-0 mb-1">Pemadanan Data Dosen</h4>
                           <p class="text-muted font-13">
                              Progres pemeriksaan status dosen dan verifikasi NIK ditampilkan di sini
                           </p>

                           <hr />

                           <div class="text-left">
                              <ul>
                                 <li>
                                    <strong>Periksa Status Dosen</strong> <span class="badge badge-success">Terverifikasi</span>
                                    <p>
                                       Pastikan status kepegawaian dan penempatan tugas Anda telah sesuai. Segera lakukan pemadanan data jika dibutuhkan.
                                    </p>
                                    <button class="btn btn-light mb-2">Lihat Status</button>
                                 </li>
                                 <li>
                                    <strong>Verifikasi NIK</strong> <span class="badge badge-success">Terverifikasi</span>
                                    <p>
                                       Proses ini memerlukan NIK dan nama ibu kandung Anda untuk penyesuaian dengan data Dukcapil. Data dijamin kerahasiaannya.
                                    </p>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- Personal-Information -->

                     <!-- Toll free number box-->
                     <div class="card text-white bg-info overflow-hidden">
                        <div class="card-body">
                           <p>
                              <strong>Status Profil </strong><br>
                              Anda dapat melihat status NUPTK Anda di bawah ini
                              <span class="badge badge-success"> Data Terverifikasi</span>
                              Semua rincian data dan NIK Anda berhasil terverifikasi
                           </p>
                           <hr>
                           <div class="toll-free-box text-center">
                              <h4> <i class="mdi mdi-deskphone"></i> NUPTK: 9852770671130342</h4>
                           </div>
                        </div> <!-- end card-body-->
                     </div> <!-- end card-->
                     <!-- End Toll free number box-->

                     <!-- Messages-->
                     <div class="card">
                        <div class="card-body">
                           <h4 class="header-title mb-1">Pendidikan Terakhir</h4>
                           <div class="form-group row mb-1">
                              <label for="inputEmail3" class="col-6 col-form-label">Jenjang Pendidikan</label>
                              <div class="col-6">
                                 <input type="text" readonly class="form-control-plaintext" id="example-static" value="S2">
                              </div>
                           </div> <!-- end card-body-->
                           <div class="form-group row mb-1">
                              <label for="inputEmail3" class="col-6 col-form-label">Bidang Studi</label>
                              <div class="col-6">
                                 <input type="text" readonly class="form-control-plaintext" id="example-static" value="Ilmu Komputer">
                              </div>
                           </div> <!-- end card-body-->
                           <div class="form-group row mb-1">
                              <label for="inputEmail3" class="col-6 col-form-label">Perguruan Tinggi</label>
                              <div class="col-6">
                                 <input type="text" readonly class="form-control-plaintext" id="example-static" value="Universitas Putra Indonesia Yptk Padang">
                              </div>
                           </div> <!-- end card-body-->
                           <div class="form-group row mb-1">
                              <label for="inputEmail3" class="col-6 col-form-label">Tahun Lulus</label>
                              <div class="col-6">
                                 <input type="text" readonly class="form-control-plaintext" id="example-static" value="2016">
                              </div>
                           </div> <!-- end card-body-->
                        </div> <!-- end card-body-->
                     </div> <!-- end card-->


                     <!-- Messages-->
                     <div class="card">
                        <div class="card-body">
                           <h4 class="header-title mb-1">Syarat Serdos </h4>
                           <div class="alert alert-primary bg-white text-primary" role="alert">
                              Untuk informasi lebih lanjut bisa menghubungi PSD-PTU Perguruan Tinggi masing-masing atau cek PO Serdos <span class="badge badge-primary">Selengkapnya</span>
                           </div>
                           <div class="form-group row mb-1">
                              <label for="inputEmail3" class="col-6 col-form-label">Syarat Pengisian BKD
                              </label>
                              <div class="col-6">
                                 <input type="text" readonly class="form-control-plaintext" id="example-static" value="Tidak Memenuhi">
                              </div>
                           </div> <!-- end card-body-->
                           <div class="form-group row mb-1">
                              <label for="inputEmail3" class="col-6 col-form-label">TKDA</label>
                              <div class="col-6">
                                 <input type="text" readonly class="form-control-plaintext" id="example-static" value="-">
                              </div>
                           </div> <!-- end card-body-->
                           <div class="form-group row mb-1">
                              <label for="inputEmail3" class="col-6 col-form-label">TKBI</label>
                              <div class="col-6">
                                 <input type="text" readonly class="form-control-plaintext" id="example-static" value="-">
                              </div>
                           </div> <!-- end card-body-->
                           <div class="form-group row mb-1">
                              <label for="inputEmail3" class="col-6 col-form-label">PEKERTI & AA</label>
                              <div class="col-6">
                                 <input type="text" readonly class="form-control-plaintext" id="example-static" value="-">
                              </div>
                           </div> <!-- end card-body-->
                        </div> <!-- end card-body-->
                     </div> <!-- end card-->

                  </div> <!-- end col-->

                  <div class="col-lg-8">

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
                                             Kepmen No. 133/M/2023 Tahun 2023: NUPTK (Nomor Unik Pendidik dan Tenaga Kependidikan) sebagai nomor identitas bagi dosen/tenaga pengajar nondosen/tenaga kependidikan berikut dengan cakupan data induk serta menjelaskan bagaimana mekanisme penerbitan NUPTK.
                                          </li>
                                          <li>
                                             Tindak Lanjut Regulasi: Dosen diwajibkan melakukan pemadanan status dosen yang mencakup status kepegawaian, penempatan tugas, dan verifikasi NIK. Selama masa penyesuaian dan pemutakhiran data, NIDN/NIDK/NUP/NITK masih digunakan sebagai identitas dosen dan NUPTK akan dibuat bertahap sebagai identitas unik PTK.
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
                                       Selama masa transisi NIDN/NIDK/NUP/NITK Anda masih tetap berlaku. Meski demikian, setelah melakukan pemadanan status dosen dan verifikasi NIK, Anda akan mendapatkan nomor identitas baru bernama NUPTK.
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
                                       Anda perlu melakukan pemadanan status dosen dan verifikasi NIK untuk melanjutkan pada proses penerbitan NUPTK.
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
                                 <i class="dripicons-folder float-right text-muted"></i>
                                 <h6 class="text-muted text-uppercase mt-0">Rumpun Ilmu</h6>
                                 <p>
                                    Informasi ini diperlukan untuk pemetaan sumber daya & basis data berbagai layanan di SISTER
                                 </p>
                                 <div class="alert alert-danger" role="alert">
                                    Segera lengkapi informasi ini untuk mengakses berbagai layanan di SISTER (BKD, Serdos & lainnya)
                                 </div>
                                 <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">Rumpun Ilmu</label>
                                    <div class="col-9">
                                       <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                 </div> <!-- end card-body-->
                                 <div class=" form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">Pohon Ilmu</label>
                                    <div class="col-9">
                                       <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                 </div> <!-- end card-body-->
                                 <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label">Cabang Ilmu</label>
                                    <div class="col-9">
                                       <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                 </div> <!-- end card-body-->
                                 <div class="form-group row mb-1">
                                    <label for="inputEmail3" class="col-3 col-form-label"></label>
                                    <div class="col-9">
                                       <button class="btn btn-primary">Pebarui Data</button>
                                    </div>
                                 </div> <!-- end card-body-->

                              </div> <!--end card-->
                           </div><!-- end col -->


                        </div>
                        <!-- end row -->
                     </div>

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
                                          Tanggal mulai menjadi dosen: 22 Jun 2016
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
                  <!-- end row -->
                  <div class="col-lg-12">
                     <!-- Personal-Information -->
                     <div class="card">
                        <div class="card-body">
                           <h4 class="header-title mt-0 mb-1">Riwayat Perubahan Data Dosen</h4>
                           <div class="alert alert-primary bg-white text-primary" role="alert">
                              Riwayat Perubahan Data Dosen adalah log yang mencatat semua perubahan pada informasi dosen dalam sistem. Termasuk pembaruan pribadi, kualifikasi, status pekerjaan, dsb. Berfungsi melacak aktivitas dosen, transparansi, dan jejak perubahan data. Penting untuk pemantauan dan audit administratif.
                           </div>
                           <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                              <thead>
                                 <tr>
                                    <th>Jenis PPD</th>
                                    <th>Jenis Ajuan</th>
                                    <th>Tanggal Ajuan</th>
                                    <th>Tanggal Verifikasi</th>
                                    <th>Umur Ajuan (Hari)</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Jabatan Fungsional</td>
                                    <td>Ajuan Data Baru</td>
                                    <td>23 Februari 2021</td>
                                    <td>28 Februari 2021</td>
                                    <td>5</td>
                                    <td class="text-center">
                                       <span class="badge badge-success">Disetujui DISDIK</span>
                                    </td>
                                    <td>
                                       <button type="button" class="btn btn-info"><i class="mdi mdi-information-outline"></i> </button>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <!-- Personal-Information -->
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