<?php
$page = "Register";
require 'controller/auth/login.php';
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <?php
    require  'head.php';
    ?>
</head>

<body class="auth-fluid-pages pb-0">

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- Logo -->
                    <!-- <div class="auth-brand text-center text-lg-left">
                        <a href="register">
                            <span><img src="assets/images/graha.png" alt="" height="100"></span>
                        </a>
                    </div> -->

                    <!-- title-->
                    <h4 class="mt-0">Free Sign Up</h4>
                    <p class="text-muted mb-4">Belum punya akun? Buat akun Anda, hanya membutuhkan waktu kurang dari satu menit </p>

                    <!-- form -->
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="fullname">Nama Lengkap</label>
                            <input class="form-control" autocomplete="off" type="text" id="fullname" name="nama" placeholder="Nama Sesuai Identitas" required>
                        </div>
                        <div class="form-group">
                            <label for="emailaddress">Email address</label>
                            <input class="form-control" autocomplete="off" type="email" id="emailaddress" name="email" required placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" autocomplete="off" type="password" required id="password" name="password" placeholder="Enter your password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="approve" value="1" class="custom-control-input" id="checkbox-signup">
                                <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);" data-toggle="modal" data-target="#terms" class="text-muted">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" type="submit" name="register"><i class="mdi mdi-account-circle"></i> Sign Up </button>
                        </div>
                    </form>
                    <!-- end form-->

                    <!-- Footer-->
                    <footer class="footer footer-alt">
                        <p class="text-muted">Sudah punya akun ?<a href="index" class="text-muted ml-1"><b>Log In</b></a></p>
                    </footer>

                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Standard modal -->
        <div id="terms" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="standard-modalLabel">Terms and Conditions</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Untuk kepentingan pembukaan akun PMB-UNIV GRAHA KIRANA, Pengguna perlu memberikan Data Pribadi dan informasi yang dibutuhkan PMB-UNIV GRAHA KIRANA. Pengguna harus menyetujui Syarat dan Ketentuan Penggunaan serta Kebijakan Privasi PMB-UNIV GRAHA KIRANA saat mendaftarkan diri.
                        </p>
                        <p>
                            <li>
                                Pengguna setuju untuk menggunakan PMB-UNIV GRAHA KIRANA hanya untuk tujuan dan cara yang sah.
                            </li>
                            <li>
                                Pengguna bersedia untuk mematuhi semua panduan, pemberitahuan, peraturan operasional, kebijakan, dan instruksi apapun terkait penggunaan PMB-UNIV GRAHA KIRANA, sekaligus seluruh perubahan yang diterbitkan oleh PMB-UNIV GRAHA KIRANA dari waktu ke waktu, baik karena alasan teknis atau karena kebijakan Pemerintah Republik Indonesia.
                            </li>
                            <li>
                                Pengguna menjamin informasi atau data yang Pengguna masukan ke PMB-UNIV GRAHA KIRANA bersifat akurat.
                            </li>
                            <li>
                                Dalam hal Pengguna merupakan anak, maka Pengguna menyatakan dan menjamin bahwa penggunaan PMB-UNIV GRAHA KIRANA telah mendapat persetujuan dari perusahaan karena akan diminta surat permohonan akses ke PMB-UNIV GRAHA KIRANA Dengan menyetujui Syarat dan Ketentuan Penggunaan ini
                            </li>
                            <li>
                                Pengguna memahami dan setuju untuk juga tunduk pada Kebijakan Privasi PMB-UNIV GRAHA KIRANA.
                            </li>
                        </p>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- Auth fluid right content -->
        <?php
        require 'assets/template/notes.php';
        ?>
        <!-- end Auth fluid right content -->
    </div>
    <?php if (@$_SESSION['sukses']) { ?>
        <script>
            swal("Good job !", "<?php echo $_SESSION['sukses']; ?>", "success").then(function() {
                window.location = "<?php echo $_SESSION['redirectlogin'] ?>";
            });
        </script>
    <?php unset($_SESSION['sukses']);
    } ?>
    <?php if (@$_SESSION['error']) { ?>
        <script>
            swal("Perhatian !!", "<?php echo $_SESSION['error']; ?>", "error");
        </script>
    <?php unset($_SESSION['error']);
    } ?>
    <!-- end auth-fluid-->

    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from coderthemes.com/hyper/saas/pages-register-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 05:16:51 GMT -->

</html>