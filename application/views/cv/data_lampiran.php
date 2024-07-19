<div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
<div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>

<div class="container mt-3">
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary" style="border-radius: 3px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('user/curriculum-vitae') ?>" style="font-family: Verdana; color: teal;">Curriculum Vitae</a>
            <a class="nav-link disabled" aria-disabled="true" style="font-family: Verdana;">Data Lampiran</a>
        </div>
    </nav>
</div>

<div class="container mt-3">
    <div class="card">
        <h5 class="card-header" style="font-family: Verdana;"><i class="fa fa-file-text"></i> <small>Formulir Data Lampiran</small></h5>
        <div class="card-body">
            <div class="container">
                <form method="post" action="<?= base_url('validasi/update-cv') ?>" enctype="multipart/form-data" class="row g-3">
                    <div class="col-md-10">
                        <label for=""><i class="fa fa-info-circle text-warning"></i> Curriculum Vitae </label>

                        <input type="file" name="cv" accept="application/pdf" class="form-control input mt-2" required>

                        <input type="hidden" name="id_akun_pelamar" value="<?=
                                                                            $this->session->userdata('id_akun_pelamar');
                                                                            ?>" class="form-control">
                        <small class="text-muted" style="font-size: 12px; color: red;"> Format : .pdf | Maks 1 MB</small>
                        <?php foreach ($lampiran as $c) { ?>
                            <?php if ($c->cv == null) { ?>

                            <?php } else { ?>
                                <span class="text-success pull-right"> <span class="badge bg-success">Uploaded</span> | <span class="text-black"><a href="<?= base_url() ?>upload/files/<?= $c->cv ?>" target="_blank">Lihat file</a> </span></span>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="text-white" style="margin-top: 12px;">Namaku</label>
                        <button type="submit" class="btn text-white" style="border-radius: 25px; padding-left: 30px; padding-right: 30px; float: right; margin-left: 10px; background-color: teal;">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                    </div>
                </form>
                <hr>
                <form method="post" action="<?= base_url('validasi/update-foto') ?>" class="row g-3" enctype="multipart/form-data">
                    <div class="col-md-10">
                        <label for=""><i class="fa fa-info-circle text-warning"></i> Pas Foto Terbaru </label>

                        <input type="file" name="foto" class="form-control input mt-2" required>

                        <input type="hidden" name="id_akun_pelamar" value="<?=
                                                                            $this->session->userdata('id_akun_pelamar');
                                                                            ?>" class="form-control">
                        <small class="text-muted" style="font-size: 12px; color: red;"> Format : .jgp.jpeg | Maks 500 kb</small>
                        <?php foreach ($lampiran as $f) { ?>
                            <?php if ($f->foto == null) { ?>

                            <?php } else { ?>
                                <span class="text-success pull-right"> <span class="badge bg-success">Uploaded</span> | <span class="text-black"><a href="<?= base_url() ?>upload/files/<?= $f->foto ?>" target="_blank">Lihat file</a> </span></span>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="text-white" style="margin-top: 12px;">Namaku</label>
                        <button type="submit" class="btn text-white" style="border-radius: 25px; padding-left: 30px; padding-right: 30px; float: right; margin-left: 10px; background-color: teal;">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                    </div>
                </form>
                <hr>
                <form method="post" action="<?= base_url('validasi/update-ktp') ?>" class="row g-3" enctype="multipart/form-data">
                    <div class="col-md-10">
                        <label for=""><i class="fa fa-info-circle text-warning"></i> KTP </label>

                        <input type="file" name="ktp" class="form-control input mt-2" required>

                        <input type="hidden" name="id_akun_pelamar" value="<?=
                                                                            $this->session->userdata('id_akun_pelamar');
                                                                            ?>" class="form-control">
                        <small class="text-muted" style="font-size: 12px; color: red;"> Format : .jpg.jpeg | Maks 500 kb</small>
                        <?php foreach ($lampiran as $k) { ?>
                            <?php if ($k->ktp == null) { ?>

                            <?php } else { ?>
                                <span class="text-success pull-right"> <span class="badge bg-success">Uploaded</span> | <span class="text-black"><a href="<?= base_url() ?>upload/files/<?= $k->ktp ?>" target="_blank">Lihat file</a> </span></span>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="text-white" style="margin-top: 12px;">Namaku</label>
                        <button type="submit" class="btn text-white" style="border-radius: 25px; padding-left: 30px; padding-right: 30px; float: right; margin-left: 10px; background-color: teal;">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                    </div>
                </form>
                <hr>
                <form method="post" action="<?= base_url('validasi/update-kk') ?>" class="row g-3" enctype="multipart/form-data">
                    <div class="col-md-10">
                        <label for=""><i class="fa fa-info-circle text-warning"></i> Kartu Keluarga </label>

                        <input type="file" name="kk" class="form-control input mt-2" required>

                        <input type="hidden" name="id_akun_pelamar" value="<?=
                                                                            $this->session->userdata('id_akun_pelamar');
                                                                            ?>" class="form-control">
                        <small class="text-muted" style="font-size: 12px; color: red;"> Format : .pdf.jpg.jpeg | Maks 1 MB</small>
                        <?php foreach ($lampiran as $k) { ?>
                            <?php if ($k->kk == null) { ?>

                            <?php } else { ?>
                                <span class="text-success pull-right"> <span class="badge bg-success">Uploaded</span> | <span class="text-black"><a href="<?= base_url() ?>upload/files/<?= $k->kk ?>" target="_blank">Lihat file</a> </span></span>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="text-white" style="margin-top: 12px;">Namaku</label>
                        <button type="submit" class="btn text-white" style="border-radius: 25px; padding-left: 30px; padding-right: 30px; float: right; margin-left: 10px; background-color: teal;">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                    </div>
                </form>
                <hr>
                <form method="post" action="<?= base_url('validasi/update-ijazah') ?>" class="row g-3" enctype="multipart/form-data">
                    <div class="col-md-10">
                        <label for=""><i class="fa fa-info-circle text-warning"></i> Ijazah Terakhir</label>

                        <input type="file" name="ijazah" class="form-control input mt-2" required>

                        <input type="hidden" name="id_akun_pelamar" value="<?=
                                                                            $this->session->userdata('id_akun_pelamar');
                                                                            ?>" class="form-control">
                        <small class="text-muted" style="font-size: 12px; color: red;"> Format : .pdf.jpg.jpeg | Maks 1 MB</small>
                        <?php foreach ($lampiran as $i) { ?>
                            <?php if ($i->ijazah == null) { ?>

                            <?php } else { ?>
                                <span class="text-success pull-right"> <span class="badge bg-success">Uploaded</span> | <span class="text-black"><a href="<?= base_url() ?>upload/files/<?= $i->ijazah ?>" target="_blank">Lihat file</a> </span></span>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="text-white" style="margin-top: 12px;">Namaku</label>
                        <button type="submit" class="btn text-white" style="border-radius: 25px; padding-left: 30px; padding-right: 30px; float: right; margin-left: 10px; background-color: teal;">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                    </div>
                </form>
                <hr>
                <form method="post" action="<?= base_url('validasi/update-sertifikat') ?>" class="row g-3" enctype="multipart/form-data">
                    <div class="col-md-10">
                        <label for=""><i class="fa fa-info-circle text-warning"></i> Sertifikat Pendukung</label>

                        <input type="file" name="sertifikat" accept="application/pdf" class=" form-control input mt-2" required>

                        <input type="hidden" name="id_akun_pelamar" value="<?=
                                                                            $this->session->userdata('id_akun_pelamar');
                                                                            ?>" class="form-control">
                        <small class="text-muted" style="font-size: 12px; color: red;"> Format : .pdf | File sertifikat dijadikan satu Maks 2 MB</small>
                        <?php foreach ($lampiran as $s) { ?>
                            <?php if ($s->sertifikat == null) { ?>

                            <?php } else { ?>
                                <span class="text-success pull-right"> <span class="badge bg-success">Uploaded</span> | <span class="text-black"><a href="<?= base_url() ?>upload/files/<?= $s->sertifikat ?>" target="_blank">Lihat file</a> </span></span>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="text-white" style="margin-top: 12px;">Namaku</label>
                        <button type="submit" class="btn text-white" style="border-radius: 25px; padding-left: 30px; padding-right: 30px; float: right; margin-left: 10px; background-color: teal;">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                    </div>
                </form>
                <hr>
                <form method="post" action="<?= base_url('validasi/update-bpjs') ?>" class="row g-3" enctype="multipart/form-data">
                    <div class="col-md-10">
                        <label for=""><i class="fa fa-info-circle text-warning"></i> BPJS Kesehatan Aktif</label>

                        <input type="file" name="bpjs" class="form-control input mt-2" required>

                        <input type="hidden" name="id_akun_pelamar" value="<?=
                                                                            $this->session->userdata('id_akun_pelamar');
                                                                            ?>" class="form-control">
                        <small class="text-muted" style="font-size: 12px; color: red;"> Format : .jpg .jpeg | Maks 500 kb</small>
                        <?php foreach ($lampiran as $b) { ?>
                            <?php if ($b->bpjs == null) { ?>

                            <?php } else { ?>
                                <span class="text-success pull-right"> <span class="badge bg-success">Uploaded</span> | <span class="text-black"><a href="<?= base_url() ?>upload/files/<?= $b->bpjs ?>" target="_blank">Lihat file</a> </span></span>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="text-white" style="margin-top: 12px;">Namaku</label>
                        <button type="submit" class="btn text-white" style="border-radius: 25px; padding-left: 30px; padding-right: 30px; float: right; margin-left: 10px; background-color: teal;">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                    </div>
                </form>
                <hr>
                <form method="post" action="<?= base_url('validasi/update-npwp') ?>" class="row g-3" enctype="multipart/form-data">

                    <div class="col-md-10">
                        <label for=""><i class="fa fa-info-circle text-warning"></i> NPWP</label>

                        <input type="file" name="npwp" class="form-control input mt-2" required>

                        <input type="hidden" name="id_akun_pelamar" value="<?=
                                                                            $this->session->userdata('id_akun_pelamar');
                                                                            ?>" class="form-control">
                        <small class="text-muted" style="font-size: 12px; color: red;"> Format : .jpeg .jpg | Maks 500 kb</small>
                        <?php foreach ($lampiran as $n) { ?>
                            <?php if ($n->npwp == null) { ?>

                            <?php } else { ?>
                                <span class="text-success pull-right"> <span class="badge bg-success">Uploaded</span> | <span class="text-black"><a href="<?= base_url() ?>upload/files/<?= $n->npwp ?>" target="_blank">Lihat file</a> </span></span>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="text-white" style="margin-top: 12px;">Namaku</label>
                        <button type="submit" class="btn text-white" style="border-radius: 25px; padding-left: 30px; padding-right: 30px; float: right; margin-left: 10px; background-color: teal;">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                    </div>
                </form>
                <hr>
                <!-- <button class="btn btn-sm btn-success btn-block"><i class="fa fa-check-circle"></i> Simpan</button> -->
            </div>
        </div>
    </div>
</div>