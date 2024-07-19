<div class="container mt-3">
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary" style="border-radius: 3px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('user/beranda') ?>" style="font-family: Verdana; color: teal;">Beranda</a>
            <a class="nav-link disabled" aria-disabled="true" style="font-family: Verdana;">Lowongan Tersedia</a>
        </div>
    </nav>


</div>

<div class="container mt-3">


    <div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
    <div id="flash-warning" data-flash="<?= $this->session->flashdata('warning'); ?>"></div>
    <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>


    <div class="card">
        <h5 class="card-header" style="font-family: Verdana;"><i class="fa fa-bullhorn"></i> <small>Lowongan Tersedia</small></h5>
        <div class="card-body">

            <!-- <div class="mt-2">
                <div class="alert alert-danger" role="alert" style="font-family: Verdana;">
                    <center><i class="fa fa-times-circle"></i> Tidak terdapat lowongan kerja terkait!</center>
                </div>
            </div> -->

            <?php if ($personal  == null) { ?>
                <div class="alert alert-warning" role="alert">
                    <i class="fa fa-info-circle"></i> Mohon Maaf..
                    Data saudara/i belum lengkap.
                </div>
            <?php } elseif ($pendidikan  == null) { ?>
                <div class="alert alert-warning" role="alert">
                    <i class="fa fa-info-circle"></i> Mohon Maaf..
                    Data saudara/i belum lengkap.
                </div>
            <?php } elseif ($alamat  == null) { ?>
                <div class="alert alert-warning" role="alert">
                    <i class="fa fa-info-circle"></i> Mohon Maaf..
                    Data saudara/i belum lengkap.
                </div>
            <?php } elseif ($kontak  == null) { ?>
                <div class="alert alert-warning" role="alert">
                    <i class="fa fa-info-circle"></i> Mohon Maaf..
                    Data saudara/i belum lengkap.
                </div>
            <?php } elseif ($pekerjaan  == null) { ?>
                <div class="alert alert-warning" role="alert">
                    <i class="fa fa-info-circle"></i> Mohon Maaf..
                    Data saudara/i belum lengkap.
                </div>
            <?php } elseif ($lampiran  == null) { ?>
                <?php foreach ($lampiran as $l) { ?>
                    <?php if ($l->cv == null or $l->ktp == null or $l->ijazah == null or $l->foto == null or $l->npwp == null or $l->bpjs == null or $l->sertifikat == null or $l->kk == null) { ?>
                        <div class="alert alert-warning" role="alert">
                            <i class="fa fa-info-circle"></i> Mohon Maaf..
                            Data saudara/i belum lengkap.
                        </div>
                    <?php }  ?>
                <?php } ?>
            <?php } else { ?>
                <?php if ($job == null) { ?>
                    <div class="alert alert-danger" role="alert">
                        <i class="fa fa-info-circle"></i> Mohon Maaf..
                        Belum ada lowongan yang dibuka.
                    </div>
                <?php } else { ?>
                    <?php foreach ($job as $j) { ?>
                        <div class="card mb-3 mt-2" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?= base_url() ?>upload/libs/files/<?= $j->gambar ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-family: Verdana; font-weight: bold;"><small> <?= $j->nama_job ?></small></h5>
                                        <p class="card-text" style="font-family: Verdana;">Silahkan klik tombol tampilkan untuk melihat detail dan melamar pada posisi ini. Terima kasih</p>
                                        <p class="card-text"><small class="text-body-secondary"><span class="badge bg-success"><i class="fa fa-calendar"></i> Post by Admin at <?= $j->date_created ?></span></small></p>
                                        <a href="<?= base_url('user/job-vacancy/detail/' . $j->id_job) ?>" class="btn btn-sm btn-success" style="font-family: Verdana;"> Tampilkan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            <?php } ?>




            <!-- <div class="card mb-3 mt-2" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>assets/lib/job2.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: Verdana;"><small>Nama Job</small></h5>
                            <p class="card-text" style="font-family: Verdana;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary"><span class="badge bg-success"><i class="fa fa-calendar"></i> Last updated 3 mins ago</span></small></p>
                            <a href="" class="btn btn-sm btn-info" style="font-family: Verdana;"> Tampilkan</a>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>