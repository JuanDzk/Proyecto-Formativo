<?php

namespace App\Controllers;

use App\Models\ProgramaFormacionModel;

require_once 'BaseController.php';
require_once MAIN_APP_ROUTE . '../models/ProgramaFormacionModel.php';

class ProgramaFormacionController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }
    public function view()
    {
        $programaModel = new ProgramaFormacionModel();
        $programas = $programaModel->getAll();
        $data = [
            "programas" => $programas,
            "title" => "Programas de Formación",
        ];
        $this->render('programaFormacion/viewProgramaFormacion.php', $data);
    }

    public function newProgramaFormacion()
    {
        $data = [
            "title" => "Nuevo Programa de Formación",
        ];
        $this->render('programaFormacion/newProgramaFormacion.php', $data);
    }

    public function createProgramaFormacion()
    {
        if (isset($_POST['nombre']) && isset($_POST['codProgramaFormacion'])) {
            $nombre = $_POST['nombre'];
            $codProgramaFormacion = $_POST['codProgramaFormacion'];
            $programaModel = new ProgramaFormacionModel();
            $programaModel->saveProgramaFormacion($codProgramaFormacion, $nombre);
            $this->redirectTo("programaFormacion/view");
        }
    }

    public function viewProgramaFormacion($id)
    {
        $programaFormacionObj = new ProgramaFormacionModel();
        $programaInfo = $programaFormacionObj->getProgramaFormacion($id);
        $data = [
            "programa" => $programaInfo,
            "title" => "Vista de un programa de Formación"
        ];
        $this->render('programaFormacion/viewOneProgramaFormacion.php', $data);
    }

    public function editProgramaFormacion($id)
    {
        $programaModel = new ProgramaFormacionModel();
        $programa = $programaModel->getProgramaFormacion($id);
        $data = [
            "programa" => $programa,
            "title" => "Editar Programa de Formación",
        ];
        $this->render('programaFormacion/editProgramaFormacion.php', $data);
    }

    public function updateProgramaFormacion()
    {
        if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['codProgramaFormacion'])) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $codProgramaFormacion = $_POST['codProgramaFormacion'];
            $programaModel = new ProgramaFormacionModel();
            $programaModel->editProgramaFormacion($id, $codProgramaFormacion, $nombre);
            $this->redirectTo("programaFormacion/view");
        }
    }

    public function deleteProgramaFormacion($id)
    {
        $programaModel = new ProgramaFormacionModel();
        $programa = $programaModel->getProgramaFormacion($id);
        $data = [
            "programa" => $programa,
            "title" => "Eliminar Programa de Formación",
        ];
        $this->render('programaFormacion/deleteProgramaFormacion.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $programaModel = new ProgramaFormacionModel();
            $programaModel->removeProgramaFormacion($id);
            $this->redirectTo("programaFormacion/view");
        }
    }
}
