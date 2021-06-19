    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Login Pemilih</h2>
                    <ol>
                        <li><a href="<?php echo base_url('dashboard') ?>">Beranda</a></li>
                        <li>Login Pemilih</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>LOGIN PEMILIH</h2>
                </div>

                <div class="row">

                    <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="<?php echo base_url('login/proses') ?>" method="post"
                            enctype="multipart/form-data" class="">

                            <div class="form-group">
                                <input required type="text" name="username" class="form-control" id="username"
                                    placeholder="Username" data-rule="minlen:6"
                                    data-msg="Mohon di isi lebih dari 6 karakter" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input required type="password" name="password" class="form-control" id="password"
                                    placeholder="Password" data-rule="minlen:8"
                                    data-msg="Mohon di isi lebih dari 8 karakter" />
                                <div class="validate"></div>
                            </div>
                            <?php if (isset($wrong)) {
                                echo "<div class='error'>$wrong </div>";
                            } ?>
                            <div class="text-center"><button class="btn btn-primary" type="submit">Login</button>
                                <br>
                                <br>
                                <span>Belum punya akun? <a href="<?php echo base_url('registrasi') ?>">Daftar</a></span>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

        <br>
        <br>
        <br>
        <br>
        <br>

    </main><!-- End #main -->