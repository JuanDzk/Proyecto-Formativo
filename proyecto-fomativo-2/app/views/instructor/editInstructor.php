<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/instructor/view"><button>←</button></a>
    </div>
    <form action="/instructor/update" method="post">
        <div class="form-group">
            <label for="">ID del Instructor:</label>
            <input type="text" readonly value="<?php echo $instructor->idInstructor ?>" name="id" id="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nombre del Instructor:</label>
            <input type="text" value="<?php echo $instructor->nombre ?>" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Contraseña:</label>
            <input type="password" value="<?php echo $instructor->password ?>" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email:</label>
            <input type="email" value="<?php echo $instructor->email ?>" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Teléfono:</label>
            <input type="text" value="<?php echo $instructor->telefono ?>" name="telefono" id="telefono" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Especialidad:</label>
            <input type="text" value="<?php echo $instructor->fkIdEspecialidad ?>" name="fkIdEspecialidad" id="fkIdEspecialidad" class="form-control">
        </div>
        <div class="form-group-button">
            <button type="submit">Editar</button>
        </div>
    </form>
</div>