<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class EspecialidadModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "especialidad"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveEspecialidad($nombre, $descripcion)
    {
        try {
            $sql = "INSERT INTO $this->table (nombre, descripcion) VALUES (:nombre, :descripcion)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar la especialidad>" . $ex->getMessage();
        }
    }

    public function getEspecialidad($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE idEspecialidad=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener la especialidad>" . $ex->getMessage();
        }
    }

    public function editEspecialidad($id, $nombre, $descripcion)
    {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre, descripcion=:descripcion WHERE idEspecialidad=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar la especialidad>" . $ex->getMessage();
        }
    }

    public function removeEspecialidad($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE idEspecialidad=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar la especialidad: " . $ex->getMessage();
            return false;
        }
    }
}