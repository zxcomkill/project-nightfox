<?php
session_start();
require_once('config/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>

  <!-- Bootstrap 5 CSS -->
  <link href="assets/vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- FontAwesome CSS -->
  <link href="assets/vendor/fontawesome-free-6.5.1-web/css/all.min.css" rel="stylesheet" />
  <!-- SweetAlert2 CSS -->
  <link href="assets/vendor/sweetalert2-dist/sweetalert2.min.css" rel="stylesheet" />
  <!-- style CSS -->
  <link href="assets/css/main.css" rel="stylesheet" />
</head>

<body class="d-flex align-items-center justify-content-center py-4 ">
  <main class="form-login w-100">
    <form action="config/login_db.php" method="post">
      <div class="card">
        <div class="card-body font-light">
          <div class="text-center">
            <i class="fa-solid fa-circle-user" style="color: #7a7fff; font-size:100px;"></i>
            <h3 class="my-2 font-medium">Welcome</h3>
          </div>

          <!-- Error fill message -->
          <?php if (isset($_SESSION['error_fill'])) { ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['error_fill']; ?>
            </div>
          <?php } ?>
          <!-- Error user not found message -->
          <?php if (isset($_SESSION['error_username'])) { ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['error_username']; ?>
            </div>
          <?php } ?>
          <!-- Error incorrect password message -->
          <?php if (isset($_SESSION['error_psw'])) { ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['error_psw']; ?>
            </div>
          <?php } ?>

          <div class="form-floating mb-1">
            <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password">
            <label for="floatingInput">Password</label>
          </div>
          <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-primary w-100 py-2" name="submit">Get started</button>
          </div>
        </div>
      </div>
      <div class="text-center mt-1">
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
    </form>
  </main>



  <!-- Bootstrap 5 JS -->
  <script src="assets/vendor/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 JS -->
  <script src="assets/vendor/sweetalert2-dist/sweetalert2.all.min.js"></script>
</body>

</html>

<!-- End session message -->
<?php
if (isset($_SESSION['error_fill']) || isset($_SESSION['error_username']) || isset($_SESSION['error_psw'])) {
  unset($_SESSION['error_fill']);
  unset($_SESSION['error_username']);
  unset($_SESSION['error_psw']);
}
?>