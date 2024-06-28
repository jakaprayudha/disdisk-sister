<?php
require '../../config/connect.php';
if (isset($_POST['proses-penempatan'])) {
   $control = $_POST['control'];
   @$ikatan_kerja = $_POST['ikatan_kerja'];
   @$status_pegawai = $_POST['status_pegawai'];
   @$pendidikan = $_POST['pendidikan'];
   @$nik = $_POST['nik'];
   @$unit = $_POST['unit'];
   @$sekolah = $_POST['sekolah'];
   @$terhitung_mulai = $_POST['terhitung_mulai'];
   @$tanggal_keluar = $_POST['tanggal_keluar'];
   @$status = $_POST['status'];
   @$id = $_POST['id'];
   if ($control == "add") {
      $sql =  mysqli_query($koneksi, "INSERT INTO penempatan (nik, status_pegawai, ikatan, pendidikan, unit, terhitung_mulai, tanggal_keluar, homebase)VALUES('$nik','$status_pegawai','$ikatan_kerja','$pendidikan','$unit','$terhitung_mulai','$tanggal_keluar','$sekolah')");
   } else if ($control == "delete") {
      $sql = mysqli_query($koneksi, "DELETE FROM penempatan WHERE id='$id' ");
   }
   if ($sql) {
      $_SESSION["sukses"] = 'Berhasil Proses';
   } else {
      $_SESSION["error"] = 'Error Parameter';
   }
   $_SESSION['redirectlogin'] = 'module/user/penempatan';
}

if (isset($_POST['upload-jafung'])) {
   $tipe = "Jafung";
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
   $_SESSION['redirectlogin'] = 'module/user/jabatan-fungsional';
}
