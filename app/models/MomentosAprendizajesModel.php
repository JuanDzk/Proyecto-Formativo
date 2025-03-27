<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class MomentosAprendizajeModel extends BaseModel
{
    public function __construct(
        ?int $id = null,
        ?string $descripcion = null
    ) {
        $this->table = "momentos_aprendizaje";
        parent::__construct();
    }

    public function saveMomentoAprendizaje($descripcion)
    {
        try {
            $sql = "INSERT INTO $this->table (descripcion) VALUES (:descripcion)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el momento de aprendizaje: " . $ex->getMessage();
        }
    }

    public function getMomentoAprendizaje($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el momento de aprendizaje: " . $ex->getMessage();
        }
    }

    public function editMomentoAprendizaje($id, $descripcion)
    {
        try {
            $sql = "UPDATE $this->table SET descripcion=:descripcion WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el momento de aprendizaje: " . $ex->getMessage();
        }
    }

    public function removeMomentoAprendizaje($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al eliminar el momento de aprendizaje: " . $ex->getMessage();
        }
    }
}
