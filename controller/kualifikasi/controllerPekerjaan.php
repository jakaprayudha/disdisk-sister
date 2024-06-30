<?php
require '../../config/connect.php';
if (isset($_POST['proses-pekerjaan'])) {
   $control = $_POST['control'];
   @$penempatan = $_POST['penempatan'];
   @$pekerjaan = $_POST['pekerjaan'];
   @$deskripsi = $_POST['deskripsi'];
   @$waktu = $_POST['waktu'];
   @$perusahaan = $_POST['perusahaan'];
   @$nik = $_POST['nik'];
   @$id = $_POST['id'];
   if ($control == "add") {
      $sql =  mysqli_query($koneksi, "INSERT INTO pekerjaan (nik, perusahaan, pekerjaan, deskripsi, waktu, penempatan)VALUES('$nik','$perusahaan','$pekerjaan','$deskripsi','$waktu','$penempatan')");
   } else if ($control == "delete") {
      $sql = mysqli_query($koneksi, "DELETE FROM pekerjaan WHERE id='$id' ");
   }
   if ($sql) {
      $_SESSION["sukses"] = 'Berhasil Proses';
   } else {
      $_SESSION["error"] = 'Error Parameter';
   }
   $_SESSION['redirectlogin'] = 'module/user/riwayat-pekerjaan';
}

if (isset($_POST['upload-pekerjaan'])) {
   $tipe = "Pekerjaan";
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
   $_SESSION['redirectlogin'] = 'module/user/riwayat-pekerjaan';
}
