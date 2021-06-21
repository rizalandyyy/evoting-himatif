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
                                    <th>Divisi</th>
                                    <th>Username</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $x = 1 ?>
                                <?php foreach ($panitia as $row) : ?>
                                <tr>
                                    <td><?php echo $x ?></td>
                                    <td><?php echo $row['nama_panitia']; ?></td>
                                    <td><?php echo $row['email_panitia']; ?></td>
                                    <td><?php echo $row['divisi_panitia']; ?></td>
                                    <td><?php echo $row['username_panitia']; ?></td>
                                    <td>
                                        <form action="<?php echo base_url('admin/unverifikasi') ?>" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $row['id_panitia']; ?>">
                                            <input type="hidden" name="status" value="0">
                                            <button type="submit"
                                                class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                data-toggle="tooltip" data-original-title="Rejected">
                                                Rejected
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