<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-body">
                <h4 class="card-title">Default Forms</h4>
                <h5 class="card-subtitle"> Tambah Kandidat Voting </h5>
                <form class="form-horizontal mt-4" action="<?php echo base_url('committee/proses') ?>" method="post"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nomor Urut</label>
                        <input type="text" class="form-control" name="nourut" placeholder="Nomor Urut">
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempatlahir" placeholder="Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggallahir" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <input type="text" class="form-control" name="agama" placeholder="Agama">
                    </div>
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" class="form-control" name="nim" placeholder="NIM">
                    </div>
                    <div class="form-group">
                        <label>Visi</label>
                        <input type="text" class="form-control" name="visi" placeholder="Visi Kandidat">
                    </div>
                    <div class="form-group">
                        <label>Misi</label>
                        <input type="text" class="form-control" name="misi" placeholder="Misi Kandidat">
                    </div>
                    <div class="form-group">
                        <label>Pengalaman Organisasi</label>
                        <input type="text" class="form-control" name="pengalaman" placeholder="Pengalaman Organisasi">
                    </div>
                    <div class="form-group">
                        <label>Pengalaman Kepanitiaan</label>
                        <input type="text" class="form-control" name="kepanitiaan" placeholder="Pengalaman Kepanitiaan">
                        <input type="hidden" class="form-control" name="total" value="0"
                            placeholder="Pengalaman Kepanitiaan">
                    </div>
                    <div class="form-group">
                        <label>Upload Gambar Kandidat</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="filefoto" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="card-body justify-content-end">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>