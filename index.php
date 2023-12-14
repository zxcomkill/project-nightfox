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
<!-- navbar -->
<?php include "includes/navbar.php"; ?>

<!-- content -->
<div class="m-3">
  <div class="p-3 d-flex justify-content-center">
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-2">
      <div class="col">
        <div class="p-3 border">Row column</div>
      </div>
      <div class="col">
        <div class="p-3 border">Row column</div>
      </div>
      <div class="col">
        <div class="p-3 border">Row column</div>
      </div>
      <div class="col">
        <div class="p-3 border">Row column</div>
      </div>
      <div class="col">
        <div class="p-3 border">Row column</div>
      </div>
      <div class="col">
        <div class="p-3 border">Row column</div>
      </div>
      <div class="col">
        <div class="p-3 border">Row column</div>
      </div>
      <div class="col">
        <div class="p-3 border">Row column</div>
      </div>

    </div>

  </div>
</div>



<!-- footer -->
<?php include "includes/footer.php"; ?>