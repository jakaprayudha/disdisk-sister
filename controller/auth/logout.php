<?php
require '../../config/connect.php';
$uid = $_GET['id'];
$check_user = mysqli_query($koneksi, "SELECT * FROM user WHERE uid='$uid'");
$data_user = mysqli_fetch_array($check_user);
if ($data_user) {
   $stamp = date('Y-m-d H:i:s');
   $update_session = mysqli_query($koneksi, "UPDATE user SET logout_at='$stamp' WHERE uid='$uid'");
   if ($update_session) {
      session_start();
      unset($_SESSION['uid']);
      unset($_SESSION['nama']);
      unset($_SESSION['username']);
      unset($_SESSION['status']);
      unset($_SESSION['roles']);
      unset($_SESSION['path']);
      session_destroy();
      echo " <script>alert ('Anda Telah Mengakhiri Session Aplikasi');
         document.location='../../index'</script>";
   }
}
