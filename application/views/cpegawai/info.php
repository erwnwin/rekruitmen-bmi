<div class="container mt-3">
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary" style="border-radius: 3px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('user/beranda') ?>" style="font-family: Verdana; color: teal;">Beranda</a>
            <a class="nav-link disabled" aria-disabled="true" style="font-family: Verdana;">Pengumuman Rekrutmen</a>
        </div>
    </nav>


</div>

<div class="container mt-3">
    <div class="card">
        <h5 class="card-header" style="font-family: Verdana;"><i class="fa fa-file-text"></i> <small>Pengumuman Rekrutmen</small></h5>
        <div class="card-body">
            <div class="row">
                <?php if ($info == null) { ?>
                    <div class="col-sm-12 mt-2 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <div class="alert alert-danger" role="alert">
                                    <i class="fa fa-info-circle"></i> Pengumuman belum tersedia.
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <?php foreach ($info as $i) { ?>
                        <div class="col-sm-6 mt-2 mb-3 mb-sm-0">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-family: Verdana;"><small><?= $i->judul ?></small></h5>
                                    <small><span class="badge bg-success">Publish by admin</span></small>
                                    <small><span class="badge bg-secondary"><?= $i->date_created ?></span></small>
                                    <p class="card-text mt-2" style="font-family: Verdana;"><small><?= substr($i->deskripsi, 0, 60) ?>.... <a href="<?= base_url('user/info/detail-info/' . $i->id_pengumuman) ?>" style="font-style: normal; color: teal;">Selengkapnya</a></small></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>