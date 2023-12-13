<?php
session_start();
require_once('config/connect.php');

if (!isset($_SESSION['is_logged_in'])) {
  header('location: login.php');
  exit;
}
?>
<!-- header -->
<?php include "includes/header.php"; ?>

<!-- content -->
<div class="d-grid align-items-center justify-content-center py-4 ">
  <div class="text-center">
    <h1>Hello, </h1>
    <a href="config/logout.php" class="btn btn-danger">Logout</a>
  </div>
</div>

<!-- footer -->
<?php include "includes/footer.php"; ?>