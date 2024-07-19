<div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
<div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>

<div class="container mt-3">
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary" style="border-radius: 3px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('user/curriculum-vitae') ?>" style="font-family: Verdana; color: teal;">Curriculum Vitae</a>
            <a class="nav-link disabled" aria-disabled="true" style="font-family: Verdana;">Data Riwayat Pendidikan</a>
        </div>
    </nav>
</div>

<div class="container mt-3">
    <div class="card">
        <h5 class="card-header" style="font-family: Verdana;"><i class="fa fa-file-text"></i> <small>Formulir Data Riwayat Pendidikan</small></h5>
        <div class="card-body">
            <div class="container">
                <form action="<?= base_url('validasi/pendidikan-act') ?>" method="post" class="row g-3">
                    <div class="col-md-6 mt-3">
                        <label for="validationServer02" class="form-label">Nama Sekolah / Kampus <span class="text-danger">*</span></label>
                        <input class="form-control input" id="text-input" type="hidden" name="id_akun_pelamar" value="<?=
                                                                                                                        $this->session->userdata('id_akun_pelamar');
                                                                                                                        ?>" />
                        <input class="form-control input" id="text-input" name="nama_sekolah" type="text" placeholder="Nama Sekolah / Kampus" required />
                        <!-- <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Cth : 082128736216</small></span> -->
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="validationServer02" class="form-label">Jurusan <span class="text-danger">*</span></label>
                        <input class="form-control input" id="text-input" name="jurusan" type="text" placeholder="Jurusan" required />
                        <!-- <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Cth : 082128736216</small></span> -->
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Jenjang Pendidikan <span class="text-danger">*</span></label>
                        <select name="jenjang" class="form-control input" id="" required>
                            <option value="" selected disabled>-- Pilih Jenjang --</option>
                            <option value="SMP"> Sekolah Menengah Pertama</option>
                            <option value="SMA"> Sekolah Menengah Atas</option>
                            <option value="D-IV/S1"> D-IV/S1</option>
                            <option value="S2"> S2</option>
                            <option value="S3"> S3</option>
                        </select>
                        <!-- <input class="form-control input" id="text-input" type="text" placeholder="Nama Sekolah / Kampus" /> -->
                        <!-- <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Cth : 082128736216</small></span> -->
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Nilai Rata-rata Ujian / IPK <span class="text-danger">*</span></label>
                        <input class="form-control input" name="nilai" id="text-input" type="text" placeholder="Nilai Rata-rata pada Ijazah / IPK" required />
                        <span class="text disabled" style="font-size: 13px;"><small>Nilai Rata-rata pada Ijazah / IPK</small></span>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Tahun Lulus <span class="text-danger">*</span></label>
                        <input class="form-control input" name="lulus" id="text-input" maxlength="4" type="text" placeholder="Tahun Lulus" />
                        <!-- <span class="text disabled" style="font-size: 13px;"><small>Nilai Rata-rata pada Ijazah / IPK</small></span> -->
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i> Tambah Riwayat Pendidikan</button>

                </form>
                <hr>
                <div class="table-responsive">
                    <table id="myTable" class="table">
                        <thead>
                            <tr>
                                <th style="background-color: gainsboro;">#</th>
                                <th style="background-color: gainsboro;">Nama Sekolah / Kampus</th>
                                <th style="background-color: gainsboro;">Jenjang / Jurusan</th>
                                <th style="background-color: gainsboro;">Nilai Rata-rata / IPK</th>
                                <th style="background-color: gainsboro;">Tahun Lulus</th>
                                <th style="background-color: gainsboro;">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pendidikan as $p) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $p->nama_sekolah ?></td>
                                    <td><?= $p->jenjang ?></td>
                                    <td><?= $p->nilai ?></td>
                                    <td><?= $p->lulus ?></td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-danger" id="btn-hapus"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>