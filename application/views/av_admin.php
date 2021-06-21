<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <div class="card-group">
        <!-- Column -->
        <div class="card">
            <div class="card-body text-center">
                <h4 class="text-center text-info">Total Pemilih Sudah Memilih</h4>
                <h2><?php echo $sudahvoting ?></h2>
                <div class="row p-t-10 p-b-10">
                    <!-- Column -->
                    <div class="col text-center align-self-center">
                        <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20">
                            <i class="display-6 mdi mdi-account-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body text-center">
                <h4 class="text-center text-danger">Total Pemilih Belum Memilih</h4>
                <h2><?php echo $belumvoting ?></h2>
                <div class="row p-t-10 p-b-10">
                    <!-- Column -->
                    <div class="col text-center align-self-center">
                        <div data-label="20%" class="css-bar m-b-0 css-bar-danger css-bar-20">
                            <i class="display-6 mdi mdi-star-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- Sales Summery -->
    <!-- ============================================================== -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Voting</h4>
                    <div class="row m-t-40">
                        <!-- Column -->
                        <?php foreach ($kandidat as $row) : ?>
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-dark text-center">
                                    <h1 class="font-light text-white"><?php echo $row['total_terpilih'] ?></h1>
                                    <h6 class="text-white" style="text-transform: uppercase;">Kandidat 1 |
                                        <?php echo $row['nama_kandidat'] ?></h6>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!-- Column -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-12 col-xl-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List Pemilih</h4>

                    <div class="table-responsive">
                        <table id="file_export" class="table table-bordered nowrap display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Nim</th>
                                    <th>Kelas</th>
                                    <th>Semester</th>
                                    <th>Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $x = 1 ?>
                                <?php foreach ($pemilih as $row) : ?>
                                <tr>
                                    <td><?php echo $x ?></td>
                                    <td><?php echo $row->nama_pemilih ?></td>
                                    <td><?php echo $row->email_pemilih ?></td>
                                    <td><?php echo $row->nim_pemilih ?></td>
                                    <td><?php echo $row->kelas_pemilih ?></td>
                                    <td><?php echo $row->semester_pemilih ?></td>
                                    <td><?php echo $row->nama_kandidat ?></td>
                                </tr>
                                <?php $x++ ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ============================================================== -->
    <!-- Table -->
    <!-- ============================================================== -->
</div>