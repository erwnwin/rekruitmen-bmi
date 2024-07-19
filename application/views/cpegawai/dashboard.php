<!-- slider -->
<div class="container mt-3">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url() ?>assets/depan/assets/img/01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url() ?>assets/depan/assets/img/02.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url() ?>assets/depan/assets/img/03.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container mt-3">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card text-center">
                <a href="<?= base_url('user/info') ?>">
                    <div class="card-body">

                        <img src="<?= base_url() ?>assets/lib/info.png" alt="" style="width: 45%;">

                    </div>
                </a>
                <div class="card-footer text-body-secondary">
                    <center>
                        <p></p>
                        <small class="text-body-secondary mt-2 mb-4" style="font-family: Verdana; font-weight: lighter;">Pengumuman Rekrutmen</small>
                        <p></p>
                    </center>
                </div>
            </div>

        </div>

        <div class="col">
            <div class="card text-center">
                <a href="<?= base_url('user/job-vacancy') ?>">
                    <div class="card-body">
                        <img src="<?= base_url() ?>assets/lib/job.png" alt="" style="width: 45%;">
                    </div>
                </a>
                <div class="card-footer text-body-secondary">
                    <center>
                        <p></p>
                        <small class="text-body-secondary mt-4 mb-4" style="font-family: Verdana; font-weight: lighter;">Lowongan Tersedia</small>
                        <p></p>
                    </center>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card text-center">
                <a href="<?= base_url('user/curriculum-vitae') ?>">
                    <div class="card-body">
                        <img src="<?= base_url() ?>assets/lib/cv.png" alt="" style="width: 45%;">
                    </div>
                </a>
                <div class="card-footer text-body-secondary">
                    <center>

                        <small class="text-body-secondary mt-4" style="font-family: Verdana; font-weight: lighter; margin-bottom: 4px;">Curriculum Vitae : <?=
                                                                                                                                                            $this->session->userdata('nama_lengkap');
                                                                                                                                                            ?></small>

                        <?php if ($personal  == null) { ?>
                            <small style="font-size: 12px;"> <span class="badge bg-danger"><i class="fa fa-times-circle"></i> Data saudara(i) belum lengkap</span></small>
                        <?php } elseif ($pendidikan  == null) { ?>
                            <small style="font-size: 12px;"> <span class="badge bg-danger"><i class="fa fa-times-circle"></i> Data saudara(i) belum lengkap</span></small>
                        <?php } elseif ($alamat  == null) { ?>
                            <small style="font-size: 12px;"> <span class="badge bg-danger"><i class="fa fa-times-circle"></i> Data saudara(i) belum lengkap</span></small>
                        <?php } elseif ($kontak  == null) { ?>
                            <small style="font-size: 12px;"> <span class="badge bg-danger"><i class="fa fa-times-circle"></i> Data saudara(i) belum lengkap</span></small>
                        <?php } elseif ($pekerjaan  == null) { ?>
                            <small style="font-size: 12px;"> <span class="badge bg-danger"><i class="fa fa-times-circle"></i> Data saudara(i) belum lengkap</span></small>
                        <?php } elseif ($lampiran  == null) { ?>
                            <?php foreach ($lampiran as $l) { ?>
                                <?php if ($l->cv == null or $l->ktp == null or $l->ijazah == null or $l->foto == null or $l->npwp == null or $l->bpjs == null or $l->sertifikat == null or $l->kk == null) { ?>
                                    <small style="font-size: 12px;"> <span class="badge bg-danger"><i class="fa fa-times-circle"></i> Data saudara(i) belum lengkap</span></small>
                                <?php }  ?>
                            <?php } ?>
                        <?php } else { ?>
                            <small style="font-size: 12px;"> <span class="badge bg-success"><i class="fa fa-check"></i> Data saudara(i) lengkap</span></small>
                        <?php } ?>
                        <p></p>
                    </center>

                </div>
            </div>
        </div>



        <div class="col">
            <div class="card text-center">
                <a href="<?= base_url('user/status') ?>">
                    <div class="card-body">
                        <img src="<?= base_url() ?>assets/lib/status.png" alt="" style="width: 45%;">
                    </div>
                </a>
                <div class="card-footer text-body-secondary">
                    <center>
                        <p></p>
                        <small class="text-body-secondary mt-4 mb-4" style="font-family: Verdana; font-weight: lighter;">Status Lamaran</small>
                        <p></p>
                    </center>
                </div>
            </div>
        </div>


    </div>
</div>