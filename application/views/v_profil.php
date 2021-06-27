<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-body">
                <h4 class="card-title">Default Forms</h4>
                <h5 class="card-subtitle"> Edit Profil </h5>
                <?php foreach ($panitia as $u) { ?>
                <form class="form-horizontal mt-4" action="<?php echo base_url('committee/update') ?>" method="POST"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" required class="form-control" name="nama"
                            value="<?php echo $u->nama_panitia ?>">
                        <input type="hidden" class="form-control" name="id"
                            value="<?php echo $this->session->userdata('id') ?>">
                    </div>
                    <div class="form-group">
                        <label>Divisi</label>
                        <input type="text" required class="form-control" name="divisi"
                            value="<?php echo $u->divisi_panitia ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" required class="form-control" name="email"
                            value="<?php echo $u->email_panitia ?>">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" required class="form-control" name="username"
                            value="<?php echo $u->username_panitia ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" required class="form-control" name="password"
                            value="<?php echo $u->password_panitia ?>">
                    </div>
                    <div class="form-actions">
                        <div class="card-body justify-content-end">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                Save</button>
                        </div>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>