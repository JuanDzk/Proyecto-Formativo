<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/competencia/view"><button>←</button></a>
    </div>
    <form action="/competencia/create" method="post">
        <div class="form-group">
            <label for="codigo">Código de la Competencia:</label>
            <input type="number" name="codigo" id="codigo" class="form-control">

            <label for="nombre">Nombre de la Competencia:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
            <label for="fkidprogramaformacion">Seleccione un Programa de Formación:</label>
            <select name="fkidprogramaformacion" id="fkidprogramaformacion" class="form-control" required>
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
        <div class="form-group-button">
            <button type="submit">Guardar</button>
        </div>
    </form>
</div>
