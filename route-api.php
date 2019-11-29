<?php
    require_once('Router.php');
    require_once('./api/comentarios.api.controller.php');
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $router = new Router();

    // rutas
    $router->addRoute("/actas/:ID", "GET", "ComentariosApiController", "getActas");
    $router->addRoute("/actas", "POST", "ComentariosApiController", "agregarActa");
    $router->addRoute("/actas/:ID", "DELETE", "ComentariosApiController", "deleteActa");
    //student?actas=id_fk
    // $router->addRoute("/student", "GET", "ComentariosApiController", "getActas");

    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 


    // borrar de preceptores
    // vista publico
    // 1er ruta de api
    // modificar <button>
    // borrar imagenes de la bbdd