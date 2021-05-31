<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Registrasi Pemilih</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url() . 'assets/'; ?>img/favicon.png" rel="icon">
    <link href="<?php echo base_url() . 'assets/'; ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() . 'assets/'; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/'; ?>vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/'; ?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/'; ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/'; ?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/'; ?>vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/'; ?>vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() . 'assets/'; ?>css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Vesperr - v2.3.1
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="<?php echo base_url('dashboard') ?>"><span>E-VOTING</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="<?php echo base_url('dashboard') ?>">Beranda</a>
                    <li><a href="<?php echo base_url('dashboard') ?>#about">Tentang</a></li>
                    <li><a href="<?php echo base_url('dashboard') ?>#contact">Kontak</a></li>
                    <li><a href="<?php echo base_url('panitia/login') ?>">Login Panitia</a></li>

                    <li class="get-started"><a href="<?php echo base_url('login') ?>"> Mulai Voting</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Pendaftaran Pemilih</h2>
                    <ol>
                        <li><a href="<?php echo base_url('dashboard') ?>">Beranda</a></li>
                        <li>Pendaftaran Pemilih</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>REGISTRASI PEMILIH</h2>
                </div>

                <div class="row">

                    <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="<?php echo base_url('registrasi/proses') ?>" method="post"
                            enctype="multipart/form-data" class="">
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" id="name" data-rule="minlen:5"
                                    placeholder="Nama Lengkap" data-msg="Mohon di isi Nama Lengkap dengan benar" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nim" class="form-control" id="nim" data-rule="minlen:15"
                                    placeholder="NIM" data-msg="Mohon di isi NIM dengan benar" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <select class="form-select" name="kelas" aria-label=".form-select-lg example">
                                    <option value="" aria-readonly="true">- Pilih Kelas -</option>
                                    <option value="TIK A">TIK A</option>
                                    <option value="TIK B">TIK B</option>
                                    <option value="TIK C">TIK C</option>
                                </select>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <select class="form-select" name="semester" aria-label=".form-select-lg example">
                                    <option value="" aria-readonly="true">- Semester -</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email Univ. Brawijaya (cont: example@ub.ac.id)" data-rule="email"
                                    data-msg="Mohon di isi alamat Email dengan benar" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="alamat" class="form-control"
                                    data-msg="Mohon di isi alamat dengan benar" data-rule="minlen:5" id="alamat"
                                    placeholder="Alamat" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nomorhp" class="form-control"
                                    data-msg="Mohon di isi nomor HP/WA dengan benar" data-rule="minlen:10" id="nomorhp"
                                    placeholder="Nomor Handphone" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Username" data-rule="minlen:6"
                                    data-msg="Mohon di isi lebih dari 6 karakter" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password" data-rule="minlen:8"
                                    data-msg="Mohon di isi lebih dari 8 karakter" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="">Upload Foto KTM</label>
                                <input type="file" name="foto_ktm" class="form-control" id="foto_ktm" required />
                                <div class="validate"></div>
                            </div>
                            <div class="text-center"><button class="btn btn-primary" type="submit">Register</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>@WilkyPutra</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
                        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/php-email-form/validate.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/venobox/venobox.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() . 'assets/'; ?>js/main.js"></script>

</body>

</html>