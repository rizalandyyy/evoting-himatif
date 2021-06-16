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
                                        <a href="javascript:void(0)"
                                            onclick="delete_data(<?php echo $row['id_pemilih'] ?>)">
                                            <button type="submit"
                                                class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                data-toggle="tooltip" data-original-title="Hapus">
                                                Hapus
                                                <i class="ti-close" aria-hidden="true"></i>
                                            </button>
                                        </a>
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

<script type="text/javascript">
function delete_data(id) {
    if (confirm('Apakah Anda yakin untuk menghapus data ini?')) {
        // ajax delete data to database
        $.ajax({
            url: "<?php echo site_url('committee/drop') ?>/" + id,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                location.reload();
                return false;
            },
            error: function(jqXHR, textStatus, errorThrown) {
                location.reload();
                return false;
            }
        });

    }
}
</script>