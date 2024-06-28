<?php
session_start();
if (isset($_SESSION['idUser'])) {
  header('Location: home.php');
  exit();
}

$error = '';
if (isset($_SESSION['error'])) {
  $error = $_SESSION['error'];
  unset($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>

<body>
  <h2>Welcome, <?= htmlspecialchars($_SESSION['email']) ?>!</h2>
  <p><a href="logout.php">Logout</a></p>
</body>

</html>