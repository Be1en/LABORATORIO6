<!-- Modal nuevo registro -->
<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="nuevoModalLabel">Agregar Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="guarda.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="id" class="form-label">ID:</label>
                        <input type="number" name="id" id="id" class="form-control" required placeholder="Ingrese su Codigo">
                    </div>

                    <div class="mb-3">
                        <label for="nombres" class="form-label">Nombre:</label>
                        <input type="text" name="nombres" id="nombres" class="form-control" required placeholder="Ingrese su Nombre">
                    </div>

                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control" required placeholder="Ingrese su Apellido">
                    </div>
                    
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="text" name="correo" id="correo" class="form-control" required placeholder="Ingrese su Correo">
                    </div>

                    <div class="mb-3">
                        <label for="dni" class="form-label">DNI:</label>
                        <input type="number" name="dni" id="dni" class="form-control" required placeholder="Ingrese su DNI">
                    </div>

                    <div class="mb-3">
                        <label for="celular" class="form-label">Celular:</label>
                        <input type="number" name="celular" id="celular" class="form-control" required placeholder="Ingrese su Celular">
                    </div>

                    <div class="mb-3">
                        <label for="fecha_nac" class="form-label">Fecha de Nac.:</label>
                        <input type="date" name="fecha_nac" id="fecha_nac" class="form-control" required >
                    </div>

                    <div class="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>