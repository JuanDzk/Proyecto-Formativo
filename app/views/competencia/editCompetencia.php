        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/programaFormacion/view"><img src="/img/back.svg"></a>
                </div>
            </div>
            <div class="info">
                <form action="/programaFormacion/update" method="post">
                    <div class="form-group">
                        <label for="">ID del Programa:</label>
                        <input type="text" readonly value="<?php echo $programa->id ?>" name="txtId" id="txtId" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Código del Programa:</label>
                        <input type="text" value="<?php echo $programa->codigo ?>" name="txtCodigo" id="txtCodigo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nombre del Programa:</label>
                        <input type="text" value="<?php echo $programa->nombre ?>" name="txtNombre" id="txtNombre" class="form-control">
                    </div>
                    <div class="form-group">
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
                        <button type="submit">Editar</button>
                    </div>
                </form>
            </div>
        </div>