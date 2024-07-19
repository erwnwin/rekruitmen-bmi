<div class="container mt-3">
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary" style="border-radius: 3px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('user/info') ?>" style="font-family: Verdana; color: teal;">Info Rekrutmen</a>
            <a class="nav-link disabled" aria-disabled="true" style="font-family: Verdana;">Detail Info</a>
        </div>
    </nav>


</div>

<div class="container mt-3">
    <div class="card">
        <h5 class="card-header" style="font-family: Verdana;"><i class="fa fa-file-text"></i> <small>Detail Info</small></h5>
        <?php foreach ($info as $i) { ?>
            <div class="card-body">
                <div class="card" style="width: 100%">
                    <img src="<?= base_url() ?>upload/libs/files/<?= $i->img_upload ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $i->judul ?></h5>
                        <p class="card-text" style="text-align: justify;"><?= $i->deskripsi ?></p>
                        <hr>
                        <a href="<?= base_url('user/info') ?>" class="btn btn-success btn-sm">Back</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>