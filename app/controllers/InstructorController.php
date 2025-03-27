<?php

namespace App\Controllers;

use App\Models\InstructorModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/instructorModel.php';

class InstructorController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $instructorObj = new InstructorModel();
        $instructores = $instructorObj->getAll();
        $data = [
            "instructores" => $instructores,
            "title" => "Lista de Instructores"
        ];
        $this->render('instructor/viewInstructor.php', $data);
    }

    public function newInstructor()
    {
        $data = [
            "title" => "Nuevo Instructor"
        ];
        $this->render('instructor/newInstructor.php', $data);
    }

    public function createInstructor()
    {
        if (isset($_POST['txtNombre'], $_POST['txtEmail'])) {
            $nombre = $_POST['txtNombre'];
            $email = $_POST['txtEmail'];

            $instructorObj = new InstructorModel();
            $res = $instructorObj->saveInstructor($nombre, $email);
            $this->redirectTo("instructor/view");
        }
    }

    public function viewInstructor($id)
    {
        $instructorObj = new InstructorModel();
        $instructor = $instructorObj->getInstructor($id);
        $data = [
            "instructor" => $instructor,
            "title" => "Detalles del Instructor"
        ];
        $this->render('instructor/viewOneInstructor.php', $data);
    }

    public function editInstructor($id)
    {
        $instructorObj = new InstructorModel();
        $instructor = $instructorObj->getInstructor($id);
        $data = [
            "instructor" => $instructor,
            "title" => "Editar Instructor"
        ];
        $this->render('instructor/editInstructor.php', $data);
    }

    public function updateInstructor()
    {
        if (isset($_POST['txtId'], $_POST['txtNombre'], $_POST['txtEmail'])) {
            $id = $_POST['txtId'];
            $nombre = $_POST['txtNombre'];
            $email = $_POST['txtEmail'];

            $instructorObj = new InstructorModel();
            $res = $instructorObj->editInstructor($id, $nombre, $email);
            $this->redirectTo("instructor/view");
        }
    }

    public function deleteInstructor($id)
    {
        $instructorObj = new InstructorModel();
        $instructor = $instructorObj->getInstructor($id);
        $data = [
            "instructor" => $instructor,
            "title" => "Eliminar Instructor"
        ];
        $this->render('instructor/deleteInstructor.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'];
            $instructorObj = new InstructorModel();
            $instructorObj->removeInstructor($id);
            $this->redirectTo("instructor/view");
        }
    }
}
