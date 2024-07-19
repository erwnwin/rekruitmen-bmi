    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pengumuman</h1>
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
                        <h6 class="m-0 font-weight-bold text-success">Data Pengumuman</h6>
                        <div class="dropdown no-arrow">
                            <a href="<?= base_url('pengumuman/create') ?>" class="btn btn-sm btn-success">Create Pengumuman</a>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <?php if ($pengumuman == null) { ?>
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
                                            <th>Judul</th>
                                            <th>Deksripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pengumuman as $p) { ?>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <img src="<?= base_url() ?>upload/libs/files/<?= $p->img_upload ?>" width="50px">
                                                    </div>
                                                </td>
                                                <td><b><?= $p->judul ?></b></td>
                                                <td><?= substr($p->deskripsi, 0, 30) ?>....<a href="<?= base_url('pengumuman/read-more/' . $p->id_pengumuman) ?>" target="_blank">[Baca Selengkapnya]</a></td>

                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                    <a href="" id="btn-hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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