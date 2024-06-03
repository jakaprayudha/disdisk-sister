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

      <li class="side-nav-title side-nav-item">Master Data</li>


      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-user"></i>
            <span> Management User </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>pegawai">Data Pegawai</a>
            </li>
            <li>
               <a href="<?= $path ?>user">Management User</a>
            </li>
         </ul>
      </li>

      <li class="side-nav-item">
         <a href="<?= $path ?>perusahaan" class="side-nav-link">
            <i class="uil-building"></i>
            <span> Perusahaan </span>
         </a>
      </li>


      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Wilayah Kerja </span>
            <spRSU MITRA GURAY PETUMBUKANan class="menu-arrow"></spRSU>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>upt-wilayah">UPT Wilayah</a>
            </li>
            <li>
               <a href="<?= $path ?>wil-kabupaten">Kabupaten/Kota</a>
            </li>
            <li>
               <a href="<?= $path ?>wil-kecamatan">Kecamatan</a>
            </li>
            <li>
               <a href="<?= $path ?>wil-desa">Desa</a>
            </li>
         </ul>
      </li>
      <li class="side-nav-item">
         <a href="<?= $path ?>pjk3" class="side-nav-link">
            <i class="uil-user-hard-hat"></i>
            <span> PJK3 </span>
         </a>
      </li>

      <li class="side-nav-item">
         <a href="<?= $path ?>jenis-k3" class="side-nav-link">
            <i class="uil-money-bill-stack"></i>
            <span> Jenis Objek K3 </span>
         </a>
      </li>
      <li class="side-nav-item">
         <a href="<?= $path ?>jenis-alat" class="side-nav-link">
            <i class="uil-technology"></i>
            <span> Jenis Alat </span>
         </a>
      </li>
      <li class="side-nav-item">
         <a href="<?= $path ?>jenis-perusahaan" class="side-nav-link">
            <i class="uil-newspaper"></i>
            <span> Sektor Perusahaan </span>
         </a>
      </li>

      <li class="side-nav-title side-nav-item">RIKSA UJI</li>
      <li class="side-nav-item">
         <a href="<?= $path ?>permohonan" class="side-nav-link">
            <i class=" uil-file-plus-alt"></i>
            <span> Permohonan </span>
         </a>
      </li>

      <li class="side-nav-item">
         <a href="<?= $path ?>spt" class="side-nav-link">
            <i class="uil-file-edit-alt"></i>
            <span> Surat Perintah Tugas </span>
         </a>
      </li>

      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-file-check-alt"></i>
            <span> Approval </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="pages-profile.html">Paraf Kabid SPT</a>
            </li>
            <li>
               <a href="pages-profile-2.html">Persetujuan SPT</a>
            </li>
            <li>
               <a href="pages-invoice.html">Pemeriksaan</a>
            </li>
            <li>
               <a href="pages-faq.html">Persetujuan Pemeriksaan</a>
            </li>
            <li>
               <a href="pages-pricing.html">Surat Keterangan</a>
            </li>
            <li>
               <a href="pages-maintenance.html">Maintenance</a>
            </li>
         </ul>
      </li>

      <li class="side-nav-item">
         <a href="landing.html" target="_blank" class="side-nav-link">
            <i class="uil-globe"></i>
            <span class="badge badge-success float-right">New</span>
            <span> Feedback </span>
         </a>
      </li>

      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-window"></i>
            <span> Approval SUKET </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="layouts-horizontal.html">Paraf UPT</a>
            </li>
            <li>
               <a href="layouts-detached.html">Paraf Kabid</a>
            </li>
            <li>
               <a href="layouts-detached.html">Persetujuan SUKET</a>
            </li>
         </ul>
      </li>

      <li class="side-nav-title side-nav-item mt-1">Laporan</li>
      <li class="side-nav-item">
         <a href="widgets.html" class="side-nav-link">
            <i class="uil-layer-group"></i>
            <span> Surat Keterangan </span>
         </a>
      </li>
      <li class="side-nav-item">
         <a href="widgets.html" class="side-nav-link">
            <i class="uil-layer-group"></i>
            <span> Peralatan </span>
         </a>
      </li>
      <li class="side-nav-item">
         <a href="widgets.html" class="side-nav-link">
            <i class="uil-layer-group"></i>
            <span> SPT </span>
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