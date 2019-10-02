<?php
    require_once('Router.php');
    require_once('controllers/admin.controller.php');
    require_once('controllers/login.controller.php');
    require_once('controllers/alumnos.controller.php');

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');
    define("HOME", BASE_URL . 'home');
    define("ADMIN", BASE_URL . 'administrador');

    $r = new Router();

    $r->addRoute("home", "GET", "AlumnosController", "showHome");
    $r->addRoute("login", "GET", "LoginController", "showLogin");
    $r->addRoute("verify", "POST", "LoginController", "verifyUser");
    $r->addRoute("logout", "POST", "LoginController", "logout");
    $r->addRoute("administrador", "POST", "AdminController", "adminFunctions");
    $r->addRoute("cargaralumno", "GET", "AdminController", "cargarAdmTabla");
    $r->addRoute("eliminarAlumno/:ID", "GET", "AdminController", "deleteStudent");
    $r->addRoute("formularioModificar/:ID", "GET", "AdminController", "modifyForm");
    $r->addRoute("modificarAlumno/:ID", "GET", "AdminController", "modifyStudent");
    $r->addRoute("agregarespecialidad", "GET", "AdminController", "addEspec");
 
    $r->setDefaultRoute("AlumnosController", "showHome");

    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
    
    // if ($_GET['action'] == '')
    //     $_GET['action'] = 'home';

    // $partesURL = explode('/', $_GET['action']);
    
    // switch ($partesURL[0]) {
    //     case 'home':
    //         $controller = new AlumnosController();
    //         $controller->showHome();
    //         break;
    //     case 'login':
    //         $controller = new LoginController();
    //         $controller->showLogin();
    //         break;
    //     case 'verify':
    //         $controller = new LoginController();
    //         $controller->verifyUser();
    //         break;
    //     case 'logout':
    //         $controller = new LoginController();
    //         $controller->logout();
    //         break;         
    //     case 'administrador':
    //         $controller = new AdminController();
    //         $controller->adminFunctions();
    //         break;
    //     case 'cargaralumno':
    //         $controller = new AdminController();
    //         $controller->cargarAdmTabla();
    //         break;
    //     case 'eliminarAlumno':
    //         $controller = new AdminController();
    //         $controller->deleteStudent($partesURL[1]);
    //         break;
    //     case 'formularioModificar':
    //         $controller = new AdminController();
    //         $controller->modifyForm($partesURL[1]);
    //         break;
    //     case 'modificarAlumno':
    //         $controller = new AdminController();
    //         $controller->modifyStudent($partesURL[1]);
    //         break;
    //     case 'agregarespecialidad':
    //         $controller = new AdminController();
    //         $controller->addEspec();
    //         break;
    //     default:
    //         echo "<h1>Error 404 - Página no encontrada</h1>";
    //         break;
    // }