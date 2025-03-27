
<div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/programaFormacion/view"><img src="/img/back.svg"></a>
                </div>
            </div>
            <div class="info">
                <form action="/programaFormacion/create" method="post">
                    <div class="form-group">
                        <label for="">ID competencia:</label>
                        <input type="text" name="txtCodigo" id="txtCodigo" class="form-control" required>
                        
                        <label for="">Programa Formacion:</label>
                        <select name="fkidprograamaformacion" id="fkidprogramaformacion" class="form-control" required>
                            <option value="">Seleccione un Centro de Formación</option>
                            <?php
                                if (isset($programa) && is_array($programa)) {
                                    foreach ($programa as $programa) {
                                        echo "<option value='$programa->id'>$programa->nombre</option>";
                                    }
                                }
                            ?>
                    
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    