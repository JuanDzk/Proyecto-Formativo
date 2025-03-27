<?php
    return [
       
        // Roles
        "/competencia/index" => [
            "controller" => "App\Controllers\competenciaController",
            "action" => "index"
        ],
        "/competencia/view" => [
            "controller" => "App\Controllers\competenciaController",
            "action" => "view"
        ],
        "/competencia/new" => [
            "controller" => "App\Controllers\competenciaController",
            "action" => "newcompetencia"
        ],
        "/competencia/create" => [
            "controller" => "App\Controllers\competenciaController",
            "action" => "createcompetencia"
        ],
        "/competencia/view/(\d+)" => [
            "controller" => "App\Controllers\competenciaController",
            "action" => "viewcompetencia"
        ],
        "/competencia/edit/(\d+)" => [
            "controller" => "App\Controllers\competenciaController",
            "action" => "editcompetencia"
        ],
        "/competencia/update" => [
            "controller" => "App\Controllers\competenciaController",
            "action" => "updatecompetencia"
        ],

        // Actividades
        "/actividad/view" => [ // Nueva ruta para ver actividades
            "controller" => "App\Controllers\ActividadController",
            "action" => "view"
        ],
        "/actividad/new" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "newActividad"
        ],
        "/actividad/create" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "createActividad"   
        ],
        "/actividad/edit/(\d+)" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "editActividad"
        ],
        "/actividad/view/(\d+)" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "viewActividad"
        ],
        "/actividad/update" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "updateActividad"
        ],

        // Especialidad
        "/especialidad/view" => [
            "controller" => "App\Controllers\EspecialidadController",
            "action" => "view"
        ],
        "/especialidad/new" => [
            "controller" => "App\Controllers\EspecialidadController",
            "action" => "newEspecialidad"
        ],
        "/especialidad/create" => [
            "controller" => "App\Controllers\EspecialidadController",
            "action" => "createEspecialidad"   
        ],
        "/especialidad/edit/(\d+)" => [
            "controller" => "App\Controllers\EspecialidadController",
            "action" => "editEspecialidad"
        ],
        "/especialidad/view/(\d+)" => [
            "controller" => "App\Controllers\EspecialidadController",
            "action" => "viewEspecialidad"
        ],
        "/especialidad/update" => [
            "controller" => "App\Controllers\EspecialidadController",
            "action" => "updateEspecialidad"
        ],

        // Programa de Formacion
        "/programaFormacion/view" => [
            "controller" => "App\Controllers\ProgramaFormacionController",
            "action" => "view"
        ],
        "/programaFormacion/new" => [
            "controller" => "App\Controllers\ProgramaFormacionController",
            "action" => "newProgramaFormacion"
        ],
        "/programaFormacion/create" => [
            "controller" => "App\Controllers\ProgramaFormacionController",
            "action" => "createProgramaFormacion"
        ],
        "/programaFormacion/edit/(\d+)" => [
            "controller" => "App\Controllers\ProgramaFormacionController",
            "action" => "editProgramaFormacion"
        ],
        "/programaFormacion/view/(\d+)" => [
            "controller" => "App\Controllers\ProgramaFormacionController",
            "action" => "viewProgramaFormacion"
        ],
        "/programaFormacion/update" => [
            "controller" => "App\Controllers\ProgramaFormacionController",
            "action" => "updateProgramaFormacion"
        ],
    ];
?>