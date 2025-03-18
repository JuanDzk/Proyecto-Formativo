<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class ResultadoModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "resultado"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveResultado($fkIdCompetencia)
    {
        try {
            $sql = "INSERT INTO $this->table (fkIdCompetencia) VALUES (:fkIdCompetencia)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':fkIdCompetencia', $fkIdCompetencia, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el resultado>" . $ex->getMessage();
        }
    }

    public function getResultado($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE idResultado=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el resultado>" . $ex->getMessage();
        }
    }

    public function editResultado($id, $fkIdCompetencia)
    {
        try {
            $sql = "UPDATE $this->table SET fkIdCompetencia=:fkIdCompetencia WHERE idResultado=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":fkIdCompetencia", $fkIdCompetencia, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el resultado>" . $ex->getMessage();
        }
    }

    public function removeResultado($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE idResultado=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el resultado: " . $ex->getMessage();
            return false;
        }
    }
}