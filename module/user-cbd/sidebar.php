<?php
$datapath = $_SESSION['path'];
$path = "module/$datapath/";
?>
<div class="h-100" id="left-side-menu-container" data-simplebar>

   <!-- LOGO -->
   <!-- <a class="logo text-center">
      <span class="logo-lg text-left ml-4">
         <img src="assets/images/disdik-white.png" alt="" height="35">
      </span>
      <span class="logo-sm">
         <img src="assets/images/sumut.png" alt="" height="35">
      </span>
   </a> -->

   <!--- Sidemenu -->
   <ul class="metismenu side-nav">
      <li class="side-nav-title side-nav-item">Aktivitas</li>
      <li class="side-nav-item">
         <a href="<?= $path ?>" class="side-nav-link">
            <i class="uil uil-dashboard"></i>
            <span> Dashboard </span>
         </a>
      </li>
      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-user"></i>
            <span> Profile </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>data-operator">Data Operator</a>
            </li>
            <li>
               <a href="<?= $path ?>data-cabdis">Data Cabang Dinas</a>
            </li>
         </ul>
      </li>

      <li class="side-nav-item">
         <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-folder"></i>
            <span> Master Data </span>
            <span class="menu-arrow"></span>
         </a>
         <ul class="side-nav-second-level" aria-expanded="false">
            <li>
               <a href="<?= $path ?>sekolah">Sekolah</a>
            </li>
            <li>
               <a href="<?= $path ?>operator">Operator Sekolah</a>
            </li>
         </ul>
      </li>



      <li class="side-nav-item">
         <a href="<?= $path ?>dokumen" class="side-nav-link">
            <i class=" uil-server"></i>
            <span> Data Dokumen </span>
         </a>
      </li>
      <li class="side-nav-item">
         <a href="<?= $path ?>panduan" class="side-nav-link">
            <i class=" uil-file"></i>
            <span> Panduan </span>
         </a>
      </li>
      <li class="side-nav-item">
         <a href="<?= $path ?>ssd" class="side-nav-link">
            <i class=" uil-envelopes"></i>
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
      <p class="mb-3">Jika ada kendala hubungi developer disidik</p>
      <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Call Whatsapp</a>
   </div>
   <!-- end Help Box -->
   <!-- End Sidebar -->

   <div class="clearfix"></div>

</div>