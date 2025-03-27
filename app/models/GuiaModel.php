<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class GuiaModel extends BaseModel
{
    public function __construct(
        ?int $id = null,
        ?string $titulo = null,
        ?string $descripcion = null
    ) {
        $this->table = "guia";
        parent::__construct();
    }

    public function saveGuia($titulo, $descripcion)
    {
        try {
            $sql = "INSERT INTO $this->table (titulo, descripcion) VALUES (:titulo, :descripcion)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':titulo', $titulo, PDO::PARAM_STR);
            $statement->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar la guía: " . $ex->getMessage();
        }
    }

    public function getGuia($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener la guía: " . $ex->getMessage();
        }
    }

    public function editGuia($id, $titulo, $descripcion)
    {
        try {
            $sql = "UPDATE $this->table SET titulo=:titulo, descripcion=:descripcion WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":titulo", $titulo, PDO::PARAM_STR);
            $statement->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar la guía: " . $ex->getMessage();
        }
    }

    public function removeGuia($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al eliminar la guía: " . $ex->getMessage();
        }
    }
}
