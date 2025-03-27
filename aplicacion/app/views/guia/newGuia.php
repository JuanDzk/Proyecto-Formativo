<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/guia/view"><button>←</button></a>
    </div>
    <form action="/guia/create" method="post">
        <div class="form-group">
            <label for="">Nombre de la Guía:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Presentación:</label>
            <input type="text" name="presentacion" id="presentacion" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Glosario de Términos:</label>
            <input type="text" name="glosarioTerminos" id="glosarioTerminos" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Referentes Bibliográficos:</label>
            <input type="text" name="referentesBibliograficos" id="referentesBibliograficos" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Razón de Cambio:</label>
            <input type="text" name="razonCambio" id="razonCambio" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Instructor que crea:</label>
            <select name="fkIdInstructor" id="fkIdInstructor" class="form-control" required>
                <option value="">Seleccione un Instructor</option>
                <?php

                if (isset($instructor) && is_array($instructor)) {
                    foreach ($instructor as $instructor) {
                        echo "<option value='$instructor->idInstructor'>$instructor->nombre</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group">
        <label for="">Programa de Formación:</label>
            <select name="fkIdProgramaFormacion" id="fkIdProgramaFormacion" class="form-control" required>
                <option value="">Seleccione un Programa de Formación</option>
                <?php

                if (isset($programa) && is_array($programa)) {
                    foreach ($programa as $programas) {
                        echo "<option value='$programas->idProgramaFormacion'>$programas->nombre</option>";
                    }
                }
                ?>
            </select>
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