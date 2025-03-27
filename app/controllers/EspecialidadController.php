<?php

namespace App\Controllers;

use App\Models\EspecialidadModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/especialidadModel.php';

class EspecialidadController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $especialidadObj = new EspecialidadModel();
        $especialidades = $especialidadObj->getAll();
        $data = [
            "especialidades" => $especialidades,
            "title" => "Especialidades"
        ];
        $this->render('especialidad/viewEspecialidad.php', $data);
    }

    public function newEspecialidad()
    {
        $data = [
            "title" => "Nueva Especialidad"
        ];
        $this->render('especialidad/newEspecialidad.php', $data);
    }

    public function createEspecialidad()
    {
        if (isset($_POST['txtNombre'])) {
            $nombre = $_POST['txtNombre'] ?? null;
            $especialidadObj = new EspecialidadModel();
            $res = $especialidadObj->saveEspecialidad($nombre);
            $this->redirectTo("especialidad/view");
        }
    }

    public function viewEspecialidad($id)
    {
        $especialidadObj = new EspecialidadModel();
        $especialidad = $especialidadObj->getEspecialidad($id);
        $data = [
            "especialidad" => $especialidad,
            "title" => "Especialidad"
        ];
        $this->render('especialidad/viewOneEspecialidad.php', $data);
    }

    public function editEspecialidad($id)
    {
        $especialidadObj = new EspecialidadModel();
        $especialidad = $especialidadObj->getEspecialidad($id);
        $data = [
            "especialidad" => $especialidad,
            "title" => "Editar Especialidad"
        ];
        $this->render('especialidad/editEspecialidad.php', $data);
    }

    public function updateEspecialidad()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtNombre'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;

            $especialidadObj = new EspecialidadModel();
            $res = $especialidadObj->editEspecialidad($id, $nombre);
            $this->redirectTo("especialidad/view");
        }
    }

    public function deleteEspecialidad($id)
    {
        $especialidadObj = new EspecialidadModel();
        $especialidad = $especialidadObj->getEspecialidad($id);
        $data = [
            "especialidad" => $especialidad,
            "title" => "Eliminar Especialidad"
        ];
        $this->render('especialidad/deleteEspecialidad.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $especialidadObj = new EspecialidadModel();
            $especialidadObj->removeEspecialidad($id);
            $this->redirectTo("especialidad/view");
        }
    }
}
