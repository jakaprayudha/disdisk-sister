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
               <a href="<?= $path ?>user-opt">Operator</a>
            </li>
            <li>
               <a href="<?= $path ?>user-ass">Assessor</a>
            </li>
            <li>
               <a href="<?= $path ?>user-pgg">Tenaga Pendidik</a>
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
               <a href="<?= $path ?>pangkat">Pangkat</a>
            </li>
            <li>
               <a href="<?= $path ?>golongan">Golongan</a>
            </li>
            <li>
               <a href="<?= $path ?>jabatan">Jabatan</a>
            </li>
            <li>
               <a href="<?= $path ?>pendidikan">Pendidikan</a>
            </li>
            <li>
               <a href="<?= $path ?>unit">Unit Kerja</a>
            </li>
         </ul>
      </li>
      <li class="side-nav-title side-nav-item">Usulan</li>
      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Registrasi </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>penilaian">Penilaian</a>
            </li>
            <li>
               <a href="<?= $path ?>konversi">Hasil</a>
            </li>
         </ul>
      </li>

      <li class="side-nav-item">
         <a href="<?= $path ?>registrasi" class="side-nav-link">
            <i class=" uil-file-plus-alt"></i>
            <span> Penetapan Angka Kredit </span>
         </a>
      </li>


   </ul>

   <!-- End Sidebar -->

   <div class="clearfix"></div>

</div>