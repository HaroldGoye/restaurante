<?php
include('header.php');
include('../db/conexion.php');

if (!isset($_GET['id'])) {
  echo "ID no proporcionado.";
  exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM pedidos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$pedido = $result->fetch_assoc();
?>

<h2 class="text-center mb-4">Editar Pedido</h2>

<form action="../controllers/actualizar_pedido.php" method="POST" class="row g-3">
  <input type="hidden" name="id" value="<?= $pedido['id'] ?>">
  <div class="col-md-4">
    <label class="form-label">Tipo de documento</label>
    <select name="tipo_documento" class="form-select" required>
      <option value="CC" <?= $pedido['tipo_documento'] == 'CC' ? 'selected' : '' ?>>Cédula</option>
      <option value="TI" <?= $pedido['tipo_documento'] == 'TI' ? 'selected' : '' ?>>Tarjeta</option>
      <option value="CE" <?= $pedido['tipo_documento'] == 'CE' ? 'selected' : '' ?>>Extranjería</option>
    </select>
  </div>

  <div class="col-md-4">
    <label class="form-label">Número de documento</label>
    <input type="text" name="numero_documento" value="<?= $pedido['numero_documento'] ?>" class="form-control" required>
  </div>

  <div class="col-md-4">
    <label class="form-label">Nombre completo</label>
    <input type="text" name="nombre_completo" value="<?= $pedido['nombre_completo'] ?>" class="form-control" required>
  </div>

  <div class="col-md-6">
    <label class="form-label">Celular</label>
    <input type="text" name="celular" value="<?= $pedido['celular'] ?>" class="form-control" required>
  </div>

  <div class="col-md-6">
    <label class="form-label">Correo</label>
    <input type="email" name="correo" value="<?= $pedido['correo'] ?>" class="form-control" required>
  </div>

  <div class="col-md-6">
    <label class="form-label">Menú</label>
    <select name="menu" class="form-select" required>
      <option value="Desayuno" <?= $pedido['menu'] == 'Desayuno' ? 'selected' : '' ?>>Desayuno</option>
      <option value="Almuerzo" <?= $pedido['menu'] == 'Almuerzo' ? 'selected' : '' ?>>Almuerzo</option>
      <option value="Cena" <?= $pedido['menu'] == 'Cena' ? 'selected' : '' ?>>Cena</option>
    </select>
  </div>

  <div class="col-md-6">
    <label class="form-label">Servicio</label>
    <select name="servicio" class="form-select" required>
      <option value="En restaurante" <?= $pedido['servicio'] == 'En restaurante' ? 'selected' : '' ?>>En restaurante</option>
      <option value="Para llevar" <?= $pedido['servicio'] == 'Para llevar' ? 'selected' : '' ?>>Para llevar</option>
    </select>
  </div>

  <div class="col-12 text-center">
    <button type="submit" class="btn btn-success">Actualizar Pedido</button>
  </div>
</form>

<?php include('footer.php'); ?>
