    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Nama Pelamar : <?php foreach ($pelamar_det as $p) { ?>
                    <?= $p->nama_lengkap ?>
                <?php } ?></h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>

        <?php echo $this->session->flashdata('success') ?>

        <!-- Content Row -->
        <?php foreach ($pelamar_det as $p) { ?>
            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-4 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-success">Preview Pas Foto</h6>

                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <center>
                                <img src="<?= base_url() ?>upload/files/<?= $p->foto ?>" alt="" width="40%" style="border-style: dashed;">
                            </center>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-success">Lampiran Data Pendukung</h6>

                        </div>
                        <!-- Card Body -->
                        <div class="card-body">

                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-success">Status Pendaftaran E-Rekrutmen</h6>

                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Administrasi
                                    <?php if ($p->berkas == 'Lolos') { ?>
                                        <span class="badge bg-success text-white">Lolos Berkas</span>
                                    <?php } else { ?>
                                        <span class="badge bg-danger text-white">Belum Review</span>
                                    <?php } ?>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Wawancara
                                    <?php if ($p->nilai_interview == null) { ?>
                                        <span class="badge bg-danger text-white">Belum Wawancara</span>
                                    <?php } elseif ($p->nilai_interview >= '85') { ?>
                                        <span class="badge bg-success text-white">Lolos</span>
                                    <?php } elseif ($p->nilai_interview < '85') { ?>
                                        <span class="badge bg-warning text-white">Tidak Lolos</span>
                                    <?php } else { ?>
                                        <span class="badge bg-danger text-white">Belum Wawancara</span>
                                    <?php } ?>
                                </li>
                                <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Kesehatan
                                    <?php if ($p->tes_kesehatan == null) { ?>
                                        <span class="badge bg-danger text-white">Belum Tes Sehat</span>
                                    <?php } elseif ($p->tes_kesehatan == 'Lolos') { ?>
                                        <span class="badge bg-success text-white">Lolos</span>
                                    <?php } elseif ($p->tes_kesehatan == 'Tidak Lolos') { ?>
                                        <span class="badge bg-warning text-white">Tidak Lolos</span>
                                    <?php } else { ?>
                                        <span class="badge bg-danger text-white">Belum Tes Sehat</span>
                                    <?php } ?>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-success">Data Pribadi / Personal</h6>

                        </div>
                        <!-- Card Body -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class='table table-bordered table-hover'>
                                    <tr>
                                        <th class=' danger'>Nama Lengkap</th>
                                        <td><?= $p->nama_lengkap ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Tempat/Tanggal Lahir</th>
                                        <td><?= $p->tempat_lahir ?>, <?= $p->tgl_lahir ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Jenis Kelamin</th>
                                        <td><?= $p->jenis_kelamin ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Agama</th>
                                        <td><?= $p->agama ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Statu Pernikahan</th>
                                        <td><?= $p->status_kawin ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Suku</th>
                                        <td><?= $p->suku ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Tinggi</th>
                                        <td><?= $p->tinggi ?> cm</td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Berat</th>
                                        <td><?= $p->berat ?> kg</td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Golongan Darah</th>
                                        <td><?= $p->gol_darah ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>No NPJS</th>
                                        <td><?= $p->no_bpjs ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>No BPJS Ketenagakerjaan</th>
                                        <td><?= $p->no_tenaga ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>NPWP</th>
                                        <td><?= $p->npwp ?></td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class='card shadow mb-4'>
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-success">Data Alamat</h6>

                        </div>
                        <!-- Card Body -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class='table table-bordered table-hover'>
                                    <tr>
                                        <th class='danger'>Nama Lengkap</th>
                                        <td><?= $p->nama_lengkap ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Tempat/Tanggal Lahir</th>
                                        <td><?= $p->tempat_lahir ?>, <?= $p->tgl_lahir ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Jenis Kelamin</th>
                                        <td><?= $p->jenis_kelamin ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Agama</th>
                                        <td><?= $p->agama ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Statu Pernikahan</th>
                                        <td><?= $p->status_kawin ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Suku</th>
                                        <td><?= $p->suku ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Tinggi</th>
                                        <td><?= $p->tinggi ?> cm</td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Berat</th>
                                        <td><?= $p->berat ?> kg</td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Golongan Darah</th>
                                        <td><?= $p->gol_darah ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>No NPJS</th>
                                        <td><?= $p->no_bpjs ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>No BPJS Ketenagakerjaan</th>
                                        <td><?= $p->no_tenaga ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>NPWP</th>
                                        <td><?= $p->npwp ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-success">Data Kontak</h6>

                        </div>
                        <!-- Card Body -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class='table table-bordered table-hover'>
                                    <tr>
                                        <th class=' danger'>Nama Lengkap</th>
                                        <td><?= $p->nama_lengkap ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Tempat/Tanggal Lahir</th>
                                        <td><?= $p->tempat_lahir ?>, <?= $p->tgl_lahir ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Jenis Kelamin</th>
                                        <td><?= $p->jenis_kelamin ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Agama</th>
                                        <td><?= $p->agama ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Statu Pernikahan</th>
                                        <td><?= $p->status_kawin ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Suku</th>
                                        <td><?= $p->suku ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Tinggi</th>
                                        <td><?= $p->tinggi ?> cm</td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Berat</th>
                                        <td><?= $p->berat ?> kg</td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Golongan Darah</th>
                                        <td><?= $p->gol_darah ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>No NPJS</th>
                                        <td><?= $p->no_bpjs ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>No BPJS Ketenagakerjaan</th>
                                        <td><?= $p->no_tenaga ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>NPWP</th>
                                        <td><?= $p->npwp ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-success">Data Riwayat Pendidikan</h6>

                        </div>
                        <!-- Card Body -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class='table table-bordered table-hover'>
                                    <tr>
                                        <th class=' danger'>Nama Lengkap</th>
                                        <td><?= $p->nama_lengkap ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Tempat/Tanggal Lahir</th>
                                        <td><?= $p->tempat_lahir ?>, <?= $p->tgl_lahir ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Jenis Kelamin</th>
                                        <td><?= $p->jenis_kelamin ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Agama</th>
                                        <td><?= $p->agama ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Statu Pernikahan</th>
                                        <td><?= $p->status_kawin ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Suku</th>
                                        <td><?= $p->suku ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Tinggi</th>
                                        <td><?= $p->tinggi ?> cm</td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Berat</th>
                                        <td><?= $p->berat ?> kg</td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Golongan Darah</th>
                                        <td><?= $p->gol_darah ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>No NPJS</th>
                                        <td><?= $p->no_bpjs ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>No BPJS Ketenagakerjaan</th>
                                        <td><?= $p->no_tenaga ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>NPWP</th>
                                        <td><?= $p->npwp ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-success">Data Riwayat Pekerjaan</h6>

                        </div>
                        <!-- Card Body -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class='table table-bordered table-hover'>
                                    <tr>
                                        <th class=' danger'>Nama Lengkap</th>
                                        <td><?= $p->nama_lengkap ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Tempat/Tanggal Lahir</th>
                                        <td><?= $p->tempat_lahir ?>, <?= $p->tgl_lahir ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Jenis Kelamin</th>
                                        <td><?= $p->jenis_kelamin ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Agama</th>
                                        <td><?= $p->agama ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Statu Pernikahan</th>
                                        <td><?= $p->status_kawin ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Suku</th>
                                        <td><?= $p->suku ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Tinggi</th>
                                        <td><?= $p->tinggi ?> cm</td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Berat</th>
                                        <td><?= $p->berat ?> kg</td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>Golongan Darah</th>
                                        <td><?= $p->gol_darah ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>No NPJS</th>
                                        <td><?= $p->no_bpjs ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>No BPJS Ketenagakerjaan</th>
                                        <td><?= $p->no_tenaga ?></td>
                                    </tr>
                                    <tr>
                                        <th class='danger'>NPWP</th>
                                        <td><?= $p->npwp ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading"><strong>Harap diperhatikan!</strong></h4>
                    <p style="text-align: justify;">Sebagai seorang HRD di PT BMI Makassar memiliki tanggung jawab dalam proses Rekrutmen dan Seleksi calon karyawan PT BMI Makassar. Benar bahwa Saudara(i) <b>NAMA</b> telah melakukan pemeriksaan kelayakan bagi calon tersebut di atas untuk lanjut ke tahap selanjutnya. <br>Terima kasih atas kerja keras anda. </p>
                    <hr>
                    <p class="mb-0">
                        <button type="button" class="btn btn-success btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#acc"> <i class="fas fa-edit"></i> Input Nilai Tes Wawancara</button>
                        <a href="<?= base_url('interview/detail-interview/' . $p->id_job) ?>" class="btn btn-danger btn-sm mb-3"> <i class="fas fa-arrow-left"></i> Batal</a>
                        <!-- <button type="button" class="btn btn-danger btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#gagal"> <i class="fas fa-times-circle"></i> Belum memenuhi kualifikasi</button> -->
                    </p>
                </div>

                <!-- MODAL BERKAS -->
                <?php if ($p->status_lamaran == 'Berkas') { ?>
                    <?php foreach ($jadwal_interview as $ji) { ?>


                        <!-- Modal -->
                        <div class="modal fade" id="acc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="accLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="<?= base_url('validasi/acc-interview') ?>" method="post">
                                        <div class="modal-header">
                                            <h3 class="modal-title fs-5" id="staticBackdropLabel">Yakin dengan pilihan ini?</h3>
                                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" class="form-control" name="id_akun_pelamar" value="<?= $p->id_akun_pelamar ?>" readonly>
                                            <input type="hidden" class="form-control" name="id_job" value="<?= $p->id_job ?>" readonly>
                                            <input type="hidden" class="form-control" name="nama_lengkap" value="<?= $p->nama_lengkap ?>" readonly>
                                            <input type="hidden" class="form-control" name="no_wa" value="<?= $p->no_wa ?>" readonly>
                                            <input type="hidden" class="form-control" name="alamat_email" value="<?= $p->alamat_email ?>" readonly>
                                            <input type="hidden" class="form-control" name="status_lamaran" value="Wawancara" readonly>
                                            <input type="hidden" class="form-control" name="tanggal_jadwal" value="<?= $ji->tanggal_jadwal ?>" readonly>
                                            <input type="hidden" class="form-control" name="jam_jadwal" value="<?= $ji->jam_jadwal ?>" readonly>
                                            <label for="">Nilai Interview / Wawancara <span class="text-danger"><b>*</b></span></label>
                                            <input type="hidden" class="form-control" name="berkas" value="Lolos" readonly>
                                            <input type="text" class="form-control" maxlength="2" onkeypress="return hanyaAngka(event)" name="nilai_interview" placeholder="Nilai Interview / Wawancara" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                    <!-- Modal -->
                    <div class="modal fade" id="gagal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="gagalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?= base_url('validasi/no-acc-berkas') ?>" method="post">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5" id="staticBackdropLabel">Yakin dengan pilihan ini?</h3>
                                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" class="form-control" name="id_akun_pelamar" value="<?= $p->id_akun_pelamar ?>" readonly>
                                        <input type="hidden" class="form-control" name="no_wa" value="<?= $p->no_wa ?>" readonly>
                                        <input type="hidden" class="form-control" name="alamat_email" value="<?= $p->alamat_email ?>" readonly>
                                        <input type="hidden" class="form-control" name="status_lamaran" value="Tidak Lolos" readonly>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success btn-sm">Setujui</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                <?php } ?>
                <!-- END BERKAS -->



            <?php } ?>


            </div>
    </div>