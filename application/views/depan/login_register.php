<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title><?= $title; ?></title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/depan/assets/img/logo-bmi.svg" rel="icon">
  <link href="<?= base_url() ?>assets/depan/assets/img/logo-bmi.svg" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/depan/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/depan/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/depan/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/depan/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/depan/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="https://rekrutmen.imip.co.id/lib/bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/depan/assets/css/style.css" rel="stylesheet">

  <!-- Sweetaler -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/lib/js/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/lib/js/sweetalert2.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/lib/js/animate.min.css">

  <style type="text/css">
    .loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url("<?= base_url() ?>assets/loading4.gif") 50% 50% no-repeat rgb(255, 255, 255);
      opacity: 0.9;
      transition: opacity 0.80s, visibility 0.80s;
    }

    .loader--hidden {
      opacity: 0;
      visibility: hidden;
    }

    .loader::after {
      content: "";
      width: 100%;
      height: 100%;
      animation: loading 5.00s ease infinite;
    }
  </style>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    html,
    body {
      display: grid;
      height: 100%;
      width: 100%;
      place-items: center;
      background: #51D6B5;
      /* #51D6B5 */
    }

    ::selection {
      background: #51D6B5;
      color: #fff;
    }

    .wrapper {
      overflow: hidden;
      max-width: 750px;
      background: #fff;
      padding: 30px;
      border-radius: 50px;
      box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
    }

    .wrapper .title-text {
      display: flex;
      width: 200%;
    }

    .wrapper .title {
      width: 50%;
      font-size: 25px;
      font-weight: 600;
      text-align: center;
      transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrapper .slide-controls {
      position: relative;
      display: flex;
      height: 50px;
      width: 100%;
      overflow: hidden;
      margin: 30px 0 10px 0;
      justify-content: space-between;
      border: 1px solid lightgrey;
      border-radius: 50px;
    }

    .slide-controls .slide {
      height: 100%;
      width: 100%;
      color: #fff;
      font-size: 14px;
      font-weight: 500;
      text-align: center;
      line-height: 48px;
      cursor: pointer;
      z-index: 1;
      transition: all 0.6s ease;
    }

    .slide-controls label.signup {
      color: #000;
    }

    .slide-controls .slider-tab {
      position: absolute;
      height: 100%;
      width: 50%;
      left: 0;
      z-index: 0;
      border-radius: 50px;
      background: #51D6B5;
      transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    input[type="radio"] {
      display: none;
    }

    #signup:checked~.slider-tab {
      left: 50%;
    }

    #signup:checked~label.signup {
      color: #fff;
      cursor: default;
      user-select: none;
    }

    #signup:checked~label.login {
      color: #51D6B5;
    }

    #login:checked~label.signup {
      color: #51D6B5;
    }

    #login:checked~label.login {
      cursor: default;
      user-select: none;
    }

    .wrapper .form-container {
      width: 100%;
      overflow: hidden;
    }

    .form-container .form-inner {
      display: flex;
      width: 200%;
    }

    .form-container .form-inner form {
      width: 50%;
      transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .form-inner form .field {
      height: 50px;
      width: 100%;
      margin-top: 20px;
    }

    .form-inner form .field input {
      height: 100%;
      width: 100%;
      outline: none;
      padding-left: 15px;
      border-radius: 50px;
      border: 1px solid lightgrey;
      border-bottom-width: 2px;
      font-size: 14px;
      transition: all 0.3s ease;
    }

    .form-inner form .field input:focus {
      border-color: #51D6B5;
      /* box-shadow: inset 0 0 3px #fb6aae; */
    }

    .form-inner form .field input::placeholder {
      color: #999;
      transition: all 0.3s ease;
    }

    form .field input:focus::placeholder {
      color: #b3b3b3;
    }

    .form-inner form .pass-link {
      margin-top: 5px;
    }

    .form-inner form .signup-link {
      text-align: center;
      margin-top: 30px;
      font-size: 14px;
    }

    .form-inner form .pass-link a,
    .form-inner form .signup-link a {
      color: #51D6B5;
      text-decoration: none;
      font-size: 14px;
    }

    .form-inner form .pass-link a:hover,
    .form-inner form .signup-link a:hover {
      text-decoration: underline;
    }

    form .btn {
      height: 50px;
      width: 100%;
      border-radius: 50px;
      position: relative;
      overflow: hidden;
    }

    form .btn .btn-layer {
      height: 100%;
      width: 300%;
      position: absolute;
      left: -100%;
      background: #51D6B5;
      border-radius: 50px;
      transition: all 0.4s ease;
      ;
    }

    form .btn:hover .btn-layer {
      left: 0;
    }

    form .btn input[type="submit"] {
      height: 100%;
      width: 100%;
      z-index: 1;
      position: relative;
      background: none;
      border: none;
      color: #fff;
      padding-left: 0;
      border-radius: 50px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
    }
  </style>

  <style>
    .button {
      background-color: #51D6B5;
      border: none;
      color: white;
      padding: 8px;
      padding-left: 50px;
      padding-right: 50px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 13px;
      margin: 4px 2px;
      float: right;
      /* border-radius: 18px; */
    }

    .button4 {
      border-radius: 18px;
    }

    .button2 {
      border-radius: 18px;
    }
  </style>


</head>

<div class="loader">
</div>



<body>



  <div id="flash-gagal" data-flash="<?= $this->session->flashdata('gagal'); ?>"></div>
  <div id="flash" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>


  <div class="container register" style="margin-left: 30px; margin-right: 30px;">
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-3 col-sm-12 register-left">
        <center>
          <h3 class="text-white" style="font-family: sans-serif;"><b>REKRUTMEN ONLINE</b></h3>
        </center>
        <center>
          <img class="img-thumbnail login-logo" src="<?= base_url() ?>assets/depan/assets/img/logo-bmi.svg" alt="" style="width: 65%;" />
          <img class="img-thumbnail login-logo mt-1" src="<?= base_url() ?>assets/depan/assets/img/taglines-hd.jpg" alt="" style="width: 65%;" />
        </center>
        <!-- <img class="img-thumbnail login-logo" src="<?= base_url() ?>assets/depan/assets/img/logo-bmi.svg" alt="" style="width: 50%;" /> -->

        <center>
          <p class="text-white mt-1" style="font-size: 13px;">PT. Bumi Menara Internusa Makassar</p>
        </center>
      </div>

      <div class="wrapper">
        <div class="title-text">
          <div class="title login">
            Form Login
          </div>
          <div class="title signup">
            Form Registrasi
          </div>
        </div>
        <div class="form-container">




          <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Registrasi</label>
            <div class="slider-tab"></div>
          </div>

          <div class="form-inner">


            <form action="<?= base_url('loggin') ?>" class="login" method="post">
              <br>
              <br>
              <br>
              <?php
              echo $this->session->flashdata('pesan');
              ?>
              <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div> -->

              <div class="field">
                <label for="alamat_email"><i class="fa fa-user"></i> Email</label>
                <input type="text" name="alamat_email" placeholder="Alamat email" value="<?= set_value('alamat_email') ?>" autocomplete="off" required>


              </div>
              <div class="field mt-5">
                <label for="password"><i class="fa fa-key"></i> Password</label>
                <input type="password" name="password" placeholder="Password" value="<?= set_value('password') ?>" autocomplete="off" required>



              </div>

              <div class="mt-5">
                <button class="button button2" type="submit">Login</button>
                <!-- <a href="" class="btn btn-success" id="btn-hapus"></a> -->
              </div>
              <br>
              <br>
              <br>
              <br>
              <div class="mt-3 ml-3">
                <p style="text-align: center; font-size: 14px;">Lupa Password? <a href="<?= base_url('reset') ?>"> Reset password</a></p>

              </div>
            </form>

            <form method="" action="" class="signup">

              <!-- <center>
                <div class="saveloader">
                  <img src="<?= base_url() ?>assets/loading1.gif" alt="">
                  <br><b>Mohon tunggu......</b>
                </div>
              </center> -->

              <div class="field">
                <label for="no_ktp"><i class="fa fa-id-card"></i> Nomor Kartu Tanda Penduduk / KTP</label>
                <input type="text" id="no_ktp" name="no_ktp" maxlength="16" onkeypress="return hanyaAngka(event)" placeholder="Nomor Induk Kependudukan / NIK" autocomplete="off">


              </div>

              <div class="row mt-3">
                <div class="field">
                  <label for="nama_lengkap"><i class="fa fa-address-book"></i> Nama Lengkap</label>
                  <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama lengkap sesuai KTP" autocomplete="off">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mt-3">
                  <div class="field">
                    <label for="no_telp"><i class="fa fa-phone-square"></i> No Telepon</label>
                    <input type="text" id="no_telp" name="no_telp" maxlength="13" onkeypress="return hanyaAngka(event)" placeholder="Nomor Handphone yang aktif, Cth : 0821xxxxxxx">
                  </div>
                </div>
                <div class="col-md-6 mt-3">
                  <div class="field">
                    <label for="alamat_email"><i class="fa fa-envelope"></i> Alamat Email</label>
                    <input type="text" id="alamat_email" name="alamat_email" placeholder="Alamat email yang aktif">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mt-3">
                  <div class="field">
                    <label for="password"><i class="fa fa-key"></i> Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-6 mt-3">
                  <div class="field">
                    <label for="password_conf"><i class="fa fa-key"></i> Ulangi Password</label>
                    <input type="password" id="password_conf" name="password_conf" placeholder="Ulangi password" autocomplete="off">
                  </div>
                </div>
              </div>
              <br>
              <div class="mt-4">
                <button id="simpan" class="button button4" type="submit">Register</button>
              </div>
              <br>
              <div class="mt-5 ml-3">
                <p style="text-align: center; font-size: 14px;">Belum menerima link aktivasi? <a href="<?= base_url('resend-email') ?>"> Kirim Ulang</a></p>
              </div>
            </form>
          </div>

          <!-- <div wire:loading wire:target="simpan">
            Processing Payment...
          </div> -->

        </div>
      </div>
    </div>

  </div>

  <!-- JQuery -->
  <script src="<?= base_url() ?>assets/lib/js/jquery.min.js"></script>

  <!-- bootsrap -->
  <script src="<?= base_url() ?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="<?= base_url() ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>-->
  <script src="<?= base_url() ?>assets/lib/bootstrap/js/popper.min.js"></script>

  <!-- Sweetalert -->
  <script src="<?= base_url() ?>assets/lib/js/sweetalert2.min.js"></script>
  <script src="<?= base_url() ?>assets/lib/js/sweetalert2.all.min.js"></script>
  <script src="<?= base_url() ?>assets/lib/js/myscript.js"></script>

  <script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (() => {
      loginForm.style.marginLeft = "-50%";
      loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (() => {
      loginForm.style.marginLeft = "0%";
      loginText.style.marginLeft = "0%";
    });
    // signupLink.onclick = (() => {
    //   signupBtn.click();
    //   return false;
    // });
  </script>

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

  <script>
    window.addEventListener("load", () => {

      const loader = document.querySelector(".loader");

      loader.classList.add("loader--hidden");

      loader.addEventListener("transitioned", () => {
        document.body.removeChild(document.querySelector(".loader"));
      });
    });
  </script>
  <script type="text/javascript">
    $(window).load(function() {
      $("#loader").hide();
    });

    $("#nama_lengkap").keyup(function() {
      $(this).val($(this).val().toUpperCase());
    });
  </script>

  <script>
    $(document).ready(function() {
      $('#simpan').click(function(e) {
        e.preventDefault();
        var no_ktp = $('#no_ktp').val();
        var nama_lengkap = $('#nama_lengkap').val();
        var no_telp = $('#no_telp').val();
        var alamat_email = $('#alamat_email').val();
        var password = $('#password').val();
        var password_conf = $('#password_conf').val();

        if (no_ktp == "") {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'No. KTP/NIK belum diisi !'
          })
        } else if (no_ktp !== "" && no_ktp.length !== 16) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'NIK/No.KTP harus berupa angka 16 digit !'
          })

        } else if (nama_lengkap == "") {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Nama Lengkap belum diisi !'
          })
        } else if (no_telp == "") {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'No Telp belum diisi !'
          })
        } else if (no_telp !== "" && no_telp.length < 10) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'No. Telp/HP minimal 10 digit !'
          })
        } else if (!ValidateEmail(alamat_email)) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Alamat email tidak valid !'
          })
        } else if (password == "") {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password belum diisi !'
          })
        } else if (password !== "" && password.length < 6) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Passwords minimal 6 karakter !'
          })

        } else if (password_conf == "") {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Ulangi Password belum diisi !'
          })
        } else if (password_conf !== "" && password_conf != password) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Ulangi Password tidak sama dengan password !'
          })

        } else if (password_conf !== "" && !ValidatePassword(password_conf)) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password Baru tidak cukup aman, cobalah pakai kombinasi angka atau huruf kapital pada password anda !'
          })
        } else {
          // ajax
          $.ajax({
            url: "<?php echo base_url() ?>" + "register",
            // url: '<?= base_url() ?>register',
            type: "POST",
            data: {
              no_ktp: no_ktp,
              nama_lengkap: nama_lengkap,
              no_telp: no_telp,
              alamat_email: alamat_email,
              password: password,
              password_conf: password_conf,
            },
            //   success: function(msg) {
            //     if (msg == "gagal") {
            //       $("#flash-gagal").show();
            //     } else if (msg == "sukses") {
            //       $("#flash").show();
            //     } else {
            //       $("#flash-gagal").show;
            //     }
            //     // $("#saveloader").hide();
            //   }
            // });
            // location.reload();
            success: function(msg) {
              if (msg == "gagal") {
                // $("#flash-gagal").show();
                location.reload();
              } else if (msg == "sukses") {
                // $("#flash").show();
                location.reload();
              } else {
                // $("#flash-gagal").show();
                location.reload();
              }
              //   $("#saveloader").hide();
            }
          });
          location.reload();
        }

      });

      function ValidateEmail(email) {
        var validRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (email.match(validRegex)) {
          return true;
        } else {
          return false;
        }
      }

      // validasi password
      function ValidatePassword(password) {
        var strongRegex = new RegExp("^(?=.{10,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{8,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        if (password.length == 0) {
          return false;
        } else if (false == enoughRegex.test(password)) {
          return false;
        } else if (strongRegex.test(password)) {
          return true;
        } else if (mediumRegex.test(password)) {
          return true;
        } else {
          return false;
        }
      }



    });
  </script>


  <script>
    function hanyaAngka(event) {
      var angka = (event.which) ? event.which : event.keyCode
      if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
        return false;
      return true;
    }

    // function hanyaAngka(event) {
    //   var angka = (event.which) ? event.which : event.keyCode
    //   if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
    //     return false;
    //   return true;
    // }
  </script>

  <!-- <script>
    function hanyaAngka(event) {
      var angka = (event.which) ? event.which : event.keyCode
      if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
        return false;
      return true;
    }
  </script> -->

  <!-- <script>
    function hanyaNomor(event) {
      var angka = (event.which) ? event.which : event.keyCode
      if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
        return false;
      return true;
    }
  </script> -->

</body>