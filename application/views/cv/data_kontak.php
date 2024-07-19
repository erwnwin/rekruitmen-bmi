<div class="container mt-3">
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary" style="border-radius: 3px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('user/curriculum-vitae') ?>" style="font-family: Verdana; color: teal;">Curriculum Vitae</a>
            <a class="nav-link disabled" aria-disabled="true" style="font-family: Verdana;">Data Kontak</a>
        </div>
    </nav>
</div>

<div class="container mt-3">
    <div class="card">
        <h5 class="card-header" style="font-family: Verdana;"><i class="fa fa-file-text"></i> <small>Formulir Data Kontak</small></h5>
        <div class="card-body">
            <div class="container">
                <form action="<?= base_url('validasi/kontak-act') ?>" method="post" class="row g-3">
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Email <span class="text-danger">*</span></label>
                        <input class="form-control input" id="text-input" name="id_akun_pelamar" type="hidden" value="<?=
                                                                                                                        $this->session->userdata('id_akun_pelamar');
                                                                                                                        ?>">

                        <input class="form-control input" id="text-input" type="text" value="<?=
                                                                                                $this->session->userdata('alamat_email');
                                                                                                ?>" disabled />
                        <span class="text disabled" style="font-size: 13px;"><small><i class="fa fa-lock"></i> Sesuai dengan data registrasi akun</small></span>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Nomor Telepon <span class="text-danger">*</span></label>
                        <input class="form-control input" id="text-input" value="<?=
                                                                                    $this->session->userdata('no_telp');
                                                                                    ?>" type="text" placeholder="No Telepon/WA" required />
                        <span class="text disabled" style="font-size: 13px;"><small> Cth : 082128736216</small></span>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Nomor HP Keluarga </label>
                        <input class="form-control input" name="no_wa_keluarga" id="text-input" type="text" placeholder="No Telepon/WA Keluarga" />
                        <span class="text disabled" style="font-size: 13px;"><small> Cth : 082128736216</small></span>

                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Nomor WhatsApp</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text input">62</span>
                            <input class="form-control input" name="no_wa" id="text-input" maxlength="11" type="text" placeholder="Nomor WhatsApp Aktif" required />
                        </div>

                        <span class="text disabled" style="font-size: 13px;"><small>Jika ingin menerima notifikas via WhatsApp wajib diisi | Format Penulisan No.WA 62821xxx
                            </small></span>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Instagram </label>
                        <input class="form-control input" name="nama_ig" id="text-input" type="text" placeholder="Instagram" />
                        <span class="text disabled" style="font-size: 13px;"><small> Cth : akun_pelamar</small></span>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="validationServer02" class="form-label">Facebook </label>
                        <input class="form-control input" name="nama_fb" id="text-input" type="text" placeholder="Facebook" />
                        <span class="text disabled" style="font-size: 13px;"><small> Cth : facebook.com/akun_pelamar</small></span>
                    </div>
                    <hr>
                    <div class="col-md-4 pull-right">
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>