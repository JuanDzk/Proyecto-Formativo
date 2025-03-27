<?php

namespace App\Controllers;

use App\Models\CompetenciaModel;
use App\Models\ResultadoModel;

require_once 'BaseController.php';
require_once MAIN_APP_ROUTE . '../models/ResultadoModel.php';

class ResultadoController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

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
        $competenciaObj = new CompetenciaModel();
        $competenciaInfo = $competenciaObj->getAll();
        $data = [
            "competencia" => $competenciaInfo,
            "title" => "Nuevo Resultado",
        ];
        $this->render('resultado/newResultado.php', $data);
    }

    public function createResultado()
    {
        if (isset($_POST['fkIdCompetencia']) && isset($_POST['txtResultado'])) {
            $fkIdCompetencia = $_POST['fkIdCompetencia'] ?? null;
            $resultado = $_POST['txtResultado'] ?? null;
            $resultadoModel = new ResultadoModel();
            $resultadoModel->saveResultado($fkIdCompetencia,$resultado);
            $this->redirectTo("resultado/view");
            // print_r($resultadoModel);
        }
    }
    public function viewResultado($id)
    {
        $resultadoObj = new ResultadoModel();
        $resultadoInfo = $resultadoObj->getResultado($id);
        $data = [
            "resultado" => $resultadoInfo,
            "title" => "Vista de un resultado"
        ];
        $this->render('resultado/viewOneResultado.php', $data);
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
