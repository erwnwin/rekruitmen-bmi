<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #008E6E;">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
            <div class="sidebar-brand-icon ">
                <img src="<?= base_url() ?>assets/depan/assets/img/logo-bmi.svg" alt="" width="50%" class="img-fluid">

            </div>
            <!-- <div class="sidebar-brand-text mx-3"></div> -->
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('dashboard') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>

        </li>
        <li class="nav-item <?= $this->uri->segment(1) == 'profil' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('profil') ?>">
                <i class="fas fa-fw fa-user"></i>
                <span>Profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('log-out') ?>">
                <i class="fas fa-fw fa-power-off"></i>
                <span>Logout</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Main Menu
        </div>

        <li class="nav-item <?= $this->uri->segment(1) == 'job-vacancies' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('job-vacancies') ?>">
                <i class="fas fa-fw fa-file"></i>
                <span>Job Vacancy</span>
            </a>
        </li>
        <!-- <li class="nav-item <?= $this->uri->segment(1) == 'pengumuman' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('pengumuman') ?>">
                <i class="fas fa-fw fa-info-circle"></i>
                <span>Pengumuman</span>
            </a>
        </li> -->

        <li class="nav-item <?= $this->uri->segment(1) == 'pengumuman' || $this->uri->segment(1) == 'jadwal' ? 'active' : '' ?>">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-fw fa-info-circle"></i>
                <span>Informasi</span>
            </a>
            <div id="collapseOne" class="collapse <?= $this->uri->segment(1) == 'pengumuman' || $this->uri->segment(1) == 'jadwal' ? 'show' : '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    <a class="collapse-item <?= $this->uri->segment(1) == 'pengumuman' ? 'active' : '' ?>" href="<?= base_url('pengumuman') ?>">Pengumuman</a>
                    <a class="collapse-item <?= $this->uri->segment(1) == 'jadwal' ? 'active' : '' ?>" href="<?= base_url('jadwal') ?>">Jadwal</a>

                    <!-- <a class="collapse-item" href="cards.html">Kesehatan</a> -->
                </div>
            </div>
        </li>

        <li class="nav-item <?= $this->uri->segment(1) == 'pelamar' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('pelamar') ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Pelamar</span>
            </a>
        </li>

        <!-- 
        <li class="nav-item <?= $this->uri->segment(1) == 'penilaian' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('penilaian') ?>">
                <i class="fas fa-fw fa-edit"></i>
                <span>Penilaian</span>
            </a>
        </li> -->

        <li class="nav-item <?= $this->uri->segment(1) == 'interview' || $this->uri->segment(1) == 'kesehatan' ? 'active' : '' ?>">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-edit"></i>
                <span>Penilaian</span>
            </a>
            <div id="collapseTwo" class="collapse <?= $this->uri->segment(1) == 'interview' || $this->uri->segment(1) == 'kesehatan' ? 'show' : '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    <a class="collapse-item <?= $this->uri->segment(1) == 'interview' ? 'active' : '' ?>" href="<?= base_url('interview') ?>">Interview</a>
                    <!-- <a class="collapse-item <?= $this->uri->segment(1) == 'kesehatan' ? 'active' : '' ?>" href="<?= base_url('kesehatan') ?>">Kesehatan</a> -->

                    <!-- <a class="collapse-item" href="cards.html">Kesehatan</a> -->
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Setting
        </div>

        <li class="nav-item <?= $this->uri->segment(1) == 'users' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('users') ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Pengguna Sistem</span>
            </a>
        </li>


        <!-- Nav Item - Charts -->
        <li class="nav-item <?= $this->uri->segment(1) == 'history-pelamar' || $this->uri->segment(1) == 'kesehatan' ? 'active' : '' ?>">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseKi" aria-expanded="true" aria-controls="collapseKi">
                <i class="fas fa-fw fa-database"></i>
                <span>History Data</span></a>
            </a>
            <div id="collapseKi" class="collapse <?= $this->uri->segment(1) == 'history-pelamar' || $this->uri->segment(1) == 'kesehatan' ? 'show' : '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    <a class="collapse-item <?= $this->uri->segment(1) == 'history-pelamar' ? 'active' : '' ?>" href="<?= base_url('history-pelamar') ?>">Data Pelamar</a>
                    <!-- <a class="collapse-item <?= $this->uri->segment(1) == 'kesehatan' ? 'active' : '' ?>" href="<?= base_url('kesehatan') ?>">Kesehatan</a> -->

                    <!-- <a class="collapse-item" href="cards.html">Kesehatan</a> -->
                </div>
            </div>
        </li>






    </ul>
    <!-- End of Sidebar -->