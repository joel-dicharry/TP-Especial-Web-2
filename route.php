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
    $r->addRoute("createUser", "POST", "LoginController", "createUser");
    $r->addRoute("logout", "GET", "LoginController", "logout");
    $r->addRoute("administrador", "GET", "AdminController", "adminFunctions");
    $r->addRoute("cargaralumno", "POST", "AdminController", "cargarAdmTabla");
    $r->addRoute("eliminarAlumno/:ID", "POST", "AdminController", "deleteStudent");
    $r->addRoute("eliminarEspec/:ID", "POST", "AdminController", "deleteEspecialidad");
    $r->addRoute("formularioModificar/:ID", "POST", "AdminController", "modifyForm");
    $r->addRoute("formularioModificarEsp/:ID", "POST", "AdminController", "modifyEspForm");
    $r->addRoute("modificarEsp/:ID", "POST", "AdminController", "modifyEspecialidad");
    $r->addRoute("modificarAlumno/:ID", "POST", "AdminController", "modifyStudent");
    $r->addRoute("agregarespecialidad", "POST", "AdminController", "addEspec");
    $r->addRoute("alumnoview/:ID", "GET", "AlumnosController", "showStudent");
    $r->addRoute("filtrar/:ID", "GET", "AlumnosController", "filtrarEsp");
    $r->addRoute("preceptoras", "GET", "AdminController", "showPrecept");
    $r->addRoute("actasAlumno/:ID", "GET", "AdminController", "addActas");
    $r->addRoute("agregar-quitar/:ID", "GET", "AdminController", "modificarPermisos");
    $r->addRoute("borrarPreceptor/:ID", "GET", "AdminController", "eliminarUsuario");
    $r->addRoute("recuperContraseña", "GET", "LoginController", "recuperarContraseña");
    $r->addRoute("verifyAnswer", "POST", "LoginController", "verifyAnswer");
    
    $r->setDefaultRoute("AlumnosController", "showHome");

    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);