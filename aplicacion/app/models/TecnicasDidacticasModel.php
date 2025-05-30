<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class TecnicasDidacticasModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "tecnicasdidacticas"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveTecnicasDidacticas($nombre, $descripcion)
    {
        try {
            $sql = "INSERT INTO $this->table (nombre, descripcion) VALUES (:nombre, :descripcion)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar la técnica didáctica>" . $ex->getMessage();
        }
    }

    public function getTecnicasDidacticas($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE idTecnicasDidacticas=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener la técnica didáctica>" . $ex->getMessage();
        }
    }

    public function editTecnicasDidacticas($id, $nombre, $descripcion)
    {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre, descripcion=:descripcion WHERE idTecnicasDidacticas=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar la técnica didáctica>" . $ex->getMessage();
        }
    }

    public function removeTecnicasDidacticas($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE idTecnicasDidacticas=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar la técnica didáctica: " . $ex->getMessage();
            return false;
        }
    }
}