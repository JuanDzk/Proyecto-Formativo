<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class MomentosAprendizajeModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "momentosaprendizaje"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveMomentosAprendizaje($nombre)
    {
        try {
            $sql = "INSERT INTO $this->table (nombre) VALUES (:nombre)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el momento de aprendizaje>" . $ex->getMessage();
        }
    }

    public function getMomentosAprendizaje($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE idMomentosAprendizaje=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el momento de aprendizaje>" . $ex->getMessage();
        }
    }

    public function editMomentosAprendizaje($id, $nombre)
    {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre WHERE idMomentosAprendizaje=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el momento de aprendizaje>" . $ex->getMessage();
        }
    }

    public function removeMomentosAprendizaje($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE idMomentosAprendizaje=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el momento de aprendizaje: " . $ex->getMessage();
            return false;
        }
    }
}