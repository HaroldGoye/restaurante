<?php include('header.php'); ?>

<h2>¿Quiénes somos?</h2>
<p>Somos un restaurante familiar con más de 20 años de experiencia...</p>

<div id="carrusel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/images/restaurante1.jpg" class="d-block w-100" alt="Interior del restaurante">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ambiente acogedor</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../assets/images/restaurante2.jpg" class="d-block w-100" alt="Plato">
      <div class="carousel-caption d-none d-md-block">
        <h5>Comida deliciosa</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<?php include('footer.php'); ?>