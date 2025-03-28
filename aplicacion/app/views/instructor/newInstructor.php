<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/instructor/view"><button>←</button></a>
    </div>
    <form action="/instructor/create" method="post">
        <div class="form-group">
            <label for="">Nombre del Instructor:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Contraseña:</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Especialidad:</label>
            <select name="fkIdEspecialidad" id="fkIdEspecialidad" class="form-control" required>
                <option value="">Seleccione una Especialidad</option>
                <?php

                if (isset($especialidad) && is_array($especialidad)) {
                    foreach ($especialidad as $especialidad) {
                        echo "<option value='$especialidad->idEspecialidad'>$especialidad->nombre</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group-button">
            <button type="submit">Guardar</button>
        </div>
    </form>
</div>