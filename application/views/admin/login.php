<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/depan/assets/img/logo-bmi.svg" rel="icon">
    <link href="<?= base_url() ?>assets/depan/assets/img/logo-bmi.svg" rel="apple-touch-icon">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <!-- Sweetaler -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/js/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/js/sweetalert2.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/js/animate.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
    <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>

    <img class="wave" src="<?= base_url() ?>assets/login/img/wave6.png">


    <div class="container">
        <div class="img">
            <img src="<?= base_url() ?>assets/login/img/users.svg">
        </div>
        <div class="login-content">
            <form action="<?= base_url('act-login') ?>" method="post">

                <img src="<?= base_url() ?>assets/depan/assets/img/logo-bmi.svg" class="mb-4">
                <!-- <img src="<?= base_url() ?>assets/depan/assets/img/taglines-hd.jpg" class="mb-3" style="width: 50%; height: 13px;"> -->
                <!-- <h2 class="title">HI, Welcome</h2> -->
                <!-- <h2>Hi, Welcome</h2> -->
                <div class="title" style="margin-top: 15px; margin-bottom: 10px;">
                    <p>Hai, Selamat Datang</p>
                </div>
                <!-- <hr> -->
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="text" name="email" class="input" value="<?= set_value('email') ?>" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" value="<?= set_value('password') ?>" class="input" required>
                    </div>
                </div>
                <a href="#" style="color: white;">Forgot Password?</a>
                <button class="btn" type="submit">Login</button>

                <div class="text-bold" style="color: burlywood; font-size: 14px;">
                    Made with <i class="fa fa-heart"></i> by EngMars Corp. | AnakIT41
                    <p>&copy; 2024</p>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url() ?>assets/login/js/main.js"></script>

    <!-- JQuery -->
    <script src="<?= base_url() ?>assets/lib/js/jquery.min.js"></script>

    <!-- Sweetalert -->
    <script src="<?= base_url() ?>assets/lib/js/sweetalert2.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/js/myscript.js"></script>

    <script>
        var flash = $('#flash').data('flash');
        if (flash) {
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: flash
            })
        }

        var flashGagal = $('#flash-gagal').data('flash');
        if (flashGagal) {
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: flashGagal
            })
        }

        $(document).on('click', '#btn-hapus', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: "#539a55",
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        })

        // $("#nama_lengkap").keyup(function() {
        //   $(this).val($(this).val().toUpperCase());
        // });
    </script>
</body>

</html>