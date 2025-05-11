<?php
include '../db/conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM pedidos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: ../views/admin_pedidos.php");
    } else {
        echo "Error al eliminar.";
    }

    $stmt->close();
    $conn->close();
}
?>