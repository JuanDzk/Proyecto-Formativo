<?php

namespace App\Controllers;

use App\Models\GuiaModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/guiaModel.php';

class GuiaController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $guiaObj = new GuiaModel();
        $guias = $guiaObj->getAll();
        $data = [
            "guias" => $guias,
            "title" => "Lista de Guías"
        ];
        $this->render('guia/viewGuia.php', $data);
    }

    public function newGuia()
    {
        $data = [
            "title" => "Nueva Guía"
        ];
        $this->render('guia/newGuia.php', $data);
    }

    public function createGuia()
    {
        if (isset($_POST['txtTitulo'], $_POST['txtDescripcion'])) {
            $titulo = $_POST['txtTitulo'];
            $descripcion = $_POST['txtDescripcion'];

            $guiaObj = new GuiaModel();
            $res = $guiaObj->saveGuia($titulo, $descripcion);
            $this->redirectTo("guia/view");
        }
    }

    public function viewGuia($id)
    {
        $guiaObj = new GuiaModel();
        $guia = $guiaObj->getGuia($id);
        $data = [
            "guia" => $guia,
            "title" => "Detalles de la Guía"
        ];
        $this->render('guia/viewOneGuia.php', $data);
    }

    public function editGuia($id)
    {
        $guiaObj = new GuiaModel();
        $guia = $guiaObj->getGuia($id);
        $data = [
            "guia" => $guia,
            "title" => "Editar Guía"
        ];
        $this->render('guia/editGuia.php', $data);
    }

    public function updateGuia()
    {
        if (isset($_POST['txtId'], $_POST['txtTitulo'], $_POST['txtDescripcion'])) {
            $id = $_POST['txtId'];
            $titulo = $_POST['txtTitulo'];
            $descripcion = $_POST['txtDescripcion'];

            $guiaObj = new GuiaModel();
            $res = $guiaObj->editGuia($id, $titulo, $descripcion);
            $this->redirectTo("guia/view");
        }
    }

    public function deleteGuia($id)
    {
        $guiaObj = new GuiaModel();
        $guia = $guiaObj->getGuia($id);
        $data = [
            "guia" => $guia,
            "title" => "Eliminar Guía"
        ];
        $this->render('guia/deleteGuia.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'];
            $guiaObj = new GuiaModel();
            $guiaObj->removeGuia($id);
            $this->redirectTo("guia/view");
        }
    }
}
