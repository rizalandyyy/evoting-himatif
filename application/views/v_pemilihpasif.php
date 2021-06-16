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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kandidat as $row) : ?>
                                <tr>
                                    <td>

                                        Genelia
                                        Deshmukh
                                    </td>
                                    <td>genelia@gmail.com</td>
                                    <td>12344567898765</td>
                                    <td>+123 456 789</td>
                                    <td>
                                        <span class="label label-danger">Designer</span>
                                    </td>
                                    <td>12-10-2014</td>
                                    <td>
                                        <a href="">Aktivasi
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                data-toggle="tooltip" data-original-title="Update ">
                                                <i class="ti-arrow-circle-down" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>