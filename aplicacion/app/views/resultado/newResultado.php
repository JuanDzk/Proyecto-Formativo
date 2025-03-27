<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/resultado/view"><button>←</button></a>
    </div>
    <form action="/resultado/create" method="post">
    <div class="form-group">
        <label for="">ID de la Competencia:</label>
            <select name="fkIdCompetencia" id="fkIdCompetencia" class="form-control" required>
                <option value="">Seleccione una Competencia</option>
                <?php

                if (isset($competencia) && is_array($competencia)) {
                    foreach ($competencia as $competencia) {
                        echo "<option value='$competencia->idCompetencia'>$competencia->nombre</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Confirme el resultado:</label>
            <input type="text" name="txtResultado" id="txtResultado" class="form-control">
        </div>
        <div class="form-group-button">
            <button type="submit">Guardar</button>
        </div>
    </form>
</div>