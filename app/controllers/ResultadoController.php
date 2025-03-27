<?php

namespace App\Controllers;

use App\Models\ResultadoModel;
use PDOException;


require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/resultadoModel.php';
class ResultadoController
{
    private $model;

    public function __construct()
    {
        $this->model = new ResultadoModel();
    }

    public function create($nombre)
    {
        try {
            return $this->model->saveResultado($nombre);
        } catch (PDOException $ex) {
            echo "Error al crear resultado: " . $ex->getMessage();
        }
    }

    public function read($id)
    {
        try {
            return $this->model->getResultado($id);
        } catch (PDOException $ex) {
            echo "Error al obtener resultado: " . $ex->getMessage();
        }
    }

    public function update($id, $nombre)
    {
        try {
            return $this->model->editResultado($id, $nombre);
        } catch (PDOException $ex) {
            echo "Error al actualizar resultado: " . $ex->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            return $this->model->removeResultado($id);
        } catch (PDOException $ex) {
            echo "Error al eliminar resultado: " . $ex->getMessage();
        }
    }
}