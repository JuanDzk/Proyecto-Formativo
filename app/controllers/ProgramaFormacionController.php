<?php

namespace App\Controllers;

use App\Models\ProgramaFormacionModel;
use PDOException;


require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/programaFormacionModel.php';
class ProgramaFormacionController
{
    private $model;

    public function __construct()
    {
        $this->model = new ProgramaFormacionModel();
    }

    public function create($nombre)
    {
        try {
            return $this->model->saveProgramaFormacion($nombre);
        } catch (PDOException $ex) {
            echo "Error al crear programa de formación: " . $ex->getMessage();
        }
    }

    public function read($id)
    {
        try {
            return $this->model->getProgramaFormacion($id);
        } catch (PDOException $ex) {
            echo "Error al obtener programa de formación: " . $ex->getMessage();
        }
    }

    public function update($id, $nombre)
    {
        try {
            return $this->model->editProgramaFormacion($id, $nombre);
        } catch (PDOException $ex) {
            echo "Error al actualizar programa de formación: " . $ex->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            return $this->model->removeProgramaFormacion($id);
        } catch (PDOException $ex) {
            echo "Error al eliminar programa de formación: " . $ex->getMessage();
        }
    }
}
