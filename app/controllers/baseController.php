<?php

namespace App\Controllers;

session_start();

class BaseController {
    protected string $layout = "main_layout";

    public function __construct(){
        // Validar el timepo de inactividad de un usuario
        // El timepo no debe superar lo configurado en INACTIVE_TIME
        if(isset($_SESSION['timeout'])){
            $tiempoSesion = time() - $_SESSION['timeout'];
            if($tiempoSesion > INACTIVE_TIME*60){
                // Se destruye la sesión por inactividad
                session_destroy();
                header("location:/login/login");
            } else {
                $_SESSION['timeout'] = time();
            }
        }
    }

    public function render(string $view, array $arrayData){
        if (isset($arrayData) && is_array($arrayData)) {

            foreach ($arrayData as $key => $value) {
                //Se extraen todos los datos que llegan en arrayData
                //Se crean vbles de acuerdo a las keys
                $$key = $value;
            }
        }

        $content = MAIN_APP_ROUTE."../views/$view";
        $layout = MAIN_APP_ROUTE."../views/layouts/{$this->layout}.php";
        include_once $layout; 
    }
    public function formartNumber()
    {
        echo "<br> Formatea un número";
    }
    public function redirectTo($view)
    {
        header("location:/$view");
    }
}
