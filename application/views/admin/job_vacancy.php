    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>

        <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Job Vacancy</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">

                <?php echo $this->session->flashdata('success') ?>

                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-success">Data Lowongan</h6>
                        <div class="dropdown no-arrow">
                            <a href="<?= base_url('job-vacancies/create') ?>" class="btn btn-sm btn-success">Create Lowongan</a>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <?php if ($job == null) { ?>
                            <center>
                                <img src="<?= base_url() ?>assets/img/nod.svg" alt="" width="30%">
                                <p class="mt-2">Tidak ada data</p>
                            </center>
                        <?php } else { ?>
                            <div class="table-responsive table-card">
                                <table class="table text-nowrap mb-0 table-centered table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Gambar</th>
                                            <th>Nama Job</th>
                                            <th>Publikasi</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($job as $j) { ?>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <img src="<?= base_url() ?>upload/libs/files/<?= $j->gambar ?>" width="50px">
                                                    </div>
                                                </td>
                                                <td><?= $j->nama_job ?></td>
                                                <td><?= $j->date_created ?></td>
                                                <td>
                                                    <?php if ($j->status == 'Open') { ?>
                                                        <span class="badge bg-success text-white">Dibuka</span>
                                                    <?php } elseif ($j->status == 'Close') { ?>
                                                        <span class="badge bg-danger text-white">Ditutup</span>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if ($j->status == 'Open') { ?>
                                                        <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                        <a href="" id="btn-hapus" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>
                                                        <a href="<?= base_url('job-vacancies/close/' . $j->id_job) ?>" id="btn-tutup" class="btn btn-danger btn-sm"><i class="fa fa-times-circle"></i> Close</a>
                                                    <?php } elseif ($j->status == 'Close') { ?>
                                                        <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                        <a href="" id="btn-hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                        <a href="<?= base_url('job-vacancies/open/' . $j->id_job) ?>" id="btn-buka" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i> Open</a>
                                                    <?php } ?>
                                                </td>
                                                <!-- <td>
                                                    <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                    <a href="" id="btn-hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                </td> -->
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
    </div>
    </div>