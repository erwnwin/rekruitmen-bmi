<div class="container mt-3">
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary" style="border-radius: 3px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('user/curriculum-vitae') ?>" style="font-family: Verdana; color: teal;">Curriculum Vitae</a>
            <a class="nav-link disabled" aria-disabled="true" style="font-family: Verdana;">Data Personal</a>
        </div>
    </nav>
</div>

<div class="container mt-3">
    <div class="card">
        <h5 class="card-header" style="font-family: Verdana;"><i class="fa fa-file-text"></i> <small>Formulir Data Personal / Pribadi</small></h5>
        <div class="card-body">
            <div class="container">

                <form action="<?= base_url('validasi/personal-act') ?>" method="post" class="row g-3">
                    <div class="col-md-6 mt-3">
                        <label for="validationServer02" class="form-label">No. KTP / Nomor Induk Kependudukan <span class="text-danger">*</span></label>
                        <input class="form-control input" name="id_akun_pelamar" id="text-input" type="hidden" value="<?=
                                                                                                                        $this->session->userdata('id_akun_pelamar');
                                                                                                                        ?>" placeholder="No. KTP/Nomor Induk Kependudukan" />
                        <input class="form-control input" id="text-input" type="text" value="<?=
                                                                                                $this->session->userdata('no_ktp');
                                                                                                ?>" disabled />
                        <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Sesuai dengan data registrasi akun</small></span>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="validationServer02" class="form-label">Kewarganegaraan <span class="text-danger">*</span></label>
                        <select name="kewarganegaraan" id="" class="form-select input" required>
                            <option value="WNI">Warga Negara Indonesia</option>
                            <option value="WNA">Warga Negara Asing</option>
                        </select>

                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="validationServer02" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                        <input class="form-control input" id="text-input" type="text" value="<?=
                                                                                                $this->session->userdata('nama_lengkap'); ?>" disabled />
                        <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Sesuai dengan data registrasi akun</small></span>

                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="validationServer02" class="form-label">Nama Panggilan </label>
                        <input class="form-control input" name="nama_panggilan" id="text-input" type="text" placeholder="Nama Pangilan" required />
                        <!-- <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Sesuai dengan data registrasi akun</small></span> -->

                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="validationServer02" class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                        <input class="form-control input" name="tempat_lahir" id="text-input" type="text" placeholder="Tempat Lahir" required />
                        <!-- <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Sesuai dengan data registrasi akun</small></span> -->

                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="validationServer02" class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                        <input class="form-control input" name="tgl_lahir" id="text-input" type="date" placeholder="Nama Pangilan" required />
                        <span class="text disabled" style="font-size: 13px;"><small>Tanggal - Bulan - Tahun</small></span>

                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="validationServer02" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="" class="form-select input">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="validationServer02" class="form-label">Agama</label>
                        <select name="agama" id="" class="form-select input">
                            slam, Kristen Protestan, Kristen Katolik, Hindu, Buddha, dan Konghucu
                            <option value="Islam">ISLAM</option>
                            <option value="Kristen Protestan">KRISTEN PROTESTAN</option>
                            <option value="Kristen Katolik">KRISTEN KATOLIK</option>
                            <option value="Hindu">HINDU</option>
                            <option value="Buddha">BUDDHA</option>
                            <option value="Konghucu">KONGHUCU</option>
                        </select>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="validationServer02" class="form-label">Status Pernikahan</label>
                        <select name="status_kawin" id="" class="form-select input">
                            <option value="Lajang">Lajang</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Janda">Janda</option>
                            <option value="Duda">Duda</option>
                        </select>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="validationServer02" class="form-label">Suku </label>
                        <input class="form-control input" name="suku" id="text-input" type="text" placeholder="Suku" required />
                        <!-- <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Sesuai dengan data registrasi akun</small></span> -->
                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Tinggi Badan </label>
                        <div class="input-group mb-3">
                            <input type="text" name="tinggi" class="form-control input" id="text-input" placeholder="Tinggi Badan">
                            <span class="input-group-text input">cm</span>
                        </div>
                        <!-- <input class="form-control input" id="text-input" type="text" placeholder="Suku" required /> -->
                        <!-- <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Sesuai dengan data registrasi akun</small></span> -->
                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Berat Badan </label>
                        <div class="input-group mb-3">
                            <input type="text" name="berat" class="form-control input" id="text-input" placeholder="Berat Badan">
                            <span class="input-group-text input">kg</span>
                        </div>
                        <!-- <input class="form-control input" id="text-input" type="text" placeholder="Suku" required /> -->
                        <!-- <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Sesuai dengan data registrasi akun</small></span> -->
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Golongan Darah </label>
                        <select name="gol_darah" id="" class="form-select input">
                            <option value="Belum Diketahui">Belum Diketahui</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">No BPJS Kesehatan <span class="text-danger">*</span></label>
                        <input class="form-control input" name="no_bpjs" id="text-input" type="text" placeholder="Nomor BPJS Kesehatan" required />
                        <span class="text disabled" style="font-size: 13px;"><small> Harus telah memiliki BPJS Kesehatan</small></span>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">No BPJS Ketenagakerjaan </label>
                        <input class="form-control input" name="no_tenaga" id="text-input" type="text" placeholder="No BPJS Ketenagakerjaan" />
                        <!-- <span class="text disabled" style="font-size: 13px;"><small> Harus telah memiliki BPJS Kesehatan</small></span> -->
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">No NPWP <span class="text-danger">*</span></label>
                        <input class="form-control input" name="npwp" id="text-input" type="text" placeholder="No NPWP" required />
                        <span class="text disabled" style="font-size: 13px;"><small> Cth : 99.999.999.9-999.999</small></span>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan Data</button>

                    <!-- <div class="col-md-4 pull-right">
                    </div> -->
                </form>



                <!-- <label for="text-input">Text Input</label>
                <input class="input" id="text-input" type="text" />

                <label for="date-input">Date Input</label>
                <input class="input" id="date-input" type="date" />

                <label for="file-input">File Input</label>
                <input id="file-input" class="input" type="file" />

                <label for="readonly-input">Read-Only Input</label>
                <input class="input" id="readonly-input" type="text" readonly value="This can only be copied" />

                <label for="disabled-input">Disabled Input</label>
                <input class="input" id="disabled-input" type="text" disabled />

                <label for="textarea">Textarea</label>
                <textarea class="input" id="textarea"></textarea>

                <label for="textarea-disabled">Textarea Disabled</label>
                <textarea class="input" id="textarea-disabled" disabled></textarea> -->

            </div>
        </div>
    </div>
</div>