<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Restaurante Goyeneche</title>
  <link rel="stylesheet" href="/restaurante/assets/css/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/restaurante/index.php">Restaurante Goyeneche</a>
      <div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="/restaurante/views/quienes_somos.php">Quiénes Somos</a></li>
          <li class="nav-item"><a class="nav-link" href="/restaurante/views/servicios.php">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="/restaurante/views/registro.php">Registro</a></li>
          <li class="nav-item"><a class="nav-link" href="/restaurante/views/admin_pedidos.php">Registro de Pedidos</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="/restaurante/views/contacto.php">Contáctenos</a></li>
          <?php if (isset($_SESSION['usuario'])): ?>
            <a href="/restaurante/views/logout.php" class="btn btn-outline-light">Cerrar sesión</a>
          <?php endif; ?>

        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-4">