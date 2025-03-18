<?php

namespace App\Controllers;

use App\Models\MomentosAprendizajeModel;

require_once 'BaseController.php';
require_once MAIN_APP_ROUTE . '../models/MomentosAprendizajeModel.php';

class MomentosAprendizajeController extends BaseController
{
    public function view()
    {
        $momentosModel = new MomentosAprendizajeModel();
        $momentos = $momentosModel->getAll();
        $data = [
            "momentos" => $momentos,
            "title" => "Momentos de Aprendizaje",
        ];
        $this->render('momentosAprendizaje/viewMomentosAprendizaje.php', $data);
    }

    public function newMomentosAprendizaje()
    {
        $data = [
            "title" => "Nuevo Momento de Aprendizaje",
        ];
        $this->render('momentosAprendizaje/newMomentosAprendizaje.php', $data);
    }

    public function createMomentosAprendizaje()
    {
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            $momentosModel = new MomentosAprendizajeModel();
            $momentosModel->saveMomentosAprendizaje($nombre);
            $this->redirectTo("momentosAprendizaje/view");
        }
    }

    public function editMomentosAprendizaje($id)
    {
        $momentosModel = new MomentosAprendizajeModel();
        $momento = $momentosModel->getMomentosAprendizaje($id);
        $data = [
            "momento" => $momento,
            "title" => "Editar Momento de Aprendizaje",
        ];
        $this->render('momentosAprendizaje/editMomentosAprendizaje.php', $data);
    }

    public function updateMomentosAprendizaje()
    {
        if (isset($_POST['id']) && isset($_POST['nombre'])) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $momentosModel = new MomentosAprendizajeModel();
            $momentosModel->editMomentosAprendizaje($id, $nombre);
            $this->redirectTo("momentosAprendizaje/view");
        }
    }

    public function deleteMomentosAprendizaje($id)
    {
        $momentosModel = new MomentosAprendizajeModel();
        $momento = $momentosModel->getMomentosAprendizaje($id);
        $data = [
            "momento" => $momento,
            "title" => "Eliminar Momento de Aprendizaje",
        ];
        $this->render('momentosAprendizaje/deleteMomentosAprendizaje.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $momentosModel = new MomentosAprendizajeModel();
            $momentosModel->removeMomentosAprendizaje($id);
            $this->redirectTo("momentosAprendizaje/view");
        }
    }
}