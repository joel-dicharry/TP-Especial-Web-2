<?php
    require_once('Router.php');
    require_once('./controllers/comentarios.api.controller.php');
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $router = new Router();

    // rutas
    $router->addRoute("/actas/:ID", "GET", "ComentariosApiController", "getActas");
    $router->addRoute("/agregarActa", "POST", "ComentariosApiController", "agregarActa");


    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 