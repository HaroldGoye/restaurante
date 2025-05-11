<?php
include '../db/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tipo_documento = $_POST['tipo_documento'];
  $numero_documento = $_POST['numero_documento'];
  $nombre_completo = $_POST['nombre_completo'];
  $celular = $_POST['celular'];
  $correo = $_POST['correo'];
  $menu = $_POST['menu'];
  $servicio = $_POST['servicio'];

  $sql = "INSERT INTO pedidos (tipo_documento, numero_documento, nombre_completo, celular, correo, menu, servicio) 
          VALUES (?, ?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssssss", $tipo_documento, $numero_documento, $nombre_completo, $celular, $correo, $menu, $servicio);

  if ($stmt->execute()) {
    echo "<script>alert('Pedido registrado exitosamente.'); window.location.href='../index.php';</script>";
  } else {
    echo "<script>alert('Error al registrar el pedido.'); window.history.back();</script>";
  }

  $stmt->close();
  $conn->close();
}
?>