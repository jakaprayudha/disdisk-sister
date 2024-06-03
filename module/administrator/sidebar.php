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
               <a href="javascript:;">Permohonan</a>
            </li>
            <li>
               <a href="javascript:;">Surat Keterangan</a>
            </li>
            <li>
               <a href="javascript:;">SPT</a>
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
               <a href="<?= $path ?>user-mhs">User Mahasiswa</a>
            </li>
            <li>
               <a href="<?= $path ?>user-univ">User Universitas</a>
            </li>
         </ul>
      </li>

      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Akademik </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>fakultas">Fakultas</a>
            </li>
            <li>
               <a href="<?= $path ?>prodi">Program Studi</a>
            </li>
            <li>
               <a href="<?= $path ?>program">Program</a>
            </li>
            <li>
               <a href="<?= $path ?>program-line">Jalur Pendaftaran</a>
            </li>
            <li>
               <a href="<?= $path ?>jadwal">Jadwal Kegiatan</a>
            </li>
         </ul>
      </li>
      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Keuangan </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>jenis-pendapatan">Jenis Pendapatan</a>
            </li>
            <li>
               <a href="<?= $path ?>rincian-pendapatan">Rincian Pendapatan</a>
            </li>
         </ul>
      </li>

      <li class="side-nav-title side-nav-item">Registrasi PMB</li>
      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Registrasi </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>reguler">Reguler</a>
            </li>
            <li>
               <a href="<?= $path ?>konversi">Konversi</a>
            </li>
         </ul>
      </li>

      <li class="side-nav-item">
         <a href="<?= $path ?>registrasi" class="side-nav-link">
            <i class=" uil-file-plus-alt"></i>
            <span> Data Mahasiswa PMB </span>
         </a>
      </li>


   </ul>

   <!-- End Sidebar -->

   <div class="clearfix"></div>

</div>