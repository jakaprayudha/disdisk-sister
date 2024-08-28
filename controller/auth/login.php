<?php
require 'config/connect.php';
if (isset($_POST['login'])) {
   $email = $_POST['email'];
   $password = md5($_POST['password']);
   $check_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$email'");
   $data_user = mysqli_fetch_array($check_user);
   if ($data_user == NULL) {
      $_SESSION["error"] = 'Username Anda Belum Terdaftar !!  ';
   } else {
      session_start();
      $_SESSION['uid'] = $data_user['uid'];
      $_SESSION['nik'] = $data_user['nik'];
      $_SESSION['fullname'] = $data_user['fullname'];
      $_SESSION['username'] = $data_user['username'];
      $_SESSION['roles'] = $data_user['roles'];
      $_SESSION['path'] = $data_user['path'];
      $pass = $data_user['password'];
      if ($pass != $password) {
         $_SESSION["error"] = 'Password Anda Salah !! ';
      } else {
         $roles = $data_user['roles'];
         if ($roles == 'admin') {
            $_SESSION['redirectlogin'] = 'module/admin/index';
         } else if ($roles == 'user') {
            $_SESSION['redirectlogin'] = 'module/user/index';
         } else if ($roles == 'opt-cabdis') {
            $_SESSION['redirectlogin'] = 'module/user-cbd/index';
         } else if ($roles == 'opt-sekolah') {
            $_SESSION['redirectlogin'] = 'module/user-sch/index';
         }
         $stamp = date('Y-m-d H:i:s');
         $update_status_time = mysqli_query($koneksi, "UPDATE user SET update_at='$stamp' WHERE username='$email'");
         if ($update_status_time) {
            $_SESSION["sukses"] = 'Selamat Anda Berhasil Login ';
         }
      }
   }
}

if (isset($_POST['reset'])) {
   $email = $_POST['username'];
   $check_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$email'");
   $data_user = mysqli_fetch_array($check_user);
   if ($data_user == NULL) {
      $_SESSION["error"] = 'Username Anda Belum Terdaftar !!  ';
   } else {
      $pass = rand(1111, 9999);
      $encrypt = md5($pass);
      $stamp = date('Y-m-d H:i:s');
      $update_pass = mysqli_query($koneksi, "UPDATE user SET password='$encrypt', update_at='$stamp' WHERE username='$email'");
      if ($update_pass) {
         $_SESSION["sukses"] = 'Berhasil Merubah Password, Gunakan Password : ' . $pass;
         $_SESSION['redirectlogin'] = 'index';
      }
   }
}

if (isset($_POST['register'])) {
   $roles = $_POST['roles'];
   $nik = $_POST['nomor_nik'];
   $email = $_POST['email'];
   $nama = $_POST['nama'];
   $password = md5($_POST['password']);
   $approve = $_POST['approve'];
   if ($approve == 1) {
      $check_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$email'");
      $data_user = mysqli_fetch_array($check_user);
      if ($data_user) {
         $_SESSION["error"] = 'Email anda telah terdaftar !!!';
      } else {
         $uid = md5($nik);
         if ($roles == 3) {
            $role = "user";
         } else if ($roles == 2) {
            $role = 'opt-sekolah';
         } else if ($roles == 1) {
            $role = 'opt-cabdis';
         }
         $path = 'user';
         $insert = mysqli_query($koneksi, "INSERT INTO user (uid, nik, fullname, username, password, roles, path)VALUES('$uid','$nik','$nama','$email','$password','$role','$path')");
         if ($insert) {
            $sql = mysqli_query($koneksi, "INSERT INTO profile(user_id, nama)VALUES('$nik','$nama')");
            if ($sql) {
               $_SESSION["sukses"] = 'Anda Berhasil Melakukan Registrasi, Silahkan Login !!';
               $_SESSION['redirectlogin'] = 'index';
            }
         }
      }
   } else {
      $_SESSION["error"] = 'Terms & Condition belum anda setujui, maka account anda tidak dapat dibuat';
   }
}
