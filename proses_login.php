<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
ob_start(); // Tambahkan ini untuk menangani output buffer

require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $stmt = $con->prepare("SELECT * FROM t_user WHERE email = ?");
  if ($stmt) {
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && $password == $user['password']) {
      $_SESSION['idUser'] = $user['idUser'];
      $_SESSION['email'] = $user['email'];
      header('Location: home.php');
      exit();
    } else {
      $_SESSION['error'] = 'Invalid email or password';
      header('Location: index.php');
      exit();
    }
  } else {
    $_SESSION['error'] = 'Database error: ' . $con->error;
    header('Location: index.php');
    exit();
  }
}
