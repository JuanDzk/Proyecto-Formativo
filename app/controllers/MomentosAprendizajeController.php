<?php

namespace App\Controllers;

use App\Models\MomentosAprendizajeModel;
use PDOException;


require_once 'baseController.php';
require_once __DIR__ . '/../models/momentoModel.php';

class MomentosAprendizajeController
{
    private $model;

    public function __construct()
    {
        $this->model = new MomentosAprendizajeModel();
    }

    public function create($nombre)
    {
        try {
            return $this->model->saveMomentoAprendizaje($nombre);
        } catch (PDOException $ex) {
            echo "Error al crear momento de aprendizaje: " . $ex->getMessage();
        }
    }

    public function read($id)
    {
        try {
            return $this->model->getMomentoAprendizaje($id);
        } catch (PDOException $ex) {
            echo "Error al obtener momento de aprendizaje: " . $ex->getMessage();
        }
    }

    public function update($id, $nombre)
    {
        try {
            return $this->model->editMomentoAprendizaje($id, $nombre);
        } catch (PDOException $ex) {
            echo "Error al actualizar momento de aprendizaje: " . $ex->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            return $this->model->removeMomentoAprendizaje($id);
        } catch (PDOException $ex) {
            echo "Error al eliminar momento de aprendizaje: " . $ex->getMessage();
        }
    }
}
