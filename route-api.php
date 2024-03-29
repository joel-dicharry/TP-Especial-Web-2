<?php
    require_once('Router.php');
    require_once('./api/comentarios.api.controller.php');
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $router = new Router();

    // rutas
    $router->addRoute("student/:ID/actas", "GET", "ComentariosApiController", "getActas");
    $router->addRoute("/actas", "POST", "ComentariosApiController", "agregarActa");
    $router->addRoute("/actas/:ID", "DELETE", "ComentariosApiController", "deleteActa");
    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 

