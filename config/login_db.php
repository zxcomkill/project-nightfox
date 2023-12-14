<?php
session_start();
require_once('connect.php');

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    $_SESSION['title'] = "ผิดพลาด";
    $_SESSION['text'] = "กรุณากรอกข้อมูลให้ครบทุกช่อง";
    $_SESSION['icon'] = "error";
    header('location: ../login.php');
    exit;
  } else {
    $select_stmt = $conn->prepare("SELECT COUNT(username) AS count_username, password FROM users WHERE username = :username");
    $select_stmt->bindParam(':username', $username);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

    if ($row['count_username'] == 0) {
      $_SESSION['title'] = "ผิดพลาด";
      $_SESSION['text'] = "ไม่พบชื่อผู้ใช้ในระบบ";
      $_SESSION['icon'] = "error";
      header('location: ../login.php');
      exit;
    } else {
      if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['icon'] = "success";
        $_SESSION['is_logged_in'] = true;
        header('location: ../index.php');
      } else {
        $_SESSION['title'] = "ผิดพลาด";
        $_SESSION['text'] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        $_SESSION['icon'] = "error";
        header('location: ../login.php');
        exit;
      }
    }
  }
}
