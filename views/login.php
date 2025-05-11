
<?php
session_start();
if (isset($_SESSION['usuario'])) {
  header("Location: admin_pedidos.php");
  exit();
}
?>

<?php include('header.php'); ?>

<h2 class="text-center">Iniciar Sesión</h2>
<form method="POST" action="../controllers/validar_login.php" class="mx-auto" style="max-width: 400px;">
  <div class="mb-3">
    <label for="username" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary w-100">Ingresar</button>
</form>

<?php include('footer.php'); ?>
