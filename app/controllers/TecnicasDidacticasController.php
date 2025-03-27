<?php

namespace App\Controllers;

use App\Models\TecnicasDidacticasModel;
use PDOException;


require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/tecnicaDidacticaModel.php';

class TecnicasDidacticasController
{
    private $model;

    public function __construct()
    {
        $this->model = new TecnicasDidacticasModel();
    }

    public function create($nombre)
    {
        try {
            return $this->model->saveTecnicaDidactica($nombre);
        } catch (PDOException $ex) {
            echo "Error al crear técnica didáctica: " . $ex->getMessage();
        }
    }

    public function read($id)
    {
        try {
            return $this->model->getTecnicaDidactica($id);
        } catch (PDOException $ex) {
            echo "Error al obtener técnica didáctica: " . $ex->getMessage();
        }
    }

    public function update($id, $nombre)
    {
        try {
            return $this->model->editTecnicaDidactica($id, $nombre);
        } catch (PDOException $ex) {
            echo "Error al actualizar técnica didáctica: " . $ex->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            return $this->model->removeTecnicaDidactica($id);
        } catch (PDOException $ex) {
            echo "Error al eliminar técnica didáctica: " . $ex->getMessage();
        }
    }
}
