<?php

namespace App\Controllers;

use App\Models\EspecialidadModel;
use App\Models\GuiaModel;
use App\Models\InstructorModel;
use App\Models\ProgramaFormacionModel;

require_once 'BaseController.php';
require_once MAIN_APP_ROUTE . '../models/GuiaModel.php';

class GuiaController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }
    public function view()
    {
        $guiaModel = new GuiaModel();
        $guias = $guiaModel->getAll();
        $data = [
            "guias" => $guias,
            "title" => "Guías",
        ];
        $this->render('guia/viewGuia.php', $data);
    }

    public function newGuia()
    {
        $instructorObj = new InstructorModel();
        $instructor = $instructorObj->getAll();
        $programaFormacionObj = new ProgramaFormacionModel();
        $programa = $programaFormacionObj->getAll();
        $especialidadObj = new EspecialidadModel();
        $especialidad = $especialidadObj->getAll();
        $data = [
            "instructor" => $instructor,
            "programa" => $programa,
            "especialidad" => $especialidad,
            "title" => "Nueva Guía",
        ];
        $this->render('guia/newGuia.php', $data);
    }

    public function createGuia()
    {
        if (isset($_POST['nombre']) && isset($_POST['presentacion']) && isset($_POST['glosarioTerminos']) && isset($_POST['referentesBibliograficos']) && isset($_POST['razonCambio']) && isset($_POST['fkIdInstructor']) && isset($_POST['fkIdProgramaFormacion']) && isset($_POST['fkIdEspecialidad'])) {
            $nombre = $_POST['nombre'] ?? null;
            $presentacion = $_POST['presentacion'] ?? null;
            $glosarioTerminos = $_POST['glosarioTerminos'] ?? null;
            $referentesBibliograficos = $_POST['referentesBibliograficos'] ?? null;
            $razonCambio = $_POST['razonCambio'] ?? null;
            $instructor = $_POST['fkIdInstructor'] ?? null;
            $programaFormacion = $_POST['fkIdProgramaFormacion'] ?? null;
            $especialidad = $_POST['fkIdEspecialidad'] ?? null;            
            $guiaModel = new GuiaModel();
            $guiaModel->saveGuia($nombre, $presentacion, $glosarioTerminos, $referentesBibliograficos, $razonCambio, $instructor, $programaFormacion, $especialidad);
            $this->redirectTo("guia/view");
        }
    }

    public function viewGuia($id)
    {
        $guiaObj = new GuiaModel();
        $guiaInfo = $guiaObj->getGuia($id);
        $data = [
            "guia" => $guiaInfo,
            "title" => "Vista de una guia"
        ];
        $this->render('guia/viewOneGuia.php', $data);
    }

    public function editGuia($id)
    {
        $guiaModel = new GuiaModel();
        $guia = $guiaModel->getGuia($id);
        $data = [
            "guia" => $guia,
            "title" => "Editar Guía",
        ];
        $this->render('guia/editGuia.php', $data);
    }

    public function updateGuia()
    {
        if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['presentacion']) && isset($_POST['glosarioTerminos']) && isset($_POST['referentesBibliograficos']) && isset($_POST['razonCambio'])) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $presentacion = $_POST['presentacion'];
            $glosarioTerminos = $_POST['glosarioTerminos'];
            $referentesBibliograficos = $_POST['referentesBibliograficos'];
            $razonCambio = $_POST['razonCambio'];
            $guiaModel = new GuiaModel();
            $guiaModel->editGuia($id, $nombre, $presentacion, $glosarioTerminos, $referentesBibliograficos, $razonCambio);
            $this->redirectTo("guia/view");
        }
    }

    public function deleteGuia($id)
    {
        $guiaModel = new GuiaModel();
        $guia = $guiaModel->getGuia($id);
        $data = [
            "guia" => $guia,
            "title" => "Eliminar Guía",
        ];
        $this->render('guia/deleteGuia.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $guiaModel = new GuiaModel();
            $guiaModel->removeGuia($id);
            $this->redirectTo("guia/view");
        }
    }
}
