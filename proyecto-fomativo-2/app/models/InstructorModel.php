<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class InstructorModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "instructor"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }


    public function validarLogin($user, $password)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE email = :email";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":email",$email);
            $statement->execute();
            $instructor = $statement->fetch(PDO::FETCH_OBJ);

            if ($instructor && password_verify($password, $instructor->password)) {
                // Aquí puedes guardar información del instructor$instructor en la sesión
                $_SESSION['idInstructor'] = $instructor->id;
                $_SESSION['nombre'] = $instructor->nombre;
                $_SESSION['rol'] = $instructor->rol; // Asumiendo que tienes un campo rol
                return true;
            }
            return false;
        } catch (PDOException $ex) {
            echo "Error al validar el login>" . $ex->getMessage();
            return false;
        }
    }
    public function saveInstructor($nombre, $password, $email, $telefono, $fkIdEspecialidad)
    {
        try {
            $sql = "INSERT INTO $this->table (nombre, password, email, telefono, fkIdEspecialidad) VALUES (:nombre, :password, :email, :telefono, :fkIdEspecialidad)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':password', $password, PDO::PARAM_STR);
            $statement->bindParam(':email', $email, PDO::PARAM_STR);
            $statement->bindParam(':telefono', $telefono, PDO::PARAM_STR);
            $statement->bindParam(':fkIdEspecialidad', $fkIdEspecialidad, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el instructor>" . $ex->getMessage();
        }
    }

    public function getInstructor($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE idInstructor=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el instructor>" . $ex->getMessage();
        }
    }

    public function editInstructor($id, $nombre, $password, $email, $telefono, $fkIdEspecialidad)
    {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre, password=:password, email=:email, telefono=:telefono, fkIdEspecialidad=:fkIdEspecialidad WHERE idInstructor=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":password", $password, PDO::PARAM_STR);
            $statement->bindParam(":email", $email, PDO::PARAM_STR);
            $statement->bindParam(":telefono", $telefono, PDO::PARAM_STR);
            $statement->bindParam(":fkIdEspecialidad", $fkIdEspecialidad, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el instructor>" . $ex->getMessage();
        }
    }

    public function removeInstructor($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE idInstructor=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el instructor: " . $ex->getMessage();
            return false;
        }
    }
}
