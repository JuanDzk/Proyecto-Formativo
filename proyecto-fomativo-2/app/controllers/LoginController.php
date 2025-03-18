<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InstructorModel;

class LoginController extends BaseController
{
    public function __construct()
    {
        $this->layout = "login_layout";
    }

    public function initLogin()
    {
        if (isset($_POST['txtUser ']) && isset($_POST['txtPassword'])) {
            $user = trim($_POST['txtUser']) ?? null;
            $password = trim($_POST['txtPassword']) ?? null;
            if ($user != "" && $password != "") {
                // Validar la existencia del usuario y contraseña en la BD
                $instructorController = new InstructorModel();
                $resp = $instructorController->validarLogin($user, $password);
                if ($resp) {
                    $this->redirectTo('programaFormacion/view');
                } else {
                    $errors = "Usuario y/o contraseña incorrecta";
                }
            } else {
                $errors = "El usuario y/o contraseña no pueden ser vacíos";
            }
            $data = [
                'errors' => $errors,
            ];
            $this->render('login/login.php', $data);
        } else {
            $this->render('login/login.php');
        }
    }

    public function logoutLogin()
    {
        session_destroy();
        header('Location:/login/init');
    }
}
