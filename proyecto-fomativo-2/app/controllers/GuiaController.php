<?php

namespace App\Controllers;

use App\Models\GuiaModel;

require_once 'BaseController.php';
require_once MAIN_APP_ROUTE . '../models/GuiaModel.php';

class GuiaController extends BaseController
{
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
        $data = [
            "title" => "Nueva Guía",
        ];
        $this->render('guia/newGuia.php', $data);
    }

    public function createGuia()
    {
        if (isset($_POST['nombre']) && isset($_POST['presentacion']) && isset($_POST['glosarioTerminos']) && isset($_POST['referentesBibliograficos']) && isset($_POST['razonCambio'])) {
            $nombre = $_POST['nombre'];
            $presentacion = $_POST['presentacion'];
            $glosarioTerminos = $_POST['glosarioTerminos'];
            $referentesBibliograficos = $_POST['referentesBibliograficos'];
            $razonCambio = $_POST['razonCambio'];
            $guiaModel = new GuiaModel();
            $guiaModel->saveGuia($nombre, $presentacion, $glosarioTerminos, $referentesBibliograficos, $razonCambio);
            $this->redirectTo("guia/view");
        }
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
