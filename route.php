<?php
    require_once('controllers/controller.php');

    if ($_GET['action'] == '')
        $_GET['action'] = 'ver';

    $partesURL = explode('/', $_GET['action']);
    
    switch ($partesURL[0]) {
        case 'home':
            $controller = new InicioController();
            $controller->showHome();
            break;
        case 'administrador':
            $controller = new InicioController();
            $controller->adminFunctions();
            break;
        case 'cargaralumno':
            $controller = new InicioController();
            $controller->cargarAdmTabla();
            break;
        case 'eliminarAlumno':
            $controller = new InicioController();
            $controller->deleteStudent($partesURL[1]);
            break;
        case 'formularioModificar':
            $controller = new InicioController();
            $controller->modifyForm($partesURL[1]);
            break;
        case 'modificarAlumno':
            $controller = new InicioController();
            $controller->modifyStudent($partesURL[1]);
            break;
        case 'agregarespecialidad':
            $controller = new InicioController();
            $controller->addEspec();
            break;
        default:
            $controller = new InicioController();
            $controller->showHome();
            break;

    }