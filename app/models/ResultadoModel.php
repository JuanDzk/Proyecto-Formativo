<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class ResultadoModel extends BaseModel
{
    public function __construct(
        ?int $id = null,
        ?string $descripcion = null
    ) {
        $this->table = "resultado";
        parent::__construct();
    }

    public function saveResultado($descripcion)
    {
        try {
            $sql = "INSERT INTO $this->table (descripcion) VALUES (:descripcion)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el resultado: " . $ex->getMessage();
        }
    }

    public function getResultado($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el resultado: " . $ex->getMessage();
        }
    }

    public function editResultado($id, $descripcion)
    {
        try {
            $sql = "UPDATE $this->table SET descripcion=:descripcion WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el resultado: " . $ex->getMessage();
        }
    }

    public function removeResultado($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al eliminar el resultado: " . $ex->getMessage();
        }
    }
}