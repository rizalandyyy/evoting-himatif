<!-- ======= Hero Section ======= -->

<br>
<br>
<br>
<br>
<br>
<main id="main">
    <!-- ======= Team Section ======= -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">
            <?php foreach ($kandidat as $u) { ?>
            <div class="row">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start"
                    data-aos="fade-right" data-aos-delay="150">
                    <img style="width: 450px; height: 450px"
                        src="<?php echo base_url() . 'assets/images/'; ?><?php echo $u->gambar_kandidat ?>" alt=""
                        class="img-fluid">
                </div>

                <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                    <form method="POST" action="<?php echo base_url('pemilihan/vote') ?>">
                        <div class="content d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-12 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <p>Nama Kandidat</p>
                                        <span style="font-size: 24px;"><?php echo $u->nama_kandidat ?></span>
                                    </div>
                                </div>

                                <div class="col-md-12 d-md-flex align-items-md-stretch">
                                    <div class="count-box" style="padding-top: unset">
                                        <p>NIM</p>
                                        <span style="font-size: 24px;"><?php echo $u->nim_kandidat ?></span>
                                    </div>
                                </div>

                                <div class="col-md-12 d-md-flex align-items-md-stretch">
                                    <div class="count-box" style="padding-top: unset">
                                        <p>Visi</p>
                                        <span style="font-size: 24px;"><?php echo $u->visi_kandidat ?></span>
                                    </div>
                                </div>

                                <div class="col-md-12 d-md-flex align-items-md-stretch">
                                    <div class="count-box" style="padding-top: unset">
                                        <p>Misi</p>
                                        <span style="font-size: 24px;"><?php echo $u->misi_kandidat ?></span>
                                    </div>
                                </div>

                                <div class="col-md-12 d-md-flex align-items-md-stretch">
                                    <div class="count-box" style="padding-top: unset">
                                        <p>Pengalaman Organisasi</p>
                                        <span style="font-size: 24px;"><?php echo $u->pengalaman_organisasi ?></span>
                                    </div>
                                </div>

                                <div class="col-md-12 d-md-flex align-items-md-stretch">
                                    <div class="count-box" style="padding-top: unset; padding-bottom: 50px">
                                        <p>Pengalaman Kepanitiaan</p>
                                        <span style="font-size: 24px;"><?php echo $u->pengalaman_kepanitiaan ?></span>
                                    </div>
                                </div>

                                <div class="col-md-12 d-md-flex align-items-md-stretch">
                                    <br>
                                    <h6><button type="submit" style="background: green;
    color: #fff;
    border-radius: 50px;
    margin: 0 0 0 50px;
    padding: 10px 25px;"> <span>VOTE!</span></button></h6>
                                </div>

                                <input type="hidden" name="id_kandidat" value="<?php echo $u->id_kandidat ?>">
                                <input type="hidden" name="id_pemilih"
                                    value="<?php echo $this->session->userdata('id') ?>">

                            </div>
                        </div><!-- End .content-->
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
    </section><!-- End Counts Section -->
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