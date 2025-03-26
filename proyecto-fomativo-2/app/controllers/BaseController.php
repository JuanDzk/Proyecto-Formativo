<?php

namespace App\Controllers;
session_start();

class BaseController
{
    protected string $layout = "main_layout";

    public function __construct()
    {
        // if (isset($_SESSION['timeOut'])) {
        //     $tiempoSesion = time() - $_SESSION['timeOut'];
        //     if ($tiempoSesion > INACTIVE_TIME * 60) {
        //         session_destroy();
        //         header('Location:/login/init');
        //     } else {
        //         $_SESSION['timeOut'] = time();
        //     }
        // }
    }

    public function render(string $view, array $arrayData = null)
    {
        if (isset($arrayData) && is_array($arrayData)) {
            foreach ($arrayData as $key => $value) {
                $$key = $value;
            }
        }
        $content = MAIN_APP_ROUTE . "../views/$view";
        $layout = MAIN_APP_ROUTE . "../views/layouts/{$this->layout}.php";
        include_once $layout;
    }

    public function redirectTo($view)
    {
        header("location:/$view");
    }
}