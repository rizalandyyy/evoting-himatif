<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <?php foreach ($kandidat as $u) { ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form class="form-horizontal">
                    <div class="form-body">
                        <div class="card-body">
                            <h4 class="card-title">No Urut: <?php echo $u->no_urut ?></h4>
                        </div>
                        <hr class="m-t-0 m-b-40">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Nama Kandidat:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> <?php echo $u->nama_kandidat ?> </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Tempat Lahir:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> <?php echo $u->tempat_lahir ?> </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Tanggal Lahir:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> <?php echo $u->tanggal_lahir ?> </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Agama:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> <?php echo $u->agama_kandidat ?> </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">NIM:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> <?php echo $u->nim_kandidat ?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <hr class="m-t-0 m-b-40">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Visi:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> <?php echo $u->visi_kandidat ?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Misi:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> <?php echo $u->misi_kandidat ?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Pengalaman Organisasi:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> <?php echo $u->pengalaman_organisasi ?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Pengalaman Kepanitiaan:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> <?php echo $u->pengalaman_kepanitiaan ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-actions">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <a href="<?php echo base_url('admin/kandidat') ?>">
                                                    <button type="button" class="btn btn-dark">Kembali</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>