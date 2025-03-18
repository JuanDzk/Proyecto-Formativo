<?php

namespace App\Controllers;

use App\Models\ResultadoModel;

require_once 'BaseController.php';
require_once MAIN_APP_ROUTE . '../models/ResultadoModel.php';

class ResultadoController extends BaseController
{
    public function view()
    {
        $resultadoModel = new ResultadoModel();
        $resultados = $resultadoModel->getAll();
        $data = [
            "resultados" => $resultados,
            "title" => "Resultados",
        ];
        $this->render('resultado/viewResultado.php', $data);
    }

    public function newResultado()
    {
        $data = [
            "title" => "Nuevo Resultado",
        ];
        $this->render('resultado/newResultado.php', $data);
    }

    public function createResultado()
    {
        if (isset($_POST['fkIdCompetencia'])) {
            $fkIdCompetencia = $_POST['fkIdCompetencia'];
            $resultadoModel = new ResultadoModel();
            $resultadoModel->saveResultado($fkIdCompetencia);
            $this->redirectTo("resultado/view");
        }
    }
    public function editResultado($id)
    {
        $resultadoModel = new ResultadoModel();
        $resultado = $resultadoModel->getResultado($id);
        $data = [
            "resultado" => $resultado,
            "title" => "Editar Resultado",
        ];
        $this->render('resultado/editResultado.php', $data);
    }

    public function updateResultado()
    {
        if (isset($_POST['id']) && isset($_POST['fkIdCompetencia'])) {
            $id = $_POST['id'];
            $fkIdCompetencia = $_POST['fkIdCompetencia'];
            $resultadoModel = new ResultadoModel();
            $resultadoModel->editResultado($id, $fkIdCompetencia);
            $this->redirectTo("resultado/view");
        }
    }

    public function deleteResultado($id)
    {
        $resultadoModel = new ResultadoModel();
        $resultado = $resultadoModel->getResultado($id);
        $data = [
            "resultado" => $resultado,
            "title" => "Eliminar Resultado",
        ];
        $this->render('resultado/deleteResultado.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $resultadoModel = new ResultadoModel();
            $resultadoModel->removeResultado($id);
            $this->redirectTo("resultado/view");
        }
    }
}
