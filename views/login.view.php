<?php

    require_once('libs/Smarty.class.php');

    class LoginView{
        
        public function showLogin($error = NULL, $registro = NULL){
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('error', $error);
            $smarty->assign('registro', $registro);
            $smarty->display('templates\showLogin.tpl');
        }

        public function recuperarContraseña(){
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->display('templates\forgout.tpl');
        }
    }
