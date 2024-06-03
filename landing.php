<?php
$page = "Home";
require 'config/connect.php';
require 'controller/view.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>RESPEK| Reformasi Pengawasan Spesialiasi Ketenagakerjaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Reformasi Pengawasan Spesialiasi Ketenagakerjaan" name="description" />
    <meta content="Coderthemes" name="ImZack Dev" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/sumut.png">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body>

    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg py-lg-3 navbar-dark">
        <div class="container">

            <!-- logo -->
            <a href="index.html" class="navbar-brand mr-lg-5">
                <img src="assets/images/logoputih.png" alt="" class="logo-dark" height="30" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>

            <!-- menus -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                <!-- left menu -->
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link active" href="index">Home</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="#">Layanan</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="#">Data Pengawas</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="#">Data Perusahaan</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="#">Galeri</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="#">Layanan Pengaduan</a>
                    </li>
                </ul>

                <!-- right menu -->
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item mr-0">
                        <a href="login" class="btn btn-sm btn-light btn-rounded d-none d-lg-inline-flex">
                            <i class="mdi mdi-login mr-2"></i> Masuk
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- START HERO -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="mt-md-4">
                        <div>
                            <span class="badge badge-danger badge-pill">New</span>
                            <span class="text-white-50 ml-1">Welcome to RESPEK</span>
                        </div>
                        <h2 class="text-white font-weight-normal mb-4 mt-3 hero-title">
                            Reformasi Pengawasan Spesialiasi Ketenagakerjaan
                        </h2>

                        <p class="mb-4 font-16 text-white-50">Teknologi Terintegrasi Untuk Layanan Pengawasan Spesialis Ketenagakerjaan
                            Penyedia layanan pengawasan spesialis Ketenagakerjaan secara online</p>

                        <a href="#" target="_blank" class="btn btn-success">Preview <i class="mdi mdi-arrow-right ml-1"></i></a>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div class="text-md-right mt-3 mt-md-0">
                        <img src="assets/images/startup.svg" alt="" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO -->

    <!-- START SERVICES -->
    <section class="py-5">
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-0"><i class="mdi mdi-infinity"></i></h1>
                        <h3>Apa itu <span class="text-primary">RESPEK</span> Dinas Ketenagakerjaan </h3>
                        <p class="text-muted mt-2">Aplikasi yang digunakan untuk melakukan pengurusan izin peralatan K3 <br> secara online untuk memudahkan pengurusan izin dan seluruh layanan tidak dipungut biaya
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-desktop text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Responsive Layouts</h4>
                        <p class="text-muted mt-2 mb-0">Dapat digunakan diseluruh perangkat anda seperti laptop, tablet dan smartphone, tampilan aplikasi akan menyesuaikan
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-vector-square text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Realtime Submit</h4>
                        <p class="text-muted mt-2 mb-0">Seluruh permohonan yang diusulkan melalui aplikasi ini akan realtime dapat anda monitoring dan dilengkapi fitur notifikasi mail service
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-presentation text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Monitoring</h4>
                        <p class="text-muted mt-2 mb-0">Anda dapat melakukan pemantauan secara berkala untuk progress usulan permohonan anda untuk dapat kepastian waktu pengurusan
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-apps text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Integrations Apps</h4>
                        <p class="text-muted mt-2 mb-0">Terintegrasi dengan aplikasi lainnya yang dimiliki oleh Dinas Ketenagakerjaan Provinsi Sumatera Utara
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-folder text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Encrypt end to end</h4>
                        <p class="text-muted mt-2 mb-0">Kami memastikan seluruh data rahasia anda kami jaga dengan menerapakan enkripsi end to end untuk memastikan data anda aman
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-grids text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Multitasking Submit</h4>
                        <p class="text-muted mt-2 mb-0">Anda dapat mengusulkan permohonan lebih dari satu permohohonan secara bersamaan, dan anda akan lebih mudah memantaunya
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END SERVICES -->

    <!-- START FEATURES 1 -->
    <section class="py-5 bg-light-lighten border-top border-bottom border-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3>Data <span class="text-primary">Pengawas</span></h3>
                        <p class="text-muted mt-2">Berikut ini pengawas PJK3 yang Dinas Ketenagakerjaan Provinsi Suamtera Utara </p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <?php
                $query = tampildata("SELECT * FROM pengawas_pjk3");
                ?>
                <?php foreach ($query as $data) : ?>
                    <div class="col-lg-4">
                        <a href="javascript:;" data-toggle="modal" data-target="#info<?= $data['nip'] ?>">
                            <div class="demo-box text-center">
                                <img src="assets/images/notfound.jpeg" alt="pengawas-pjk3-disnaker-sumut" class="img-fluid shadow-sm rounded">
                                <h5 class="mt-3 f-17"><?= $data['nama'] ?><br>
                                    <span class="text-primary">
                                        <p>NIP. <?= $data['nip'] ?></p>
                                    </span>
                                </h5>
                            </div>
                        </a>
                    </div>
                    <!-- Standard modal -->
                    <div id="info<?= $data['nip'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="standard-modalLabel"><?= $data['nama'] ?></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="example-email">Nama Pegawai</label>
                                        <select name="" class="form-control" id="">
                                            <option value="">PILIH</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">Username</label>
                                        <input type="text" id="example-email" name="example-email" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">Password</label>
                                        <input type="password" id="example-email" name="example-email" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                <?php endforeach ?>

            </div>
        </div>
    </section>
    <!-- END FEATURES 1 -->


    <!-- START PRICING -->
    <section class="py-5 bg-light-lighten border-top border-bottom border-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-0"><i class="mdi mdi-tag-multiple"></i></h1>
                        <h3>Data <span class="text-primary">Perusahaan</span></h3>
                        <p class="text-muted mt-2">Data Perusahaan PJK3 ini merupakan daftar data yang dirilis oleh Dinas Ketenagakerjaan
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-3">
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name font-weight-bold text-uppercase">PT.ABC </p>
                            <i class="card-pricing-icon dripicons-user text-primary"></i>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                            </p>
                            <button class="btn btn-primary mt-4 mb-2 btn-rounded">Detail Perusahaan</button>
                        </div>
                    </div>
                    <!-- end Pricing_card -->
                </div>
                <!-- end col -->

            </div>

        </div>
    </section>
    <!-- END PRICING -->

    <!-- START FAQ -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-0"><i class="mdi mdi-frequently-asked-questions"></i></h1>
                        <h3>Frequently Asked <span class="text-primary">Questions</span></h3>
                        <p class="text-muted mt-2">Here are some of the basic types of questions for our customers. For more
                            <br>information please contact us.
                        </p>

                        <button type="button" class="btn btn-success btn-sm mt-2"><i class="mdi mdi-email-outline mr-1"></i> Email us your question</button>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-5 offset-lg-1">
                    <!-- Question/Answer -->
                    <div>
                        <div class="faq-question-q-box">Q.</div>
                        <h4 class="faq-question text-body">Can I use this template for my client?</h4>
                        <p class="faq-answer mb-4 pb-1 text-muted">Yup, the marketplace license allows you to use this theme
                            in any end products.
                            For more information on licenses, please refere <a href="https://themes.getbootstrap.com/licenses/" target="_blank">here</a>.</p>
                    </div>

                    <!-- Question/Answer -->
                    <div>
                        <div class="faq-question-q-box">Q.</div>
                        <h4 class="faq-question text-body">How do I get help with the theme?</h4>
                        <p class="faq-answer mb-4 pb-1 text-muted">Use our dedicated support email (support@coderthemes.com) to send your issues or feedback. We are here to help anytime.</p>
                    </div>

                </div>
                <!--/col-lg-5 -->

                <div class="col-lg-5">
                    <!-- Question/Answer -->
                    <div>
                        <div class="faq-question-q-box">Q.</div>
                        <h4 class="faq-question text-body">Can this theme work with Wordpress?</h4>
                        <p class="faq-answer mb-4 pb-1 text-muted">No. This is a HTML template. It won't directly with
                            wordpress, though you can convert this into wordpress compatible theme.</p>
                    </div>

                    <!-- Question/Answer -->
                    <div>
                        <div class="faq-question-q-box">Q.</div>
                        <h4 class="faq-question text-body">Will you regularly give updates of Hyper?</h4>
                        <p class="faq-answer mb-4 pb-1 text-muted">Yes, We will update the Hyper regularly. All the
                            future updates would be available without any cost.</p>
                    </div>

                </div>
                <!--/col-lg-5-->
            </div>
            <!-- end row -->

        </div> <!-- end container-->
    </section>
    <!-- END FAQ -->


    <!-- START CONTACT -->
    <section class="py-5 bg-light-lighten border-top border-bottom border-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3>Pengaduan <span class="text-primary">Layanan</span></h3>
                        <p class="text-muted mt-2">Please fill out the following form and we will get back to you shortly. For more
                            <br>information please contact us.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-3">
                <div class="col-md-4">
                    <p class="text-muted"><span class="font-weight-bold">Customer Support:</span><br> <span class="d-block mt-1">+1 234 56 7894</span></p>
                    <p class="text-muted mt-4"><span class="font-weight-bold">Email Address:</span><br> <span class="d-block mt-1">info@gmail.com</span></p>
                    <p class="text-muted mt-4"><span class="font-weight-bold">Office Address:</span><br> <span class="d-block mt-1">4461 Cedar Street Moro, AR 72368</span></p>
                    <p class="text-muted mt-4"><span class="font-weight-bold">Office Time:</span><br> <span class="d-block mt-1">9:00AM To 6:00PM</span></p>
                </div>

                <div class="col-md-8">
                    <form>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="fullname">Your Name</label>
                                    <input class="form-control form-control-light" type="text" id="fullname" placeholder="Name...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="emailaddress">Your Email</label>
                                    <input class="form-control form-control-light" type="email" required="" id="emailaddress" placeholder="Enter you email...">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="subject">Your Subject</label>
                                    <input class="form-control form-control-light" type="text" id="subject" placeholder="Enter subject...">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="comments">Message</label>
                                    <textarea id="comments" rows="4" class="form-control form-control-light" placeholder="Type your message here..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-12 text-right">
                                <button class="btn btn-primary">Send a Message <i class="mdi mdi-telegram ml-1"></i> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->

    <!-- START FOOTER -->
    <footer class="bg-dark py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/images/logo.png" alt="" class="logo-dark" height="18" />
                    <p class="text-white-50 mt-4">Hyper makes it easier to build better websites with
                        <br> great speed. Save hundreds of hours of design
                        <br> and development by using it.
                    </p>

                    <ul class="social-list list-inline mt-3">
                        <li class="list-inline-item text-center">
                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                        </li>
                        <li class="list-inline-item text-center">
                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                        </li>
                        <li class="list-inline-item text-center">
                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                        </li>
                        <li class="list-inline-item text-center">
                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                        </li>
                    </ul>

                </div>

                <div class="col-lg-2 mt-3 mt-lg-0">
                    <h5 class="text-white">Company</h5>

                    <ul class="list-unstyled pl-0 mb-0 mt-3">
                        <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">About Us</a></li>
                        <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Documentation</a></li>
                        <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Blog</a></li>
                        <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Affiliate Program</a></li>
                    </ul>

                </div>

                <div class="col-lg-2 mt-3 mt-lg-0">
                    <h5 class="text-white">Apps</h5>

                    <ul class="list-unstyled pl-0 mb-0 mt-3">
                        <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Ecommerce Pages</a></li>
                        <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Email</a></li>
                        <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Social Feed</a></li>
                        <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Projects</a></li>
                        <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Tasks Management</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 mt-3 mt-lg-0">
                    <h5 class="text-white">Discover</h5>

                    <ul class="list-unstyled pl-0 mb-0 mt-3">
                        <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Help Center</a></li>
                        <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Our Products</a></li>
                        <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Privacy</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-5">
                        <p class="text-white-50 mt-4 text-center mb-0">© 2018 - 2020 Hyper. Design and coded by
                            Coderthemes</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from coderthemes.com/hyper/saas/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 05:17:03 GMT -->

</html>