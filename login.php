
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Anggota</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link href='' rel='shortcut icon'>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="asset/util.css">
  <link rel="stylesheet" type="text/css" href="asset/main.css">
  <link rel="stylesheet" href="asset/style.css">
  <!--===============================================================================================-->
</head>


<body>
  <form action="login_proses.php" method="post">
    <div class="limiter">
      <div class="container-login100">
        <div style="padding-top:50px" class="wrap-login100">
          <div style="width: 80% ;padding-left: 180px" class="login100-pic js-tilt" data-tilt>
            <a href="https://dharma-data.com" class="gambar"><img src="image/dharma-logo1.webp" alt="Your LOGO"></a>
          </div>
          <form class="login100-form validate-form">
            <span class="login100-form-title" style="margin-top: 30px;">
              Selamat Datang
            </span>
            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
              <input class="input100" type="text" name="username" placeholder="Username">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Password is required">
              <input class="input100" type="password" name="password" placeholder="Password">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>

            <div class="container-login100-form-btn">
              <button class="login100-form-btn">
                Login
              </button>
            </div>

            <div class="text-center">
              <span class="txt1">
              </span>
              <br><br><br>
              <a class="txt2" href="https://me-qr.com/l/lupa-password">
                <h5 class="mb-5">Lupa Password</h5>
              </a>
            </div>
            <div class="text-center">
              <br><br><br>
              <a class="txt2" href="member-grup/pendaftaran_member">
                <h5>Daftar</h5>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </form>

  <!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script>
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>
  <!-- <script>
    setInterval(() => {

        window.location.href = '../maintenance/server-maintenance';

    }, 0, 3);
</script> -->
</body>

</html>