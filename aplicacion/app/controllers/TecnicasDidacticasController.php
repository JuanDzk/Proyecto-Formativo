<?php

namespace App\Controllers;

use App\Models\TecnicasDidacticasModel;

require_once 'BaseController.php';
require_once MAIN_APP_ROUTE . '../models/TecnicasDidacticasModel.php';

class TecnicasDidacticasController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $tecnicasModel = new TecnicasDidacticasModel();
        $tecnicas = $tecnicasModel->getAll();
        $data = [
            "tecnicas" => $tecnicas,
            "title" => "Técnicas Didácticas",
        ];
        $this->render('tecnicasDidacticas/viewTecnicasDidacticas.php', $data);
    }

    public function newTecnicasDidacticas()
    {
        $data = [
            "title" => "Nueva Técnica Didáctica",
        ];
        $this->render('tecnicasDidacticas/newTecnicasDidacticas.php', $data);
    }

    public function createTecnicasDidacticas()
    {
        if (isset($_POST['nombre']) && isset($_POST['descripcion'])) {
            $nombre = $_POST['nombre'] ?? null;
            $descripcion = $_POST['descripcion'] ?? null;
            $tecnicasModel = new TecnicasDidacticasModel();
            $tecnicasModel->saveTecnicasDidacticas($nombre, $descripcion);
            $this->redirectTo("tecnicasDidacticas/view");
        }
    }

    public function viewTecnicasDidacticas($id)
    {
        $tecnicasDidacticasObj = new TecnicasDidacticasModel();
        $tecnicasDidacticasInfo = $tecnicasDidacticasObj->getTecnicasDidacticas($id);
        $data = [
            "tecnica" => $tecnicasDidacticasInfo,
            "title" => "Vista de un programa de Formación"
        ];
        $this->render('tecnicasDidacticas/viewOneTecnicasDidacticas.php', $data);
    }

    public function editTecnicasDidacticas($id)
    {
        $tecnicasModel = new TecnicasDidacticasModel();
        $tecnica = $tecnicasModel->getTecnicasDidacticas($id);
        $data = [
            "tecnica" => $tecnica,
            "title" => "Editar Técnica Didáctica",
        ];
        $this->render('tecnicasDidacticas/editTecnicasDidacticas.php', $data);
    }

    public function updateTecnicasDidacticas()
    {
        if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['descripcion'])) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $tecnicasModel = new TecnicasDidacticasModel();
            $tecnicasModel->editTecnicasDidacticas($id, $nombre, $descripcion);
            $this->redirectTo("tecnicasDidacticas/view");
        }
    }

    public function deleteTecnicasDidacticas($id)
    {
        $tecnicasModel = new TecnicasDidacticasModel();
        $tecnica = $tecnicasModel->getTecnicasDidacticas($id);
        $data = [
            "tecnica" => $tecnica,
            "title" => "Eliminar Técnica Didáctica",
        ];
        $this->render('tecnicasDidacticas/deleteTecnicasDidacticas.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $tecnicasModel = new TecnicasDidacticasModel();
            $tecnicasModel->removeTecnicasDidacticas($id);
            $this->redirectTo("tecnicasDidacticas/view");
        }
    }
}