<?php
    require_once('controllers/task.controller.php');

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
            $controller->deleteStudent();
            break;
        default:
            $controller = new InicioController();
            $controller->showHome();
            break;
    }