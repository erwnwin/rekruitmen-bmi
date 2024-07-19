<div class="container mt-3">
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary" style="border-radius: 3px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('user/beranda') ?>" style="font-family: Verdana; color: teal;">Lowongan</a>
            <a class="nav-link disabled" aria-disabled="true" style="font-family: Verdana;">Detail Lowongan</a>
        </div>
    </nav>
    <div class="alert alert-danger mt-3" role="alert">
        Mohon diperhatikan dengan seksama detail dari setiap Lowongan yang terbuka. Pastikan telah memilih Lowongan sesuai dengan kualifikasi dan minat anda. <br>
        <hr>
        <b><i class="fa fa-info-circle"></i> Ingat! Anda hanya dapat mengajukan 1 lamaran pada PT BMI Makassar. Mohon diperhatikan dengan baik. Terima kasih.</b>
    </div>

</div>

<div class="container mt-3">


    <div class="card">
        <?php foreach ($djob as $d) { ?>
            <div class="card mb-3 mt-2" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>upload/libs/files/<?= $d->gambar ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: Verdana; font-weight: bold;"><small> <?= $d->nama_job ?></small></h5>
                            <hr>
                            <p class="card-text" style="font-family: Verdana;">Deskripsi</p>
                            <p class="card-text" style="font-family: Verdana; margin-left: 30px;"><?= $d->persyaratan ?></p>
                            <!-- <p class="card-text"><small class="text-body-secondary"><span class="badge bg-success"><i class="fa fa-calendar"></i> Post by Admin at <?= $j->date_created ?></span></small></p> -->
                            <hr>
                            <a href="<?= base_url('user/job-vacancy/lamar/' . $d->id_job) ?>" id="btn-lamar" class="btn btn-sm btn-success" style="font-family: Verdana;"> Ajukan Lamaran Pada Posisi Ini</a>
                            <a href="<?= base_url('user/job-vacancy') ?>" class="btn btn-sm btn-danger" style="font-family: Verdana;"> Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>