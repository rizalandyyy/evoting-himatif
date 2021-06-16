<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Make your Campign! - E-Voting</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url() . 'assets/'; ?>img/favicon.png" rel="icon">
    <link href="<?php echo base_url() . 'assets/'; ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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

                <li class="get-started"><a href="<?php echo base_url('pemilihan') ?>"> Mulai Voting</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->

<br>
<br>
<br>
<br>
<br>
<main id="main">
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Kandidat Voting</h2>
                <p>Pilihlah kandidat di bawah dengan sungguh-sungguh sesuai hati nurani Anda</p>
            </div>

            <div class="row">
                <?php foreach ($kandidat as $row) : ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="<?php echo base_url() . 'assets/images/'; ?><?php echo $row['gambar_kandidat'] ?>"
                                class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4><a href="<?php echo base_url('') ?>"><?php echo $row['nama_kandidat'] ?></a></h4>
                            <span><?php echo $row['nim_kandidat'] ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Kontak Kami</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-about">
                        <h3>E-Voting</h3>
                        <p>Salah satu alternatif untuk menyampaikan hak pilihmu!</p>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="info">
                        <div>
                            <i class="ri-map-pin-line"></i>
                            <p>Jl. Pangeran Diponegoro<br>Malang, Jawa Timur, Indonesia</p>
                        </div>

                        <div>
                            <i class="ri-mail-send-line"></i>
                            <p>Wilkyputra@gmail.com</p>
                        </div>

                        <div>
                            <i class="ri-phone-line"></i>
                            <p>+62 8121 6588 01</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama"
                                data-rule="minlen:4" data-msg="Mohon di isi" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                data-rule="email" data-msg="Mohon di isi" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek"
                                data-rule="minlen:4" data-msg="Mohon di isi lebih dari 8 karakter" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="Mohon beri pesan untuk kami" placeholder="Pesan"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
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