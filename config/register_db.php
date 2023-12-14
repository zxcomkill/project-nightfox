<?php
session_start();
require_once('connect.php');

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $c_password = $_POST['c_password'];

  if (empty($username) || empty($password) || empty($c_password)) {
    $_SESSION['title'] = "ผิดพลาด";
    $_SESSION['text'] = "กรุณากรอกข้อมูลให้ครบทุกช่อง!";
    $_SESSION['icon'] = "error";
    header('location: ../register.php');
    exit;
  } else {
    if ($password !== $c_password) {
      $_SESSION['title'] = "ผิดพลาด";
      $_SESSION['text'] = "รหัสผ่านไม่ตรงกัน!";
      $_SESSION['icon'] = "error";
      header('location: ../register.php');
      exit;
    } else {
      $select_stmt = $conn->prepare("SELECT COUNT(username) AS count_username FROM users WHERE username = :username");
      $select_stmt->bindParam(':username', $username);
      $select_stmt->execute();
      $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

      if ($row['count_username'] != 0) {
        $_SESSION['title'] = "ผิดพลาด";
        $_SESSION['text'] = "ชื่อผู้ใช้นี้มีอยู่ในระบบแล้ว!";
        $_SESSION['icon'] = "error";
        header('location: ../register.php');
        exit;
      } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $insert_stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (:username, :password, 'user')");
        $insert_stmt->bindParam(':username', $username);
        $insert_stmt->bindParam(':password', $password);
        $insert_stmt->execute();

        if ($insert_stmt) {
          $_SESSION['username'] = $username;
          $_SESSION['is_logged_in'] = true;
          header('location: ../index.php');
        } else {
          $_SESSION['title'] = "ผิดพลาด";
          $_SESSION['text'] = "เกิดข้อผิดพลาดบางอย่าง...";
          $_SESSION['icon'] = "error";
          header('location: ../register.php');
          exit;
        }
      }
    }
  }
}
