<?php

namespace App\Controllers;

use App\Models\EspecialidadModel;
use App\Models\InstructorModel;

require_once 'BaseController.php';
require_once MAIN_APP_ROUTE . '../models/InstructorModel.php';

class InstructorController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }
    public function view()
    {
        $instructorModel = new InstructorModel();
        $instructores = $instructorModel->getAll();
        $data = [
            "instructores" => $instructores,
            "title" => "Instructores",
        ];
        $this->render('instructor/viewInstructor.php', $data);
    }

    public function newInstructor()
    {
        $especialidadObj = new EspecialidadModel();
        $especialidad = $especialidadObj->getAll();
        $data = [
            "especialidad" => $especialidad,
            "title" => "Nuevo Instructor",
        ];
        $this->render('instructor/newInstructor.php', $data);
    }

    public function createInstructor()
    {
        if (isset($_POST['nombre']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['telefono']) && isset($_POST['fkIdEspecialidad'])) {
            $nombre = $_POST['nombre'] ?? null;
            $password = $_POST['password'] ?? null;
            $email = $_POST['email'] ?? null;
            $telefono = $_POST['telefono'] ?? null;
            $fkIdEspecialidad = $_POST['fkIdEspecialidad'] ?? null;
            $instructorModel = new InstructorModel();
            $instructorModel->saveInstructor($nombre, $password, $email, $telefono, $fkIdEspecialidad);
            $this->redirectTo("instructor/view");
        }
    }

    public function viewInstructor($id)
    {
        $instructorObj = new InstructorModel();
        $instructorInfo = $instructorObj->getInstructor($id);
        $data = [
            "instructor" => $instructorInfo,
            "title" => "Vista de una guia"
        ];
        $this->render('instructor/viewOneInstructor.php', $data);
    }
    public function editInstructor($id)
    {
        $instructorModel = new InstructorModel();
        $instructor = $instructorModel->getInstructor($id);
        $data = [
            "instructor" => $instructor,
            "title" => "Editar Instructor",
        ];
        $this->render('instructor/editInstructor.php', $data);
    }

    public function updateInstructor()
    {
        if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['telefono']) && isset($_POST['fkIdEspecialidad'])) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $fkIdEspecialidad = $_POST['fkIdEspecialidad'];
            $instructorModel = new InstructorModel();
            $instructorModel->editInstructor($id, $nombre, $password, $email, $telefono, $fkIdEspecialidad);
            $this->redirectTo("instructor/view");
        }
    }

    public function deleteInstructor($id)
    {
        $instructorModel = new InstructorModel();
        $instructor = $instructorModel->getInstructor($id);
        $data = [
            "instructor" => $instructor,
            "title" => "Eliminar Instructor",
        ];
        $this->render('instructor/deleteInstructor.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $instructorModel = new InstructorModel();
            $instructorModel->removeInstructor($id);
            $this->redirectTo("instructor/view");
        }
    }
}
