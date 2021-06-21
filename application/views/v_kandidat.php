<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    <!-- .row -->
    <div class="row">
        <!-- Column -->
        <?php foreach ($kandidat as $row) : ?>
        <div class="col-lg-6 col-xl-6 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="profile-pic m-b-20 m-t-20">
                        <img src="<?php echo base_url() . 'assets/images/'; ?><?php echo $row['gambar_kandidat'] ?>"
                            width="100" class="rounded-circle" alt="user" />
                        <h4 class="m-t-20 m-b-0"><?php echo $row['nama_kandidat'] ?></h4>
                        <a><?php echo $row['nim_kandidat'] ?></a>
                    </div>
                </div>
                <div class="p-25 border-top m-t-15">
                    <div class="row text-center">
                        <div class="col-4 border-right">
                            <a href="<?php echo base_url(); ?>committee/detail/<?php echo $row['id_kandidat']; ?>"
                                class="link d-flex align-items-center justify-content-center font-medium"><i
                                    class="mdi mdi-developer-board font-20 m-r-5"></i>Detail Kandidat</a>
                        </div>
                        <div class="col-4">
                            <a href="<?php echo base_url('committee') ?>"
                                class="link d-flex align-items-center justify-content-center font-medium"><i
                                    class="mdi mdi-message font-20 m-r-5"></i>Jumlah Pemilih</a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0)" onclick="delete_data(<?php echo $row['id_kandidat'] ?>)"
                                class="link d-flex align-items-center justify-content-center font-medium"><i
                                    class="mdi mdi-delete font-20 m-r-5"></i>Hapus Kandidat</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php endforeach ?>
    </div>
</div>

<script type="text/javascript">
function delete_data(id) {
    if (confirm('Apakah Anda yakin untuk menghapus data ini?')) {
        // ajax delete data to database
        $.ajax({
            url: "<?php echo site_url('committee/delete') ?>/" + id,
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