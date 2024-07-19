    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Pengumuman</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>

        <!-- Content Row -->
        <div class="row">



            <div class="col-lg-12 col-md-12 mb-4">

                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Form Input Data Pengumuman</h6>
                        <!-- <div class="dropdown no-arrow">
                            <a href="<?= base_url('job-vacancies/create') ?>" class="btn btn-sm btn-success">Create Lowongan</a>
                        </div> -->
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form action="<?= base_url('pengumuman/act') ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Judul/Title</label>
                                <input type="hidden" name="id_user" class="form-control" value="1" placeholder="Judul" required>
                                <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Judul" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Deksripsi/Isi</label>
                                <textarea name="deskripsi" class="form-control" cols="5" rows="4" placeholder="Ketikkan deskripsi / isi" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Upload Gambar</label>
                                <input type="file" name="img_upload" accept=".jpg, .jpeg, .png" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Job</label>
                                <input type="text" name="status" class="form-control" value="Close" readonly>
                            </div> -->
                            <button type="submit" class="btn btn-success btn-sm btn-block">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>