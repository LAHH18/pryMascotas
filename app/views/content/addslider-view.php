<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="sliderKey" class="form-label">Clave del slider</label>
                    <input type="text" class="form-control" id="sliderKey" value="" readonly>
                </div>
                <div class="mb-3">
                    <label for="sliderImage" class="form-label">Imagen Slider</label>
                    <input class="form-control" type="file" id="sliderImage">
                </div>
                <div class="mb-3">
                    <label for="altText" class="form-label">Texto alternativo</label>
                    <input type="text" class="form-control" id="altText" value="">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Estado</label>
                    <select class="form-select" id="status">
                        <option value="activo" selected>Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Guardar</button>
                    <button type="button" class="btn btn-secondary">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>