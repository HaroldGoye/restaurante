<?php
include '../db/conexion.php';

$id = $_POST['id'];
$tipo_documento = $_POST['tipo_documento'];
$numero_documento = $_POST['numero_documento'];
$nombre_completo = $_POST['nombre_completo'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$menu = $_POST['menu'];
$servicio = $_POST['servicio'];

$sql = "UPDATE pedidos SET tipo_documento=?, numero_documento=?, nombre_completo=?, celular=?, correo=?, menu=?, servicio=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssi", $tipo_documento, $numero_documento, $nombre_completo, $celular, $correo, $menu, $servicio, $id);

if ($stmt->execute()) {
  header("Location: ../views/admin_pedidos.php");
} else {
  echo "Error al actualizar el pedido.";
}

$stmt->close();
$conn->close();
?>
