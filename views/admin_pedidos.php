<?php

session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: login.php");
  exit();
}

include('header.php');
include('../db/conexion.php');

// Consulta de pedidos
$sql = "SELECT * FROM pedidos ORDER BY fecha_registro DESC";
$result = $conn->query($sql);
?>

<h2 class="text-center mb-4">Pedidos Registrados</h2>

<?php if ($result->num_rows > 0): ?>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Tipo Doc</th>
                    <th>Número</th>
                    <th>Nombre</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Menú</th>
                    <th>Servicio</th>
                    <th>Fecha</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['tipo_documento'] ?></td>
                        <td><?= $row['numero_documento'] ?></td>
                        <td><?= $row['nombre_completo'] ?></td>
                        <td><?= $row['celular'] ?></td>
                        <td><?= $row['correo'] ?></td>
                        <td><?= $row['menu'] ?></td>
                        <td><?= $row['servicio'] ?></td>
                        <td><?= $row['fecha_registro'] ?></td>
                        <td>
                            <a href="editar_pedido.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                        </td>
                        <td>
                            <a href="../controllers/eliminar_pedido.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger"
                                onclick="return confirm('¿Estás seguro de eliminar este pedido?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <p class="text-center">No hay pedidos registrados aún.</p>
<?php endif; ?>

<?php
$conn->close();
include('footer.php');
?>