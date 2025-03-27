<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class CompetenciaModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "competencia"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveCompetencia($idCompetencia,$nombre,$fkIdProgramaFormacion)
    {
        try {
            $sql = "INSERT INTO $this->table (idCompetencia, nombre, fkIdProgramaFormacion) VALUES (:idCompetencia, :nombre, :fkIdProgramaFormacion)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':idCompetencia', $idCompetencia, PDO::PARAM_STR);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':fkIdProgramaFormacion', $fkIdProgramaFormacion, PDO::PARAM_STR);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "Error al guardar la competencia>" . $ex->getMessage();
        }
    }

    public function getCompetencia($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE idCompetencia=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener la competencia>" . $ex->getMessage();
        }
    }

    public function editCompetencia($id, $nombre)
    {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre WHERE idCompetencia=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar la competencia>" . $ex->getMessage();
        }
    }

    public function removeCompetencia($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE idCompetencia=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar la competencia: " . $ex->getMessage();
            return false;
        }
    }
}
