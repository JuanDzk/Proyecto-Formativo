<?php
return [
    "/" => [
        "controller" => "App\Controllers\HomeController",
        "action" => "index"
    ],
    "/competencia/view" => [
        "controller" => "App\Controllers\CompetenciaController",
        "action" => "view"
    ],
    "/competencia/new" => [
        "controller" => "App\Controllers\CompetenciaController",
        "action" => "newCompetencia"
    ],
    "/competencia/create" => [
        "controller" => "App\Controllers\CompetenciaController",
        "action" => "createCompetencia"
    ],
    "/competencia/edit/(\d+)" => [
        "controller" => "App\Controllers\CompetenciaController",
        "action" => "editCompetencia"
    ],
    "/competencia/update" => [
        "controller" => "App\Controllers\CompetenciaController",
        "action" => "updateCompetencia"
    ],
    "/competencia/delete/(\d+)" => [
        "controller" => "App\Controllers\CompetenciaController",
        "action" => "deleteCompetencia"
    ],
    "/competencia/remove" => [
        "controller" => "App\Controllers\CompetenciaController",
        "action" => "remove"
    ],
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
    "/especialidad/update" => [
        "controller" => "App\Controllers\EspecialidadController",
        "action" => "updateEspecialidad"
    ],
    "/especialidad/delete/(\d+)" => [
        "controller" => "App\Controllers\EspecialidadController",
        "action" => "deleteEspecialidad"
    ],
    "/especialidad/remove" => [
        "controller" => "App\Controllers\EspecialidadController",
        "action" => "remove"
    ],
    "/guia/view" => [
        "controller" => "App\Controllers\GuiaController",
        "action" => "view"
    ],
    "/guia/new" => [
        "controller" => "App\Controllers\GuiaController",
        "action" => "newGuia"
    ],
    "/guia/create" => [
        "controller" => "App\Controllers\GuiaController",
        "action" => "createGuia"
    ],
    "/guia/edit/(\d+)" => [
        "controller" => "App\Controllers\GuiaController",
        "action" => "editGuia"
    ],
    "/guia/update" => [
        "controller" => "App\Controllers\GuiaController",
        "action" => "updateGuia"
    ],
    "/guia/delete/(\d+)" => [
        "controller" => "App\Controllers\GuiaController",
        "action" => "deleteGuia"
    ],
    "/guia/remove" => [
        "controller" => "App\Controllers\GuiaController",
        "action" => "remove"
    ],
    "/instructor/view" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "view"
    ],
    "/instructor/new" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "newInstructor"
    ],
    "/instructor/create" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "createInstructor"
    ],
    "/instructor/edit/(\d+)" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "editInstructor"
    ],
    "/instructor/update" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "updateInstructor"
    ],
    "/instructor/delete/(\d+)" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "deleteInstructor"
    ],
    "/instructor/remove" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "remove"
    ],
    "/momentosAprendizaje/view" => [
        "controller" => "App\Controllers\MomentosAprendizajeController",
        "action" => "view"
    ],
    "/momentosAprendizaje/new" => [
        "controller" => "App\Controllers\MomentosAprendizajeController",
        "action" => "newMomentosAprendizaje"
    ],
    "/momentosAprendizaje/create" => [
        "controller" => "App\Controllers\MomentosAprendizajeController",
        "action" => "createMomentosAprendizaje"
    ],
    "/momentosAprendizaje/edit/(\d+)" => [
        "controller" => "App\Controllers\MomentosAprendizajeController",
        "action" => "editMomentosAprendizaje"
    ],
    "/momentosAprendizaje/update" => [
        "controller" => "App\Controllers\MomentosAprendizajeController",
        "action" => "updateMomentosAprendizaje"
    ],
    "/momentosAprendizaje/delete/(\d+)" => [
        "controller" => "App\Controllers\MomentosAprendizajeController",
        "action" => "deleteMomentosAprendizaje"
    ],
    "/momentosAprendizaje/remove" => [
        "controller" => "App\Controllers\MomentosAprendizajeController",
        "action" => "remove"
    ],
    "/programaFormacion/view" => [
        "controller" => "App\Controllers\ProgramaFormacionController",
        "action" => "view"
    ],
    "/programaFormacion/view/(\d+)" => [
        "controller" => "App\Controllers\ProgramaFormacionController",
        "action" => "viewProgramaFormacion"
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
    "/programaFormacion/update" => [
        "controller" => "App\Controllers\ProgramaFormacionController",
        "action" => "updateProgramaFormacion"
    ],
    "/programaFormacion/delete/(\d+)" => [
        "controller" => "App\Controllers\ProgramaFormacionController",
        "action" => "deleteProgramaFormacion"
    ],
    "/programaFormacion/remove" => [
        "controller" => "App\Controllers\ProgramaFormacionController",
        "action" => "remove"
    ],
    "/resultado/view" => [
        "controller" => "App\Controllers\ResultadoController",
        "action" => "view"
    ],
    "/resultado/new" => [
        "controller" => "App\Controllers\ResultadoController",
        "action" => "newResultado"
    ],
    "/resultado/create" => [
        "controller" => "App\Controllers\ResultadoController",
        "action" => "createResultado"
    ],
    "/resultado/edit/(\d+)" => [
        "controller" => "App\Controllers\ResultadoController",
        "action" => "editResultado"
    ],
    "/resultado/update" => [
        "controller" => "App\Controllers\ResultadoController",
        "action" => "updateResultado"
    ],
    "/resultado/delete/(\d+)" => [
        "controller" => "App\Controllers\ResultadoController",
        "action" => "deleteResultado"
    ],
    "/resultado/remove" => [
        "controller" => "App\Controllers\ResultadoController",
        "action" => "remove"
    ],
    "/tecnicasDidacticas/view" => [
        "controller" => "App\Controllers\TecnicasDidacticasController",
        "action" => "view"
    ],
    "/tecnicasDidacticas/new" => [
        "controller" => "App\Controllers\TecnicasDidacticasController",
        "action" => "newTecnicasDidacticas"
    ],
    "/tecnicasDidacticas/create" => [
        "controller" => "App\Controllers\TecnicasDidacticasController",
        "action" => "createTecnicasDidacticas"
    ],
    "/tecnicasDidacticas/edit/(\d+)" => [
        "controller" => "App\Controllers\TecnicasDidacticasController",
        "action" => "editTecnicasDidacticas"
    ],
    "/tecnicasDidacticas/update" => [
        "controller" => "App\Controllers\TecnicasDidacticasController",
        "action" => "updateTecnicasDidacticas"
    ],
    "/tecnicasDidacticas/delete/(\d+)" => [
        "controller" => "App\Controllers\TecnicasDidacticasController",
        "action" => "deleteTecnicasDidacticas"
    ],
    "/tecnicasDidacticas/remove" => [
        "controller" => "App\Controllers\TecnicasDidacticasController",
        "action" => "remove"
    ],
    "/login/init" => [
        "controller" => "App\Controllers\LoginController",
        "action" => "initLogin"
    ],
    "/login/logout" => [
        "controller" => "App\Controllers\LoginController",
        "action" => "logoutLogin"
    ],
];
