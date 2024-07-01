<?php
require '../../config/connect.php';
if (isset($_POST['proses-sertifikasi'])) {
   $control = $_POST['control'];
   @$jenis = $_POST['jenis'];
   @$bidang = $_POST['bidang'];
   @$no_registrasi = $_POST['no_registrasi'];
   @$no_sertifikasi = $_POST['no_sertifikasi'];
   @$tahun = $_POST['tahun'];
   @$nik = $_POST['nik'];
   @$id = $_POST['id'];
   if ($control == "add") {
      $sql =  mysqli_query($koneksi, "INSERT INTO sertifikasi (nik, id_jenis, bidang, nomor_sertifikasi, nomor_registrasi, tahun)VALUES('$nik','$jenis','$bidang','$no_sertifikasi','$no_registrasi','$tahun')");
   } else if ($control == "delete") {
      $sql = mysqli_query($koneksi, "DELETE FROM sertifikasi WHERE id='$id' ");
   }
   if ($sql) {
      $_SESSION["sukses"] = 'Berhasil Proses';
   } else {
      $_SESSION["error"] = 'Error Parameter';
   }
   $_SESSION['redirectlogin'] = 'module/user/sertifikasi';
}

if (isset($_POST['upload-sertifikasi'])) {
   $tipe = "Sertifikasi";
   $nik = $_POST['nik'];
   $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG', 'jpeg', 'doc', 'docx');
   $namafile = $_FILES['dokumen']['name'];
   $x = explode('.', $namafile);
   $ekstensi = strtolower(end($x));
   $ukuran    = $_FILES['dokumen']['size'];
   $file_tmp = $_FILES['dokumen']['tmp_name'];
   $generatename = uniqid();
   $namafile = $generatename;
   $namafile = $generatename . "." . $ekstensi;

   if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      if ($ukuran < 5044070) {
         move_uploaded_file($file_tmp, '../../file/dokumen/' . $namafile);
         $insert = mysqli_query($koneksi, "INSERT INTO dokumen(nik, keterangan, dokumen)VALUES('$nik','$tipe','$namafile')");
         if ($insert) {
            $_SESSION["sukses"] = 'Berhasil Simpan Data';
         } else {
            $_SESSION["error"] = 'Gagal Simpan';
         }
      } else {
         $_SESSION["error"] = 'Ukuran File Terlalu Besar Max File 5MB';
      }
   } else {
      $_SESSION["error"] = 'Ekstension File Upload Tidak Diperbolehkan, File Harus Format JPG, PNG, PDF';
   }
   $_SESSION['redirectlogin'] = 'module/user/sertifikasi';
}
