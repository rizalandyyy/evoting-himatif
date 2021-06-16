<div class="container-fluid">
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
                                    <th>KTM</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $x = 1 ?>
                                <?php foreach ($kandidat as $row) : ?>
                                <tr>
                                    <td><?php echo $x ?></td>
                                    <td><?php echo $row['nama_pemilih']; ?></td>
                                    <td><?php echo $row['email_pemilih']; ?></td>
                                    <td><?php echo $row['nim_pemilih']; ?></td>
                                    <td><?php echo $row['kelas_pemilih']; ?></td>
                                    <td><?php echo $row['semester_pemilih']; ?></td>
                                    <td><a href="<?php echo base_url() . 'assets/ktm/'; ?><?php echo $row['gambar_ktm']; ?>"
                                            target="_blank">Cek
                                            KTM</a></td>
                                    <td>
                                        <form action="<?php echo base_url('committee/verifikasi') ?>" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $row['id_pemilih']; ?>">
                                            <input type="hidden" name="status" value="1">
                                            <button type="submit"
                                                class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                data-toggle="tooltip" data-original-title="Aktivasi Pemilih ">
                                                Aktivasi
                                                <i class="ti-arrow-circle-down" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $x++ ?>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>