<?php
session_start();
require_once('config/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>

  <!-- Bootstrap 5 CSS -->
  <link href="assets/vendor/bootstrap@5.2.3/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome CSS -->
  <link href="assets/vendor/fontawesome-free-6.5.1-web/css/all.min.css" rel="stylesheet">
  <!-- style CSS -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
  <!-- form login -->
  <div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <form action="config/login_db.php" method="post">
      <!-- header -->
      <div class="text-center">
        <i class="fa-solid fa-circle-user" style="color: #7a7fff; font-size:100px;"></i>
        <h3 class="my-4 font-medium">ยินดีต้อนรับ</h3>
      </div>

      <!-- body -->
      <div class="fw-lighter">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
          <label for="floatingInput">ชื่อผู้ใช้</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password">
          <label for="floatingInput">รหัสผ่าน</label>
        </div>
      </div>

      <!-- footer -->
      <div class="d-flex justify-content-center mb-1">
        <button type="submit" class="btn btn-primary w-100 py-2" name="submit">เข้าสู่ระบบ</button>
      </div>
      <div class="d-flex justify-content-center">
        <p class="fw-lighter me-1">ยังไม่มีบัญชีใช่ไหม?</p>
        <a href="register.php">สมัครสมาชิก</a>
      </div>
    </form>
  </div>


  <!-- Bootstrap 5 JS -->
  <script src="assets/vendor/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- FontAwesome JS -->
  <script src="assets/vendor/fontawesome@6.5.1/js/all.min.js"></script>
</body>

</html>

<!-- Alert message -->
<?php if (isset($_SESSION['title'])) { ?>
  <script>
    Swal.fire({
      title: "<?php echo $_SESSION['title']; ?>",
      text: "<?php echo $_SESSION['text']; ?>",
      icon: "<?php echo $_SESSION['icon']; ?>"
    })
  </script>
<?php unset($_SESSION['title']);
} ?>