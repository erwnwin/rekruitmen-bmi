<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white" style="border-style: inherit; width: 100%;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('user/beranda') ?>" style="font-family: Verdana;">Rekrutmen Online PT BMI Makassar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><b>Rekrutmen Online PT BMI Makassar</b></a>
                        </li> -->
                    <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li> -->
                    <!-- <li class="nav-item dropdown pull-right">
                            <a class="nav-link dropdown-toggle" style="text-align: right;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> -->
                </ul>
                <span class="navbar-text">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown pull-right">
                            <a class="nav-link dropdown-toggle" style="text-align: right; font-family: Verdana;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?= base_url() ?>assets/user1.png" alt="" style="width: 20px; margin-bottom: 3px;">
                                <?=
                                $this->session->userdata('nama_lengkap');
                                ?>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- <li><a class="dropdown-item" href="<?= base_url('user/profil') ?>"><i class="fa fa-user"></i> Profil</a></li> -->
                                <li><a class="dropdown-item" href="<?= base_url('user/logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>
</div>