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
                            <h4><a
                                    href="<?php echo base_url(); ?>pemilihan/detail/<?php echo $row['id_kandidat']; ?>"><?php echo $row['nama_kandidat'] ?></a>
                            </h4>
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