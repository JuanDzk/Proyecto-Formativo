<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class GuiaModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "guia"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveGuia($nombre, $presentacion, $glosarioTerminos, $referentesBibliograficos, $razonCambio)
    {
        try {
            $sql = "INSERT INTO $this->table (nombre, presentacion, glosarioTerminos, referentesBibliograficos, razonCambio) VALUES (:nombre, :presentacion, :glosarioTerminos, :referentesBibliograficos, :razonCambio)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':presentacion', $presentacion, PDO::PARAM_STR);
            $statement->bindParam(':glosarioTerminos', $glosarioTerminos, PDO::PARAM_STR);
            $statement->bindParam(':referentesBibliograficos', $referentesBibliograficos, PDO::PARAM_STR);
            $statement->bindParam(':razonCambio', $razonCambio, PDO::PARAM_STR);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar la guía>" . $ex->getMessage();
        }
    }

    public function getGuia($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE idGuia=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener la guía>" . $ex->getMessage();
        }
    }

    public function editGuia($id, $nombre, $presentacion, $glosarioTerminos, $referentesBibliograficos, $razonCambio)
    {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre, presentacion=:presentacion, glosarioTerminos=:glosarioTerminos, referentesBibliograficos=:referentesBibliograficos, razonCambio=:razonCambio WHERE idGuia=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":presentacion", $presentacion, PDO::PARAM_STR);
            $statement->bindParam(":glosarioTerminos", $glosarioTerminos, PDO::PARAM_STR);
            $statement->bindParam(":referentesBibliograficos", $referentesBibliograficos, PDO::PARAM_STR);
            $statement->bindParam(":razonCambio", $razonCambio, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar la guía>" . $ex->getMessage();
        }
    }

    public function removeGuia($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE idGuia=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar la guía: " . $ex->getMessage();
            return false;
        }
    }
}