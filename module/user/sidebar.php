<?php
$datapath = $_SESSION['path'];
$path = "module/$datapath/";
?>
<div class="h-100" id="left-side-menu-container" data-simplebar>

   <!-- LOGO -->
   <!-- <a href="index" class="logo text-center">
      <span class="logo-lg text-left ml-4">
         <img src="assets/images/logoputih.png" alt="" height="35">
      </span>
      <span class="logo-sm">
         <img src="assets/images/sumut.png" alt="" height="35">
      </span>
   </a> -->

   <!--- Sidemenu -->
   <ul class="metismenu side-nav">

      <li class="side-nav-title side-nav-item">Navigation</li>

      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-home-alt"></i>
            <span class="badge badge-success float-right">4</span>
            <span> Dashboards </span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="javascript:;">Analytics</a>
            </li>
            <li>
               <a href="javascript:;">Perkulihan</a>
            </li>
            <li>
               <a href="javascript:;">Pembayaran Uang Kuliah</a>
            </li>
            <li>
               <a href="javascript:;">P2M</a>
            </li>
         </ul>
      </li>

      <li class="side-nav-title side-nav-item">Aktivitas</li>
      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-user"></i>
            <span> Profile </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>data-pribadi">Data Pribadi</a>
            </li>
            <li>
               <a href="<?= $path ?>inpassing">Inpassing</a>
            </li>
            <li>
               <a href="<?= $path ?>jabatan-fungsional">Jabatan Fungsional</a>
            </li>
            <li>
               <a href="<?= $path ?>kepangkatan">Kepangkatan</a>
            </li>
            <li>
               <a href="<?= $path ?>penempatan">Penempatan</a>
            </li>
         </ul>
      </li>

      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Kualifikasi </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>pendidikan-formal">Pendidikan Formal</a>
            </li>
            <li>
               <a href="<?= $path ?>diklat">Diklat</a>
            </li>
            <li>
               <a href="<?= $path ?>riwayat-pekerjaan">Riwayat Pekerjaan</a>
            </li>
         </ul>
      </li>

      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Kompetensi </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>sertifikasi">Sertifikasi</a>
            </li>
            <li>
               <a href="<?= $path ?>tes">Tes</a>
            </li>
         </ul>
      </li>
      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Pelaks. Pendidikan </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>pengajaran">Pengajaran</a>
            </li>
            <li>
               <a href="<?= $path ?>bimbingan">Bimbingan/Konseling</a>
            </li>
            <li>
               <a href="<?= $path ?>bahan-ajar">Bahan Ajar</a>
            </li>
            <li>
               <a href="<?= $path ?>pembinaan">Pembinaan</a>
            </li>
            <li>
               <a href="<?= $path ?>visiting-scientist">Visiting Scientist</a>
            </li>
            <li>
               <a href="<?= $path ?>datasering">Datasering</a>
            </li>
            <li>
               <a href="<?= $path ?>orasi-ilmiah">Orasi Ilmiah</a>
            </li>
            <li>
               <a href="<?= $path ?>tugas-tambahan">Tugas Tambahan</a>
            </li>
         </ul>
      </li>
      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Pelaks. Penelitian </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>penelitian">Penelitian</a>
            </li>
            <li>
               <a href="<?= $path ?>publikasi">Publikasi Karya</a>
            </li>
            <li>
               <a href="<?= $path ?>hki">Paten / HKI</a>
            </li>
         </ul>
      </li>
      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Pelaks. Pengbadian </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>pengabdian">Pengabdian</a>
            </li>
            <li>
               <a href="<?= $path ?>pembicara">Pembicara</a>
            </li>
            <li>
               <a href="<?= $path ?>pengelola-jurnal">Pengelola Jurnal</a>
            </li>
            <li>
               <a href="<?= $path ?>jabatan-struktural">Jabatan Struktural</a>
            </li>
         </ul>
      </li>
      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Penunjang </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>anggota-profesi">Anggota Profesi</a>
            </li>
            <li>
               <a href="<?= $path ?>penghargaan">Penghargaan</a>
            </li>
            <li>
               <a href="<?= $path ?>penunjang">Penunjang Lain</a>
            </li>
         </ul>
      </li>
      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Reward </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>beasiswa">Beasiswa</a>
            </li>
            <li>
               <a href="<?= $path ?>kesehjateraan">Kesehajetraan</a>
            </li>
            <li>
               <a href="<?= $path ?>tunjangan">Tunjangan</a>
            </li>
         </ul>
      </li>
      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Layanan BKG </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>rekap-kegiatan">Rekap Kegiatan</a>
            </li>
            <li>
               <a href="<?= $path ?>asesor">Asesor Layanan</a>
            </li>
         </ul>
      </li>

      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Layanan PAK </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>angka-kredit">Angka Kredit</a>
            </li>
         </ul>
      </li>

      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Layanan Sertifikasi </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>kepesertaan"">Kepesertaan</a>
            </li>
            <li>
               <a href=" javascript:;">Asesmen Asesor</a>
            </li>
         </ul>
      </li>

      <li class="side-nav-item">
         <a href="<?= $path ?>registrasi" class="side-nav-link">
            <i class=" uil-file-plus-alt"></i>
            <span> Data Dokumen </span>
         </a>
      </li>
      <li class="side-nav-item">
         <a href="<?= $path ?>registrasi" class="side-nav-link">
            <i class=" uil-file-plus-alt"></i>
            <span> Panduan </span>
         </a>
      </li>
      <li class="side-nav-item">
         <a href="<?= $path ?>registrasi" class="side-nav-link">
            <i class=" uil-file-plus-alt"></i>
            <span> SSD </span>
         </a>
      </li>


   </ul>

   <!-- Help Box -->
   <div class="help-box text-white text-center">
      <a href="javascript: void(0);" class="float-right close-btn text-white">
         <i class="mdi mdi-close"></i>
      </a>
      <img src="assets/images/help-icon.svg" height="90" alt="Helper Icon Image" />
      <h5 class="mt-3">Bantuan</h5>
      <p class="mb-3">Jika ada kendala hubungi developer Disnaker</p>
      <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Call Whatsapp</a>
   </div>
   <!-- end Help Box -->
   <!-- End Sidebar -->

   <div class="clearfix"></div>

</div>