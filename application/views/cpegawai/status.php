<div class="container mt-3">
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary" style="border-radius: 3px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('user/beranda') ?>" style="font-family: Verdana; color: teal;">Beranda</a>
            <a class="nav-link disabled" aria-disabled="true" style="font-family: Verdana;">Status Lamaran</a>
        </div>
    </nav>


</div>

<div class="container mt-3">
    <div class="card">
        <h5 class="card-header" style="font-family: Verdana;"><i class="fa fa-info-circle"></i> <small>Status Lamaran</small></h5>
        <div class="card-body">
            <ul class="list-group">
                <?php if ($personal  == null) { ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Kelengkapan Berkas
                        <span class="badge bg-danger text-white">Belum dilengkapi</span>
                    </li>
                <?php } elseif ($pendidikan  == null) { ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Kelengkapan Berkas
                        <span class="badge bg-danger text-white">Belum dilengkapi</span>
                    </li>
                <?php } elseif ($alamat  == null) { ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Kelengkapan Berkas
                        <span class="badge bg-danger text-white">Belum dilengkapi</span>
                    </li>
                <?php } elseif ($kontak  == null) { ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Kelengkapan Berkas
                        <span class="badge bg-danger text-white">Belum dilengkapi</span>
                    </li>
                <?php } elseif ($pekerjaan  == null) { ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Kelengkapan Berkas
                        <span class="badge bg-danger text-white">Belum dilengkapi</span>
                    </li>
                <?php } elseif ($lampiran  == null) { ?>
                    <?php foreach ($lampiran as $l) { ?>
                        <?php if ($l->cv == null or $l->ktp == null or $l->ijazah == null or $l->foto == null or $l->npwp == null or $l->bpjs == null or $l->sertifikat == null or $l->kk == null) { ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Kelengkapan Berkas
                                <span class="badge bg-danger text-white">Belum dilengkapi</span>
                            </li>
                        <?php }  ?>
                    <?php } ?>
                <?php } else { ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Kelengkapan Berkas
                        <span class="badge bg-success text-white">Telah dilengkapi</span>
                    </li>
                <?php } ?>

                <?php if ($lamaran  == null) { ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pengajuan Lamaran
                        <span class="badge bg-danger text-white">Belum Dilakukan</span>
                    </li>
                <?php } else { ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pengajuan Lamaran
                        <span class="badge bg-success text-white">Telah Dilakukan | Posisi <?php foreach ($lamaran as $l) { ?>
                                <?= $l->nama_job ?>
                            <?php } ?></span>
                    </li>
                <?php } ?>


                <?php if ($penilaian == null) { ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pemeriksaan Berkas
                        <span class="badge bg-warning text-white">Belum dilakukan oleh HRD</span>
                    </li>
                <?php } else { ?>
                    <?php foreach ($penilaian as $p) { ?>
                        <?php if ($p->berkas == 'Lolos') { ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Pemeriksaan Berkas
                                <span class="badge bg-success text-white">Telah dilakukan oleh HRD</span>
                            </li>
                        <?php } else { ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Pemeriksaan Berkas
                                <span class="badge bg-danger text-white">Belum dilakukan oleh HRD</span>
                            </li>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Tes Interview
                    <span class="badge bg-warning text-white">-</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Selesai
                    <span class="badge bg-warning text-white">-</span>
                </li>
            </ul>


        </div>
    </div>
</div>