<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="style.css">
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
      background: #41a900;
    }

    ::selection {
      background: #41a900;
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
      background: #41a900;
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
      color: #41a900;
    }

    #login:checked~label.signup {
      color: #41a900;
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
      border-color: #41a900;
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
      color: #41a900;
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
      background: #41a900;
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
      background-color: #41a900;
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
    }

    .button4 {
      border-radius: 18px;
    }
  </style>



</head>

<body>

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
            Form Kirim Ulang Aktivasi
          </div>
          <div class="title signup">
            From Registrasi
          </div>
        </div>
        <div class="form-container">

          <div class="form-inner">
            <form action="#" class="login">

              <div class="field">
                <label for=""><i class="fa fa-envelope"></i> Alamat Email</label>
                <input type="text" placeholder="Alamat email" required>
              </div>

              <div class="mt-5">
                <button class="button button4">Kirim</button>
              </div>
              <br>
              <div class="mt-5 ml-3">
                <p style="text-align: center; font-size: 14px;">Belum punya akun? <a href="<?= base_url('login') ?>"> Registrasi disini</a></p>
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>

  </div>
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
    signupLink.onclick = (() => {
      signupBtn.click();
      return false;
    });
  </script>

</body>