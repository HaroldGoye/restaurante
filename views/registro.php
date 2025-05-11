<?php include('header.php'); ?>

<h2 class="text-center mb-4">Registrar Pedido</h2>

<form action="../controllers/registrar_pedido.php" method="POST" class="row g-3 needs-validation" novalidate>

  <div class="col-md-4">
    <label for="tipo_documento" class="form-label">Tipo de documento</label>
    <select name="tipo_documento" id="tipo_documento" class="form-select" required>
      <option value="" selected disabled>Seleccione</option>
      <option value="CC">Cédula de ciudadanía</option>
      <option value="TI">Tarjeta de identidad</option>
      <option value="CE">Cédula de extranjería</option>
    </select>
  </div>

  <div class="col-md-4">
    <label for="numero_documento" class="form-label">Número de documento</label>
    <input type="text" name="numero_documento" id="numero_documento" class="form-control" required>
  </div>

  <div class="col-md-4">
    <label for="nombre_completo" class="form-label">Nombre completo</label>
    <input type="text" name="nombre_completo" id="nombre_completo" class="form-control" required>
  </div>

  <div class="col-md-6">
    <label for="celular" class="form-label">Número de celular</label>
    <input type="tel" name="celular" id="celular" class="form-control" required>
  </div>

  <div class="col-md-6">
    <label for="correo" class="form-label">Correo electrónico</label>
    <input type="email" name="correo" id="correo" class="form-control" required>
  </div>

  <div class="col-md-6">
    <label for="menu" class="form-label">Menú seleccionado</label>
    <select name="menu" id="menu" class="form-select" required>
      <option value="" selected disabled>Seleccione</option>
      <option value="Desayuno">Desayuno</option>
      <option value="Almuerzo">Almuerzo</option>
      <option value="Cena">Cena</option>
    </select>
  </div>

  <div class="col-md-6">
    <label for="servicio" class="form-label">Tipo de servicio</label>
    <select name="servicio" id="servicio" class="form-select" required>
      <option value="" selected disabled>Seleccione</option>
      <option value="En restaurante">En restaurante</option>
      <option value="Para llevar">Para llevar</option>
    </select>
  </div>

  <div class="col-12 text-center">
    <button type="submit" class="btn btn-primary">Registrar Pedido</button>
  </div>
</form>

<?php include('footer.php'); ?>