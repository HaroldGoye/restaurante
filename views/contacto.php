<?php include('header.php'); ?>

<h2 class="text-center mb-4">Contáctenos</h2>

<form class="row g-3">

    <div class="col-md-6">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Tu nombre completo" required>
    </div>

    <div class="col-md-6">
        <label for="correo" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="correo" placeholder="tucorreo@ejemplo.com" required>
    </div>

    <div class="col-12">
        <label for="asunto" class="form-label">Asunto</label>
        <input type="text" class="form-control" id="asunto" placeholder="Asunto del mensaje" required>
    </div>

    <div class="col-12">
        <label for="mensaje" class="form-label">Mensaje</label>
        <textarea class="form-control" id="mensaje" rows="5" placeholder="Escribe tu mensaje aquí..."
            required></textarea>
    </div>

    <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary" disabled>Enviar (solo diseño)</button>
        <p class="text-muted mt-2">Este formulario es solo visual, no guarda datos.</p>
    </div>

</form>

<?php include('footer.php'); ?>