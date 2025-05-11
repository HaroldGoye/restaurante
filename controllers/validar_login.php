<?php
session_start();
include '../db/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM usuarios WHERE username = ? AND password = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $_SESSION['usuario'] = $username;
    header("Location: ../views/admin_pedidos.php");
    exit();
  } else {
    echo "<script>alert('Credenciales incorrectas'); window.location.href='../views/login.php';</script>";
  }

  $stmt->close();
  $conn->close();
}
?>
