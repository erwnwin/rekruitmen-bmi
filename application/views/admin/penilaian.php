    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Proses Interview</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">

                <?php foreach ($job as $j) { ?>
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-success">Pelamar : <?= $j->nama_job ?></h6>
                            <div class="dropdown no-arrow">
                                <a href="<?= base_url('interview/detail-interview/' . $j->id_job) ?>" class="btn btn-sm btn-success">Lihat pelamar yang mengikuti interview</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>
    </div>
    </div>