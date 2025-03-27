<?php

namespace App\Controllers;
require_once 'baseController.php';

class HomeController extends BaseController
{
    public function index()
    {
        echo '<br>CONTROLLER> HomeController';
        echo '<br>ACTION> index';
        $this->formartNumber(); //Se llama al método del padre
    }
    public function saludar()
    {
        echo '<br>CONTROLLER> HomeController';
        echo '<br>ACTIO> saludos!!!';
    }
}
