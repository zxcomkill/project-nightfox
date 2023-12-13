<?php
session_start();
require_once('config/connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <!-- Bootstrap 5 CSS -->
  <link href="assets/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- FontAwesome CSS -->
  <link href="assets/fontawesome-free-6.5.1-web/css/all.min.css" rel="stylesheet" />
  <!-- style CSS -->
  <link href="assets/css/main.css" rel="stylesheet" />
</head>

<body class="d-flex align-items-center justify-content-center py-4">
  <main class="form-login w-100">
    <form action="config/register_db.php" method="post">
      <div class="card">
        <div class="card-body font-light">
          <div class="text-center">
            <i class="fa-solid fa-circle-user" style="color: #7a7fff; font-size:100px;"></i>
            <h3 class="my-2 font-medium">สมัครสมาชิก</h3>
          </div>

          <!-- Error fill message -->
          <?php if (isset($_SESSION['error_fill'])) { ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['error_fill']; ?>
            </div>
          <?php } ?>
          <!-- Error user exists message -->
          <?php if (isset($_SESSION['exists_username'])) { ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['exists_username']; ?>
            </div>
          <?php } ?>
          <!-- Error password not match message -->
          <?php if (isset($_SESSION['error_psw'])) { ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['error_psw']; ?>
            </div>
          <?php } ?>
          <!-- Error insert message -->
          <?php if (isset($_SESSION['error_insert'])) { ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['error_insert']; ?>
            </div>
          <?php } ?>

          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating my-1">
            <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password">
            <label for="floatingInput">Password</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="c_password">
            <label for="floatingInput">Confirm Password</label>
          </div>
          <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-primary w-100 py-2" name="submit">Register</button>
          </div>
        </div>
      </div>
      <div class="text-center mt-1">
        <p>Do you have an account? <a href="login.php" class="font-regular">Log in</a></p>
      </div>
    </form>
  </main>



  <!-- Bootstrap 5 JS -->
  <script src="assets/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!-- End session message -->
<?php
if (isset($_SESSION['error_fill']) || isset($_SESSION['exists_username']) || isset($_SESSION['error_psw']) || isset($_SESSION['error_insert'])) {
  unset($_SESSION['error_fill']);
  unset($_SESSION['exists_username']);
  unset($_SESSION['error_psw']);
  unset($_SESSION['error_insert']);
}
?>