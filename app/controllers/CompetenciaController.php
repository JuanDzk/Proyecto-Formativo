<?php

namespace App\Controllers;

use App\Models\CompetenciaModel;

require_once 'baseController.php';
require_once __DIR__ . "/../models/CompetenciaModel.php";

class CompetenciaController extends BaseController {
    public function __construct() {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view() {
        $competenciaObj = new CompetenciaModel();
        $competencias = $competenciaObj->getAll();
        $data = [
            "competencias" => $competencias,
            "title" => "Competencias"
        ];
        $this->render('competencia/viewCompetencia.php', $data);
    }

    public function newCompetencia() {
        $data = [
            "title" => "Nueva Competencia"
        ];
        $this->render('competencia/newCompetencia.php', $data);
    }

    public function createCompetencia() {
        if (isset($_POST['txtNombre'])) {
            $nombre = $_POST['txtNombre'] ?? null;
            $competenciaObj = new CompetenciaModel();
            $res = $competenciaObj->saveCompetencia($nombre);
            $this->redirectTo("competencia/view");
        }
    }

    public function viewCompetencia($id) {
        $competenciaObj = new CompetenciaModel();
        $competenciaInfo = $competenciaObj->getCompetencia($id);
        $data = [
            "competencia" => $competenciaInfo,
            "title" => "Detalle de Competencia"
        ];
        $this->render('competencia/viewOneCompetencia.php', $data);
    }

    public function editCompetencia($id) {
        $competenciaObj = new CompetenciaModel();
        $competenciaInfo = $competenciaObj->getCompetencia($id);
        $data = [
            "competencia" => $competenciaInfo,
            "title" => "Editar Competencia"
        ];
        $this->render('competencia/editCompetencia.php', $data);
    }

    public function updateCompetencia() {
        if (isset($_POST['txtId']) && isset($_POST['txtNombre'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;

            $competenciaObj = new CompetenciaModel();
            $res = $competenciaObj->editCompetencia($id, $nombre);
            $this->redirectTo("competencia/view");
        }
    }

    public function deleteCompetencia($id) {
        $competenciaObj = new CompetenciaModel();
        $competenciaInfo = $competenciaObj->getCompetencia($id);
        $data = [
            "competencia" => $competenciaInfo,
            "title" => "Eliminar Competencia"
        ];
        $this->render('competencia/deleteCompetencia.php', $data);
    }
    
    public function remove() {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $competenciaObj = new CompetenciaModel();
            $competenciaObj->removeCompetencia($id);
            $this->redirectTo("competencia/view");
        }
    }
}
