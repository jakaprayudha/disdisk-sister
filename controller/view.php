<?php
require "../../config/connect.php";
session_start();
$nik = $_SESSION['nik'];
function tampildata($query)
{
   global $koneksi;
   $result = mysqli_query($koneksi, $query);
   $rows = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
   }
   return $rows;
}
