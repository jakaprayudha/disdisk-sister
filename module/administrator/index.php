<?php
$page = "Home";
require '../../controller/view.php';
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <?php
    require '../../assets/template/head.php';
    ?>
</head>

<body class="loading">
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <?php
            require 'sidebar.php';
            ?>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <?php
                require 'header.php';
                ?>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="mt-5 mb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">

                                    <div class="text-center">
                                        <img src="assets/images/maintenance.svg" height="140" alt="File not found Image">
                                        <h3 class="mt-4">Selamat Datang Di Portal Mahasiswa Universitas Graha Kirana</h3>
                                        <p class="text-muted">Aplikasi ini digunakan untuk manage Penerimaan Mahasiswa Baru (PMB)</p>
                                    </div> <!-- end /.text-center-->

                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end container -->
                    </div>

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <?php
            require '../../assets/template/footer.php';
            ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="assets/js/vendor/apexcharts.min.js"></script>
    <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="assets/js/pages/demo.dashboard.js"></script>
    <!-- end demo js-->
</body>

<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 05:15:01 GMT -->

</html>