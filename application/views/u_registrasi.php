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
                                <input type="text" required name="nama" class="form-control" id="name"
                                    data-rule="minlen:5" placeholder="Nama Lengkap"
                                    data-msg="Mohon di isi Nama Lengkap dengan benar" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" required name="nim" class="form-control" id="nim"
                                    data-rule="minlen:15" placeholder="NIM" data-msg="Mohon di isi NIM dengan benar" />
                                <div class="validate"></div>
                                <?php if (isset($wrong)) {
                                    echo "<div class='error' style='color:red'>$wrong </div>";
                                } ?>
                            </div>
                            <div class="form-group">
                                <select class="form-select" required name="kelas" aria-label=".form-select-lg example">
                                    <option value="" aria-readonly="true">- Pilih Kelas -</option>
                                    <option value="TIK A">TIK A</option>
                                    <option value="TIK B">TIK B</option>
                                    <option value="TIK C">TIK C</option>
                                </select>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <select class="form-select" required name="semester"
                                    aria-label=".form-select-lg example">
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
                                <input type="email" required class="form-control" name="email" id="email"
                                    placeholder="Email Univ. Brawijaya (cont: example@ub.ac.id)" data-rule="email"
                                    data-msg="Mohon di isi alamat Email dengan benar" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" required name="alamat" class="form-control"
                                    data-msg="Mohon di isi alamat dengan benar" data-rule="minlen:5" id="alamat"
                                    placeholder="Alamat" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" required name="nomorhp" class="form-control"
                                    data-msg="Mohon di isi nomor HP/WA dengan benar" data-rule="minlen:10" id="nomorhp"
                                    placeholder="Nomor Handphone" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" required name="username" class="form-control" id="username"
                                    placeholder="Username" data-rule="minlen:6"
                                    data-msg="Mohon di isi lebih dari 6 karakter" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" required name="password" class="form-control" id="password"
                                    placeholder="Password" data-rule="minlen:8"
                                    data-msg="Mohon di isi lebih dari 8 karakter" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="">Upload Foto KTM</label>
                                <input type="file" required name="foto_ktm" class="form-control" id="foto_ktm"
                                    required />
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