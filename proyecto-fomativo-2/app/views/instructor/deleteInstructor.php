<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/instructor/view"><button>←</button></a>
    </div>
    <div class="info">
        <form action="/instructor/remove" method="post">
            <div class="form-group">
                <label for="">ID del Instructor:</label>
                <input type="text" readonly value="<?php echo $instructor->idInstructor ?>" name="id" id="id" class="form-control">
            </div>
            <div class="form-group-button">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>