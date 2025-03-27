<?php

namespace App\Controllers;

use App\Models\CompetenciaModel;
use App\Models\ProgramaFormacionModel;

require_once 'BaseController.php';
require_once MAIN_APP_ROUTE . '../models/CompetenciaModel.php';

class CompetenciaController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }
    public function view()
    {
        $competenciaModel = new CompetenciaModel();
        $competencias = $competenciaModel->getAll();
        $data = [
            "competencias" => $competencias,
            "title" => "Competencias",
        ];
        $this->render('competencia/viewCompetencia.php', $data);
    }

    public function newCompetencia()
    {
        $programaFormacionObj = new ProgramaFormacionModel();
        $programa = $programaFormacionObj->getAll();
        $data = [
            "programa" => $programa,
            "title" => "Nueva Competencia",
        ];
        $this->render('competencia/newCompetencia.php', $data);
    }

    public function createCompetencia()
    {
        if (isset($_POST['codigo']) && isset($_POST['nombre']) && isset($_POST['fkidprogramaformacion'])) {
            $codigo = $_POST['codigo'] ?? null;
            $nombre = $_POST['nombre'] ?? null;
            $fkIdProgramaFormacion = $_POST['fkidprogramaformacion'] ?? null;
            $competenciaModel = new CompetenciaModel();
            $competenciaModel->saveCompetencia($codigo, $nombre, $fkIdProgramaFormacion);
            // print_r($competenciaModel);
            $this->redirectTo("competencia/view");
        }
    }

    public function viewCompetencia($id)
    {
        $competenciaObj = new CompetenciaModel();
        $competenciaInfo = $competenciaObj->getCompetencia($id);
        $data = [
            "competencia" => $competenciaInfo,
            "title" => "Vista de una competencia"
        ];
        $this->render('competencia/viewOneCompetencia.php', $data);
    }

    public function editCompetencia($id)
    {
        $competenciaModel = new CompetenciaModel();
        $competencia = $competenciaModel->getCompetencia($id);
        $data = [
            "competencia" => $competencia,
            "title" => "Editar Competencia",
        ];
        $this->render('competencia/editCompetencia.php', $data);
    }

    public function updateCompetencia()
    {
        if (isset($_POST['id']) && isset($_POST['nombre'])) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $competenciaModel = new CompetenciaModel();
            $competenciaModel->editCompetencia($id, $nombre);
            $this->redirectTo("competencia/view");
        }
    }

    public function deleteCompetencia($id)
    {
        $competenciaModel = new CompetenciaModel();
        $competencia = $competenciaModel->getCompetencia($id);
        $data = [
            "competencia" => $competencia,
            "title" => "Eliminar Competencia",
        ];
        $this->render('competencia/deleteCompetencia.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $competenciaModel = new CompetenciaModel();
            $competenciaModel->removeCompetencia($id);
            $this->redirectTo("competencia/view");
        }
    }
}
