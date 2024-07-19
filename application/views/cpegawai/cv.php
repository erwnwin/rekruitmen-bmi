<div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
<div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>

<div class="container mt-3">
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary" style="border-radius: 3px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('user/beranda') ?>" style="font-family: Verdana; color: teal;">Beranda</a>
            <a class="nav-link disabled" aria-disabled="true" style="font-family: Verdana;">Curriculum Vitae</a>
        </div>
    </nav>
</div>

<div class="container mt-3">

    <div class="card">
        <h5 class="card-header" style="font-family: Verdana;"><i class="fa fa-address-book"></i> <small>Curriculum Vitae</small>
            <a href="<?= base_url('user/curriculum-vitae/unduh-idcard') ?>" class="btn btn-sm btn-outline-success pull-right" style="font-family: Verdana;"><i class="fa fa-id-card"></i> Unduh Kartu Pelamar</a>
        </h5>

        <div class="card-body">

            <!-- <div class="mt-2">
                <div class="alert alert-danger" role="alert" style="font-family: Verdana;">
                    <center><i class="fa fa-times-circle"></i> Tidak terdapat lowongan kerja terkait!</center>
                </div>
            </div> -->
            <div class="mt-2">
                <p style="font-family: Verdana; font-size: 12x; text-align: center;">Silahkan melengkapi data di bawah dengan mengklik tombol <span class="badge bg-danger"><i class="fa fa-edit"></i></span>. Data yang telah lengkap akan berubah berwarna <span class="badge bg-success"><i class="fa fa-check-circle"></i> Hijau</span>. Data yang telah dikirim tidak <b>dapat diubah</b>, maka dari itu silahkan cek kelengkapan berkas saudara(i) sebelum mengisi form berikut.</p>
                <hr>
            </div>

            <ul class="list-group mt-2">

                <?php if ($personal == null) { ?>
                    <li class="list-group-item list-group-item-danger" aria-current="true" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-angle-double-right"></i> Formulir Data Pribadi/Personal
                        <a href="<?= base_url('user/curriculum-vitae/data-personal') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a>
                    </li>
                <?php } else { ?>
                    <li class="list-group-item list-group-item-success" aria-current="true" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-check-circle"></i> Formulir Data Pribadi/Personal
                        <!-- <a href="<?= base_url('user/curriculum-vitae/data-personal') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a> -->
                        <i class="fa fa-lock pull-right mt-1"></i>
                    </li>
                <?php } ?>

                <?php if ($alamat == null) { ?>
                    <li class="list-group-item list-group-item-danger" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-angle-double-right"></i> Formulir Data Alamat
                        <a href="<?= base_url('user/curriculum-vitae/data-alamat') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a>
                    </li>
                <?php } else { ?>
                    <li class="list-group-item list-group-item-success" aria-current="true" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-check-circle"></i> Formulir Data Alamat
                        <!-- <a href="<?= base_url('user/curriculum-vitae/data-personal') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a> -->
                        <i class="fa fa-lock pull-right mt-1"></i>
                    </li>
                <?php } ?>



                <?php if ($kontak == null) { ?>
                    <li class="list-group-item list-group-item-danger" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-angle-double-right"></i> Formulir Data Kontak
                        <a href="<?= base_url('user/curriculum-vitae/data-kontak') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a>
                    </li>
                <?php } else { ?>
                    <li class="list-group-item list-group-item-success" aria-current="true" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-check-circle"></i> Formulir Data Kontak
                        <!-- <a href="<?= base_url('user/curriculum-vitae/data-personal') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a> -->
                        <i class="fa fa-lock pull-right mt-1"></i>
                    </li>
                <?php } ?>



                <?php if ($pekerjaan == null) { ?>
                    <li class="list-group-item list-group-item-danger" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-angle-double-right"></i> Formulir Data Riwayat Pekerjaan
                        <a href="<?= base_url('user/curriculum-vitae/data-pekerjaan') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a>
                    </li>
                <?php } else { ?>
                    <li class="list-group-item list-group-item-success" aria-current="true" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-check-circle"></i> Formulir Data Riwayat Pekerjaan
                        <!-- <a href="<?= base_url('user/curriculum-vitae/data-personal') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a> -->
                        <i class="fa fa-lock pull-right mt-1"></i>
                    </li>
                <?php } ?>


                <!-- <li class="list-group-item list-group-item-danger" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-angle-double-right"></i> Formulir Data Data Keluarga
                    <a href="<?= base_url('user/curriculum-vitae/data-personal') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a> -->
                </li>
                <!-- <li class="list-group-item list-group-item-danger" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-angle-double-right"></i> Formulir Data Pendukung
                    <a href="<?= base_url('user/curriculum-vitae/data-personal') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a>
                </li> -->

                <?php if ($pendidikan == null) { ?>
                    <li class="list-group-item list-group-item-danger" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-angle-double-right"></i> Formulir Data Riwayat Pendidikan
                        <a href="<?= base_url('user/curriculum-vitae/data-pendidikan') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a>
                    </li>
                <?php } else { ?>
                    <li class="list-group-item list-group-item-success" aria-current="true" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-check-circle"></i> Formulir Data Riwayat Pendidikan
                        <!-- <a href="<?= base_url('user/curriculum-vitae/data-personal') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a> -->
                        <i class="fa fa-lock pull-right mt-1"></i>
                    </li>
                <?php } ?>


                <?php if ($lampiran == null) { ?>
                    <li class="list-group-item list-group-item-danger" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-angle-double-right"></i> Formulir Data Lampiran
                        <a href="<?= base_url('user/curriculum-vitae/data-lampiran') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a>
                    </li>

                <?php } else { ?>
                    <?php foreach ($lampiran as $l) { ?>
                        <?php if ($l->cv == null or $l->ktp == null or $l->ijazah == null or $l->foto == null or $l->npwp == null or $l->bpjs == null or $l->sertifikat == null or $l->kk == null) { ?>

                            <li class="list-group-item list-group-item-danger" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-angle-double-right"></i> Formulir Data Lampiran
                                <a href="<?= base_url('user/curriculum-vitae/data-lampiran') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a>
                            </li>
                        <?php } else { ?>
                            <li class="list-group-item list-group-item-success" aria-current="true" style="font-family: Calibri; font-weight: bolder; font-size: 18px;"><i class="fa fa-check-circle"></i> Formulir Data Lampiran
                                <!-- <a href="<?= base_url('user/curriculum-vitae/data-personal') ?>" class="btn btn-sm btn-danger pull-right"><i class="fa fa-edit"></i></a> -->
                                <i class="fa fa-lock pull-right mt-1"></i>
                            </li>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>


            </ul>

        </div>
    </div>
</div>