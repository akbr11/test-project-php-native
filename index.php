<?php
session_start();
if (isset($_SESSION['user_id'])) {
  header('Location: dashboard.php');
  exit();
}

$error = '';
if (isset($_SESSION['error'])) {
  $error = $_SESSION['error'];
  unset($_SESSION['error']);
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Masuk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");

    body {
      font-family: "Poppins", sans-serif;
      background: #fff;
    }

    .btn-blue {
      background-color: #01042F;
      color: #fff;
    }

    .btn-blue:hover {
      background-color: #01042F;
      color: #fff;
    }

    .left {
      border-top-left-radius: 80px;
      border-bottom-left-radius: 80px;
    }

    .p-form {
      width: 78%;
    }

    .field-icon {
      float: right;
      margin-left: -40px;
      margin-right: 20px;
      margin-top: -40px;
      position: relative;
      z-index: 2;
    }

    @media only screen and (max-width: 991px) {
      .left {
        border-top-right-radius: 30px;
        border-top-left-radius: 30px;
      }

      .p-form {
        width: 90%;
      }
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row vh-100">
      <div class="col-lg-6 col-md-12 col-sm-12 order-lg-1 order-md-2 order-sm-2 mx-auto">
        <div class="row h-100">
          <div class="col-12 my-auto p-form mx-auto">
            <div class="p-1">
              <div class="d-flex p-1 align-items-center gap-2 mb-4">
                <i class="lni lni-grid-alt text-black" style="font-size: 1.5rem;"></i>
                <h4 class="fw-bold mb-0">Test Project</h4>
              </div>
              <div class="mb-4">
                <h4 class="mb-1">Selamat Datang</h4>
                <p>Silahkan isi email dan kata sandi untuk melanjutkan</p>
              </div>
              <?php if ($error) : ?>
                <p style="color: red;"><?= $error ?></p>
              <?php endif; ?>
              <form class="mb-5" action="proses_login.php" method="post">
                <div class="form-group mb-2">
                  <label for="email" class="fw-bold">
                    Email
                  </label>
                  <input type="email" name="email" class="form-control rounded-4" id="email" placeholder="ex: john.doe@gmail.com">
                </div>
                <div class="form-group mb-2 mt-1">
                  <label for="password" class="fw-bold">
                    Kata Sandi
                  </label>
                  <input type="password" name="password" class="form-control rounded-4" id="password" placeholder="*********">
                </div>
                <button class="btn w-100 btn-blue rounded btn-login rounded-4 fw-bold mt-4" type="submit">
                  MASUK
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 order-lg-2 order-md-1 order-sm-1 mx-auto left shadow d-none d-lg-block" style="background-image: url('./assets/9145828.jpg'); background-repeat: no-repeat; background-position: center;"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>