<div class="container mt-5 mb-4 border border-2 border-dark rounded bg-white">
    <form class="row g-3  p-2 fw-bold" action="<?php echo APP_URL; ?>app/ajax/petAjax.php" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="modulo_mascota" value="añadir">

        <legend class="h2 fw-bold text-warning">Información de la mascota</legend>
        <div class="col-md-6">
            <label class="form-label">Nombre:</label>
            <input type="text" placeholder="Ingrese el nombre" class="form-control" id="nombre" name="txtNombre">
        </div>
        <div class="col-md-6">
            <label class="form-label">Edad:</label>
            <input type="number" placeholder="Ingrese una edad" class="form-control" id="edad" name="txtEdad">
        </div>
        <div class="col-md-6">
            <label class="form-label">Raza:</label>
            <input type="text" placeholder="Ingrese la raza" class="form-control" id="raza" name="txtRaza">
        </div>
        <div class="col-md-6">
            <label class="form-label">Genero:</label>
            
            <select class="form-select" aria-label="Default select example" name="txtGenero">
                <option selected disabled>Seleccione tipo</option>
                <option value="Macho">Macho</option>
                <option value="Hembra">Hembra</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Ubicación:</label>
            <input type="text" placeholder="Ingrese la ubicacion" class="form-control" id="ubicacion" name="txtUbicacion">
        </div> 
        <div class="col-md-6">
            <label class="form-label">Tamaño:</label>
            <input type="number" placeholder="Ingrese el tamaño en cm" class="form-control" id="tamano" name="txtTamano">
        </div> 
        <div class="col-md-6">
            <label class="form-label">Seleccionar una imagen:</label>
            <input class="form-control" type="file" id="imagen" name="txtImagen">
        </div> 
        <label class="form-label">Descripcion:</label>
        <div class="col-12">
            <textarea class="form-control" placeholder="Ingrese una descripcion" id="descripcion" name="txtDescripcion"></textarea>
        </div>
        <div class="col-md-6">
            <label class="form-label">Cuidador:</label>
            <select class="form-select" aria-label="Default select example" name="txtCuidador">
                <option selected disabled>Seleccione al cuidador</option>
                <option value="cuidador1">Rogelio</option>
                <option value="cuidador2">Angel</option>
            </select>
        </div> 
        
        <div class="col-12">
            <button type="submit" class="btn btn-warning">Publicar</button>
        </div>
    </form>
</div>