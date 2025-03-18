<?php

namespace App\Controllers;

use App\Models\EspecialidadModel;

require_once 'BaseController.php';
require_once MAIN_APP_ROUTE . '../models/EspecialidadModel.php';

class EspecialidadController extends BaseController
{
    public function view()
    {
        $especialidadModel = new EspecialidadModel();
        $especialidades = $especialidadModel->getAll();
        $data = [
            "especialidades" => $especialidades,
            "title" => "Especialidades",
        ];
        $this->render('especialidad/viewEspecialidad.php', $data);
    }

    public function newEspecialidad()
    {
        $data = [
            "title" => "Nueva Especialidad",
        ];
        $this->render('especialidad/newEspecialidad.php', $data);
    }

    public function createEspecialidad()
    {
        if (isset($_POST['nombre']) && isset($_POST['descripcion'])) {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $especialidadModel = new EspecialidadModel();
            $especialidadModel->saveEspecialidad($nombre, $descripcion);
            $this->redirectTo("especialidad/view");
        }
    }

    public function editEspecialidad($id)
    {
        $especialidadModel = new EspecialidadModel();
        $especialidad = $especialidadModel->getEspecialidad($id);
        $data = [
            "especialidad" => $especialidad,
            "title" => "Editar Especialidad",
        ];
        $this->render('especialidad/editEspecialidad.php', $data);
    }

    public function updateEspecialidad()
    {
        if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['descripcion'])) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $especialidadModel = new EspecialidadModel();
            $especialidadModel->editEspecialidad($id, $nombre, $descripcion);
            $this->redirectTo("especialidad/view");
        }
    }

    public function deleteEspecialidad($id)
    {
        $especialidadModel = new EspecialidadModel();
        $especialidad = $especialidadModel->getEspecialidad($id);
        $data = [
            "especialidad" => $especialidad,
            "title" => "Eliminar Especialidad",
        ];
        $this->render('especialidad/deleteEspecialidad.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $especialidadModel = new EspecialidadModel();
            $especialidadModel->removeEspecialidad($id);
            $this->redirectTo("especialidad/view");
        }
    }
}