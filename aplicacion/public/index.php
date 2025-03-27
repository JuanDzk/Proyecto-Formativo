<?php
require_once '../app/config/global.php';
require_once '../app/controllers/CompetenciaController.php';
require_once '../app/controllers/EspecialidadController.php';
require_once '../app/controllers/GuiaController.php';
require_once '../app/controllers/InstructorController.php';
require_once '../app/controllers/MomentosAprendizajeController.php';
require_once '../app/controllers/ProgramaFormacionController.php';
require_once '../app/controllers/ResultadoController.php';
require_once '../app/controllers/TecnicasDidacticasController.php';


$url = $_SERVER['REQUEST_URI']; //Lo que se ingresa en la URL
$routes = include_once '../app/config/routes.php';

$matchedRoute = null;
foreach ($routes as $route => $routeConfig) {
    if (preg_match("#^$route$#", $url, $matches)) {
        $matchedRoute = $routeConfig;
        break;
    }
}

if ($matchedRoute) {
    $controllerName = $matchedRoute['controller'];
    $actionName = $matchedRoute['action'];
    if (class_exists($controllerName) && method_exists($controllerName, $actionName)) {
        $parameters = array_slice($matches, 1);
        $controller = new $controllerName();
        $controller->$actionName(...$parameters);
        exit;
    } else {
        echo "No existe la clase o el metodo";
    }
} else {
    echo "No existe la ruta";
}

// header('Location: /login/init');
