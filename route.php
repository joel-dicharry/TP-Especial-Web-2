<?php
    require_once('controllers/admin.controller.php');
    require_once('controllers/login.controller.php');
    require_once('controllers/alumnos.controller.php');

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');
    define("HOME", BASE_URL . 'home');
    define("ADMIN", BASE_URL . 'administrador');

    if ($_GET['action'] == '')
        $_GET['action'] = 'home';

    $partesURL = explode('/', $_GET['action']);
    
    switch ($partesURL[0]) {
        case 'home':
            $controller = new AlumnosController();
            $controller->showHome();
            break;
        case 'login':
            $controller = new LoginController();
            $controller->showLogin();
            break;
        case 'verify':
            $controller = new LoginController();
            $controller->verifyUser();
            break;
        case 'logout':
            $controller = new LoginController();
            $controller->logout();
            break;         
        case 'administrador':
            $controller = new AdminController();
            $controller->adminFunctions();
            break;
        case 'cargaralumno':
            $controller = new AdminController();
            $controller->cargarAdmTabla();
            break;
        case 'eliminarAlumno':
            $controller = new AdminController();
            $controller->deleteStudent($partesURL[1]);
            break;
        case 'formularioModificar':
            $controller = new AdminController();
            $controller->modifyForm($partesURL[1]);
            break;
        case 'modificarAlumno':
            $controller = new AdminController();
            $controller->modifyStudent($partesURL[1]);
            break;
        case 'agregarespecialidad':
            $controller = new AdminController();
            $controller->addEspec();
            break;
        default:
            echo "<h1>Error 404 - Página no encontrada</h1>";
            break;
        // case 'loginAdmin':
        //     $controller = new InicioController();
        //     $controller->showLogin();
        // break;      
        // default:
        //     $controller = new InicioController();
        //     $controller->showHome();
        //     break;

    }