<?php
session_start();
require_once('config/connect.php');

if (!isset($_SESSION['is_logged_in'])) {
  header('location: login.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Home</title>

  <!-- Bootstrap 5 CSS -->
  <link href="assets/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- FontAwesome CSS -->
  <link href="assets/fontawesome-free-6.5.1-web/css/all.min.css" rel="stylesheet" />
  <!-- style CSS -->
  <link href="assets/css/main.css" rel="stylesheet" />
</head>

<body>

  <div class="d-grid align-items-center justify-content-center py-4 ">
    <div class="text-center">
      <h1>สวัสดีคุณ, </h1>
      <a href="config/logout.php" class="btn btn-danger">Logout</a>
    </div>


  </div>




  <!-- Bootstrap 5 JS -->
  <script src="assets/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>