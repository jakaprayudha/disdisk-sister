<?php
require '../../config/connect.php';
if (isset($_POST['register_pmb'])) {
   $uid = $_POST['uid'];
   $nik = $_POST['nik'];
   $warganegara = $_POST['warganegara'];
   $negara = $_POST['negara'];
   $namadepan = $_POST['namadepan'];
   $namabelakang = $_POST['namabelakang'];
   $tempatlahir = $_POST['tempatlahir'];
   $tanggallahir = $_POST['tanggallahir'];
   $agama = $_POST['agama'];
   $gender = $_POST['gender'];
   $alamat = $_POST['alamat'];
   $provinsi = $_POST['provinsi'];
   $kabupaten = $_POST['kabupaten'];
   $kecamatan = $_POST['kecamatan'];
   $kelurahan = $_POST['kelurahan'];
   $email = $_POST['email'];
   $telepon_mhs = $_POST['telepon_mhs'];
   $hp_mhs = $_POST['hp_mhs'];
   $nama_ayah = $_POST['nama_ayah'];
   $telepon_ayah = $_POST['telepon_ayah'];
   $nama_ibu = $_POST['nama_ibu'];
   $telepon_ibu = $_POST['telepon_ibu'];
   $alamat_orangtua = $_POST['alamat_orangtua'];
   $nama_wali = $_POST['nama_wali'];
   $telepon_wali = $_POST['telepon_wali'];
   $nama_sekolah = $_POST['nama_sekolah'];
   $provinsi_sekolah = $_POST['provinsi_sekolah'];
   $kabupaten_sekolah = $_POST['kabupaten_sekolah'];
   $tahunsekolah = $_POST['tahunsekolah'];
   $nis = $_POST['nis'];
   $ticket = date('Ymd') . rand(1111, 9999);
   $insert = mysqli_query($koneksi, "INSERT INTO register_pmb (uid, nik, warganegara, negara, nama_depan, nama_belakang, tempat_lahir, tanggal_lahir, agama, gender, alamat, provinsi, kabupaten, kecamatan, kelurahan, email, telepon, handphone, nama_ayah, telepon_ayah, nama_ibu, telepon_ibu, alamat_orangtua, nama_wali, telepon_wali, nama_sekolah, provinsi_sekolah, kabupaten_sekolah, nis, lulus, no_tiket)VALUES('$uid','$nik','$warganegara','$negara','$namadepan','$namabelakang','$tempatlahir','$tanggallahir','$agama','$gender','$alamat','$provinsi','$kabupaten','$kecamatan','$kelurahan','$email','$telepon_mhs','$hp_mhs','$nama_ayah','$telepon_ayah','$nama_ibu','$telepon_ibu','$alamat_orangtua','$nama_wali','$telepon_wali','$nama_sekolah','$provinsi_sekolah','$kabupaten_sekolah','$nis','$tahunsekolah','$ticket')");
   if ($insert) {
      $_SESSION["sukses"] = 'Anda Berhasil Melakukan Registrasi, Silahkan Memilih Program !!';
      $_SESSION['redirectlogin'] = 'module/user/program';
   }
}



if (isset($_POST['program_baru'])) {
   $uid = $_POST['uid'];
   $fakultas = $_POST['fakultas'];
   $prodi = $_POST['prodi'];

   $update = mysqli_query($koneksi, "UPDATE register_pmb SET fakultas='$fakultas', prodi='$prodi' WHERE uid='$uid'");
   if ($update) {
      $_SESSION["sukses"] = 'Anda Berhasil Memilih Program Studi, Silahkan Lakukan Pembayaran Rp.750.000 !!';
      $_SESSION['redirectlogin'] = 'module/user/pembayaran';
   }
}


if (isset($_POST['program_trf'])) {
   $uid = $_POST['uid'];
   $nama = $_POST['nama'];
   $fakultas = $_POST['fakultas'];
   $jurusan = $_POST['jurusan'];
   $npm = $_POST['npm'];
   $sks = $_POST['sks'];

   $insert = mysqli_query($koneksi, "INSERT INTO register_konversi (uid, kampus, fakultas, jurusan, npm, sks)VALUES('$uid','$nama','$fakultas','$jurusan','$npm','$sks')");
   if ($insert) {
      $_SESSION["sukses"] = 'Anda Berhasil Memilih Program Studi, Silahkan Lakukan Pembayaran Rp.750.000 !!';
      $_SESSION['redirectlogin'] = 'module/user/pembayaran';
   }
}


if (isset($_POST['konfirmasi_pembayaran'])) {
   $uid = $_POST['uid'];
   $status = 1;
   $update = mysqli_query($koneksi, "UPDATE register_pmb SET status_bayar='$status' WHERE uid='$uid'");
   if ($update) {
      $_SESSION["sukses"] = 'Anda Berhasil Memilih Melakukan Konfirmasi Pembayaran !!, silahkan hadir kekampus untuk mendapatkan nomor nrm dan validasi kepesertaan mahasiswa';
      $_SESSION['redirectlogin'] = 'index';
   }
}
