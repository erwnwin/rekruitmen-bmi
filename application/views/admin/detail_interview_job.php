    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
        <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pelamar</h1>
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
                        <h6 class="m-0 font-weight-bold text-success">Data Pelamar</h6>
                        <div class="dropdown no-arrow">
                            <a href="#" class="btn btn-sm btn-success"><i class="fas fa-filter"></i> Filter Data</a>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <?php if ($semua_pelamar == null) { ?>
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
                                            <th>Nama Lengkap Pelamar</th>
                                            <th>Jenjang/Lulusan</th>
                                            <th>Status/Posisi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($semua_pelamar as $j) { ?>
                                            <tr>
                                                <td>
                                                    <?= $no++ ?>
                                                </td>
                                                <td><?= $j->nama_lengkap ?></td>
                                                <td><?= $j->jenjang ?> / <?= $j->jurusan ?></td>
                                                <td><?= $j->nama_job ?></td>
                                                <td>
                                                    <a href="<?= base_url('interview/create-score/' . $j->id_akun_pelamar) ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i> Berikan Nilai Interview</a>
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
    </div>
    </div>