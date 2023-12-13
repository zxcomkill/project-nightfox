<?php
session_start();
require_once('connect.php');

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    $_SESSION['error_fill'] = "กรุณากรอกข้อมูลให้ครบถ้วน";
    header('location: ../login.php');
    exit;
  } else {
    $select_stmt = $conn->prepare("SELECT COUNT(username) AS count_username, password FROM users WHERE username = :username");
    $select_stmt->bindParam(':username', $username);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

    if ($row['count_username'] == 0) {
      $_SESSION['error_username'] = "ไม่พบชื่อผู้ใช้ในระบบ";
      header('location: ../login.php');
      exit;
    } else {
      if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['is_logged_in'] = true;
        header('location: ../index.php');
      } else {
        $_SESSION['error_psw'] = "รหัสผ่านไม่ถูกต้อง";
        header('location: ../login.php');
        exit;
      }
    }
  }
}
