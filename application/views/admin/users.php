    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
        <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Hak Akses | Pengguna</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-success">Data Pengguna</h6>
                        <div class="dropdown no-arrow">
                            <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#act">Create Pengguna</a>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <?php if ($pengguna == null) { ?>
                            <center>
                                <img src="<?= base_url() ?>assets/img/nod.svg" alt="" width="30%">
                                <p class="mt-2">Tidak ada data</p>
                            </center>
                        <?php } else { ?>
                            <div class="table-responsive table-card">
                                <table class="table text-nowrap mb-0 table-centered table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Pengguna</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pengguna as $j) { ?>
                                            <tr>
                                                <td>
                                                    #
                                                </td>
                                                <td><?= $j->nama_pengguna ?></td>
                                                <td><?= $j->email ?></td>
                                                <td>******</td>
                                                <td>

                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal fade" id="act" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="accLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="<?= base_url('users/act') ?>" method="post">
                        <div class="modal-header">
                            <h3 class="modal-title fs-5" id="staticBackdropLabel">Form Input Users</h3>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                            <label for="">Nama Pengguna <span class="text-danger"><b>*</b></span></label>
                            <input type="hidden" class="form-control" name="role_id" value="1" required>
                            <input type="hidden" class="form-control" name="is_active" value="1" required>
                            <input type="text" class="form-control mb-3" name="nama_pengguna" placeholder="Masukkan nama pengguna" required>
                            <label for="">Username <span class="text-danger"><b>*</b></span></label>
                            <input type="text" class="form-control mb-3" name="email" placeholder="Masukkan alamat email" required>
                            <label for="">Password <span class="text-danger"><b>*</b></span></label>
                            <input type="text" class="form-control mb-3" name="password" placeholder="Masukkan password" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>