<div class="container mt-3">
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary" style="border-radius: 3px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('user/curriculum-vitae') ?>" style="font-family: Verdana; color: teal;">Curriculum Vitae</a>
            <a class="nav-link disabled" aria-disabled="true" style="font-family: Verdana;">Data Alamat</a>
        </div>
    </nav>
</div>

<div class="container mt-3">
    <div class="card">
        <h5 class="card-header" style="font-family: Verdana;"><i class="fa fa-file-text"></i> <small>Formulir Data Alamat</small></h5>
        <div class="card-body">
            <div class="container">
                <div class="mt-2">
                    <p style="font-family: Verdana; font-size: 12x; text-align: center;"><b>ALAMAT SESUAI DENGAN KTP</b></p>
                    <hr>
                </div>
                <form action="<?= base_url('validasi/alamat-act') ?>" method="post" class="row g-3">
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Provinsi <span class="text-danger">*</span></label>
                        <input type="hidden" class="form-control input" name="id_akun_pelamar" value="<?=
                                                                                                        $this->session->userdata('id_akun_pelamar');
                                                                                                        ?>" readonly>
                        <input class="form-control input" id="text-input" type="hidden" value="<?=
                                                                                                $this->session->userdata('id_akun_pelamar');
                                                                                                ?>" placeholder="No. KTP/Nomor Induk Kependudukan" />
                        <select name="provinsi" id="provinsi" class="form-control select2" style="width: 100%;" required>
                            <option disabled selected>-- Pilih Provinsi --</option>
                            <?php foreach ($provinsi as $prov) {
                                echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
                            } ?>
                        </select>
                        <!-- <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Sesuai dengan data registrasi akun</small></span> -->
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Kabupaten / Kota <span class="text-danger">*</span></label>
                        <select name="kota_kab" id="kabupaten" class="form-control select2" style="width: 100%;" required>
                            <option disabled selected>-- Pilih Kabupaten/Kota --</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Kecamatan <span class="text-danger">*</span></label>
                        <select name="kecamatan" id="kecamatan" class="form-control select2" style="width: 100%;" required>
                            <option disabled selected>-- Pilih Kecamatan --</option>
                        </select>

                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Kelurahan / Desa <span class="text-danger">*</span></label>
                        <input class="form-control input" id="text-input" name="kelurahan" type="text" placeholder="Keluarahan / Desa" required />
                        <!-- <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Sesuai dengan data registrasi akun</small></span> -->

                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">RT / RW </span></label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control input" name="rt" maxlength="3" placeholder="000" aria-label="Username">
                            <span class="input-group-text">/</span>
                            <input type="text" class="form-control input" name="rw" maxlength="3" placeholder="000" aria-label="Server">
                        </div>
                        <!-- <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Sesuai dengan data registrasi akun</small></span> -->

                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Kode POS </label>
                        <input class="form-control input" name="kode_pos" id="kodepos" type="text" placeholder="Kode POS" required />
                        <span class="text disabled" style="font-size: 13px;"><small> Contoh : 90553</small></span>

                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="validationServer02" class="form-label">Alamat Sesuai KTP</label>
                        <textarea name="alamat_ktp" class="form-control input" id="alamatktp" cols="10" rows="3" placeholder="Alamat Sesuai KTP"></textarea>
                    </div>

                    <hr>

                    <p style="font-family: Verdana; font-size: 12x; text-align: center;"><b>ALAMAT DOMISILI</b></p>
                    <hr>

                    <!-- <div class="col-md-12">
                        <div class="alert alert-warning" role="alert">
                            <input type="checkbox" id="same" name="same" onchange="sameAddres()"> Alamat saat ini sama dengan alamat KTP

                        </div>
                    </div> -->
                    <hr>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Provinsi <span class="text-danger">*</span></label>
                        <input class="form-control input" id="text-input" type="hidden" value="<?=
                                                                                                $this->session->userdata('id_akun_pelamar');
                                                                                                ?>" placeholder="No. KTP/Nomor Induk Kependudukan" />


                        <select name="provinsi_dom" id="provinsid" for="same" class="form-control select2" style="width: 100%;" required>

                            <option value="">- Pilih Provinsi -</option>
                            <?php foreach ($provinsi as $prov) {
                                echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
                            } ?>
                        </select>
                        <!-- <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Sesuai dengan data registrasi akun</small></span> -->
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Kabupaten / Kota <span class="text-danger">*</span></label>
                        <select name="kota_kab_dom" for="same" id="kabupatend" class="form-control select2" style="width: 100%;" required>
                            <option disabled selected>-- Pilih Kabupaten/Kota --</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Kecamatan <span class="text-danger">*</span></label>
                        <select name="kecamatan_dom" id="kecamatand" class="form-control select2" style="width: 100%;" required>
                            <option disabled selected>-- Pilih Kecamatan --</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Kelurahan / Desa <span class="text-danger">*</span></label>
                        <input class="form-control input" id="text-input" name="kelurahan_dom" type="text" placeholder="Keluarahan / Desa" required />
                        <!-- <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Sesuai dengan data registrasi akun</small></span> -->

                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">RT / RW </span></label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control input" name="rt_dom" maxlength="3" placeholder="000" aria-label="Username">
                            <span class="input-group-text">/</span>
                            <input type="text" class="form-control input" name="rw_dom" maxlength="3" placeholder="000" aria-label="Server">
                        </div>
                        <!-- <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Sesuai dengan data registrasi akun</small></span> -->

                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Kode POS </label>
                        <input class="form-control input" name="kode_pos_dom" id="kodepos" type="text" placeholder="Kode POS" required />
                        <span class="text disabled" style="font-size: 13px;"><small> Contoh : 90553</small></span>

                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="validationServer02" class="form-label" for="same">Alamat Domisili</label>
                        <textarea name="alamat_domisili" class="form-control input" for="same" cols="10" rows="3" placeholder="Alamat Domisili" id="alamatktp2"></textarea>

                    </div>

                    <div class="col-md-4 pull-right">
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan Data</button>
                    </div>
                </form>


                <!-- <label for="textarea-disabled">Textarea Disabled</label>
                <textarea class="input" id="textarea-disabled" disabled></textarea>  -->

            </div>
        </div>
    </div>
</div>