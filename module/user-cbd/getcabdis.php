<?php
$uid = $_SESSION['uid'];
$checkprofile = mysqli_query($koneksi, "SELECT * FROM profile_operator_cabdis WHERE uid_user='$uid'");
$dataprofile = mysqli_fetch_array($checkprofile);
$check_cabdis = mysqli_query($koneksi, "SELECT * FROM cabang_dinas WHERE uid_user='$uid'");
$datacabdis = mysqli_fetch_array($check_cabdis);
